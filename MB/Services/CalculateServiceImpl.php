<?php
namespace MB\Services;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 9:30
 */
use MB\Common\CalculatingService;
use MB\I\ItemInterface;
use MB\Exception\ItemLoaderException;
use MB\Glor\Npc\AbstractPeopleNpc;
use MB\Glor\Npc\AbstractNpc;

class CalculateServiceImpl implements CalculatingService
{
    /** @var \MB\Common\CharService */
    protected $charService;
    /** @var \MB\Configurations\ApplicationConfiguration */
    protected $appConfig;

    /**
     * @param \MB\Common\CharService $charService
     */
    public function setCharService($charService)
    {
        $this->charService = $charService;
    }

    /**
     * Пересчет параметров
     * @param \MB\Services\AbstractNpc $npc
     * @return void
     */
    public function calculate(AbstractNpc $npc)
    {
        $baseParams = $npc->getBaseParams();
        $charParams = $npc->getCharParams();
        $warParams = $npc->getWarParams();

        $charParams->maxLife = 10 + $baseParams->life * 10 + $baseParams->strenge * 2;
        $charParams->maxEnergy = 10 + $baseParams->energy * 10 + $baseParams->intelligence * 5;

        if ($charParams->life > $charParams->maxLife) {
            $charParams->life = $charParams->maxLife;
        }
        if ($charParams->energy > $charParams->maxEnergy) {
            $charParams->energy = $charParams->maxEnergy;
        }

        $npc->setCharParams($charParams);
        $this->calculateWar($npc);
        $this->calcDamage($npc);
        if ($npc instanceof AbstractPeopleNpc) {
            $this->calcArmor($npc);
        }
    }

    /**
     * Калькуляция урона
     * @param \MB\Glor\Npc\AbstractNpc $npc
     */
    public function calcDamage(AbstractNpc $npc)
    {
        $baseSkills = $npc->getBaseParams();
        $warParams = $npc->getWarParams();
        $baseMinDamage = $baseSkills->strenge;
        $baseMaxDamage = $baseSkills->strenge * 2;
        $warParams->minDamage = $baseMinDamage;
        $warParams->maxDamage = $baseMaxDamage;
        //TODO: если у него может быть экипировка
        if ($npc instanceof AbstractPeopleNpc) {
            /** @var $equip \MB\Glor\Params\Equip */
            $equip = $npc->getEquip();
            try {
                //если есть одетое оружие
                $weaponMinDamage = $equip->getRightHand()->getParams()->minDamage;
                $weaponMaxDamage = $equip->getRightHand()->getParams()->maxDamage;
                $modLevel = $equip->getRightHand()->getModificationLevel();
                $i = 0;
                while ($i < $modLevel) {
                    $weaponMinDamage += $weaponMinDamage * 0.06;
                    $weaponMaxDamage += $weaponMaxDamage * 0.06;
                    $i++;
                }
                if ($equip->getRightHand()->strengeImpact() === TRUE) {
                    $warParams->minDamage += floor($weaponMinDamage);
                    $warParams->maxDamage += floor($weaponMaxDamage);
                } else {
                    $warParams->minDamage = floor($weaponMinDamage);
                    $warParams->maxDamage = floor($weaponMaxDamage);
                }
            } catch (ItemLoaderException $e) {

            }
        }
        $npc->setWarParams($warParams);
    }

    /**
     * Калькуляция war-параметров
     * Если есть оружие в руках, то считаем точность по умению владения оружием,
     * иначе расчет по рукопашке
     * @param \MB\Glor\Npc\AbstractNpc $npc
     */
    public function calculateWar(AbstractNpc $npc)
    {
        $war = $npc->getWarParams();
        $warSkills = $npc->getWarSkills();
        $war->hit = $npc->getBaseParams()->dexterity * 5;
        $war->speed = $this->appConfig->getBaseSpeed() - ceil($npc->getBaseParams()->dexterity / 2);
        if ($npc instanceof AbstractPeopleNpc) {
            try {
                /** @var $equip \MB\Glor\Params\Equip */
                $equip = $npc->getEquip();
                $weaponType = $equip->getRightHand()->getType();
                $war->speed += $equip->getRightHand()->getParams()->speed;
                switch ($weaponType) {
                    case ItemInterface::COLD_WEAPON:
                        $war->hit += $npc->getWarSkills()->coldWeapon * 10;
                        break;
                    case ItemInterface::CRUSH_WEAPON:
                        $war->hit += $npc->getWarSkills()->crushWeapon * 10;
                        break;
                    case ItemInterface::RANGED_WEAPON:
                        $war->hit += $npc->getWarSkills()->rangedWeapon * 15;
                        break;
                    case ItemInterface::MAGIC_WEAPON:
                        $war->hit += $npc->getWarSkills()->magic * 10;
                        break;
                    default:
                        $war->hit += $npc->getWarSkills()->dogfight * 10;
                        break;
                }
            } catch (ItemLoaderException $e) {
                $war->hit += $warSkills->dogfight * 10;
            }
        } else {
            $war->hit += $warSkills->dogfight * 10;
        }
        $war->bias = $warSkills->bias * 10 + $npc->getBaseParams()->dexterity * 5;
        $war->parring = $warSkills->parring * 10 + $npc->getBaseParams()->strenge * 5;
        $war->magicBias = $warSkills->magicBias * 10 + $npc->getBaseParams()->intelligence * 5;
        $war->magicParring = $warSkills->magicParring * 10;

        $npc->setWarParams($war);
    }

    /**
     * @param \MB\Glor\Npc\AbstractPeopleNpc $npc
     */
    public function calcArmor(AbstractPeopleNpc $npc)
    {
        $equip = $npc->getEquip();
        $war = $npc->getWarParams();
        $parts = array("Body", "Head", "Gloves", "Hand", "Leg", "Shoes");
        $armorFromCrushing = $armorFromCutting = $armorFromPricking = $armorFromMagic = 0;
        foreach ($parts as $part) {
            $method = "get" . $part;
            try {
                $armorFromCrushing += $equip->$method()->getParams()->armorFromCrushing;
                $armorFromCutting += $equip->$method()->getParams()->armorFromCutting;
                $armorFromPricking += $equip->$method()->getParams()->armorFromPricking;
                $armorFromMagic += $equip->$method()->getParams()->armorFromMagic;
                $modLevel = $equip->$method()->getModificationLevel();
                $i = 0;
                while ($i < $modLevel) {
                    $armorFromCrushing += floor($armorFromCrushing * 0.05);
                    $armorFromCutting += floor($armorFromCutting * 0.05);
                    $armorFromPricking += floor($armorFromPricking * 0.05);
                    $armorFromMagic += floor($armorFromMagic * 0.05);
                    $i++;
                }
            } catch (ItemLoaderException $e) {
                continue;
            }
        }
        $war->armorFromCrushing = $armorFromCrushing;
        $war->armorFromCutting = $armorFromCutting;
        $war->armorFromPricking = $armorFromPricking;
        $war->armorFromMagic = $armorFromMagic;
        $npc->setWarParams($war);
    }

    /**
     * @param \MB\Glor\Npc\AbstractNpc $npc
     * @return void
     */
    public function regeneration(AbstractNpc $npc)
    {
        $charParams = $npc->getCharParams();
        $baseParams = $npc->getBaseParams();
        $baseRegenTime = \MB\Container::get("app_config")->getRegenTime();
        $regenLifeTime = time() - ($baseRegenTime - $baseParams->regeneration * 10);
        $regenManaTime = time() - ($baseRegenTime - $baseParams->meditation * 10);
        $regenLifeTime = $regenLifeTime < 10 ? 10 : $regenLifeTime;
        $regenManaTime = $regenManaTime < 10 ? 10 : $regenManaTime;
        if ($charParams->lastMeditationTime < $regenLifeTime and $charParams->life < $charParams->maxLife) {
            $charParams->life += ceil($baseParams->regeneration / 2);
            $charParams->lastRegenerationTime = time();
        }

        if ($charParams->lastMeditationTime < $regenManaTime and $charParams->energy < $charParams->maxEnergy) {
            $charParams->energy += ceil($baseParams->meditation / 2);
            $charParams->lastMeditationTime = time();
        }

        $npc->setCharParams($charParams);
    }

    /**
     * @param \MB\Configurations\ApplicationConfiguration $appConfig
     */
    public function setAppConfig($appConfig)
    {
        $this->appConfig = $appConfig;
    }
}
