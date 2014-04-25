<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 17:41
 */

namespace MB\Glor;


use MB\Helper\Column\Id;
use MB\Helper\Column\Params\BattleOptionsColumns;

/**
 * Class BattleOptions
 * @package MB\Glor
 *
 * @Entity
 * @Table(name="battle_options")
 * @InheritanceType("SINGLE_TABLE")
 * @Discriminator
 * @DiscriminatorMap({
 *  "char" = "CharBattleOptions",
 *  "npc" = "NpcBattleOptions"
 * })
 */
abstract class BattleOptions {
    use Id;
    use BattleOptionsColumns;

    /**
     * @return object
     */
    abstract public function getObject();
} 