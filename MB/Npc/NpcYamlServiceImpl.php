<?php
namespace MB\Npc;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 15:58
 */
use MB\Common\NpcService;
use MB\I\SaverInterface;
use MB\I\LoaderInterface;
use MB\I\NpcInterface;

class NpcYamlServiceImpl implements NpcService
{
    /** @var \MB\I\LoaderInterface */
    protected $loader;
    /** @var \MB\I\SaverInterface */
    protected $saver;

    /**
     * @param string $npcId
     * @return \MB\I\NpcInterface
     */
    public function getNpc($npcId)
    {
        $this->loader->load($npcId);
        return new Npc($this->loader->get());
    }

    /**
     * @param \MB\I\NpcInterface $npc
     * @return void
     */
    public function persist(NpcInterface $npc)
    {
        $this->loader->update($npc->export());
    }

    public function commit()
    {
        $this->saver->save($this->loader);
    }

    /**
     * @param \MB\I\LoaderInterface $loader
     */
    public function setLoader(LoaderInterface $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @param \MB\I\SaverInterface $saver
     */
    public function setSaver(SaverInterface $saver)
    {
        $this->saver = $saver;
    }
}
