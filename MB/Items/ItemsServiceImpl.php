<?php
namespace MB\Items;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 11:00
 * To change this template use File | Settings | File Templates.
 */
use MB\Common\ItemsService;
use MB\Exception\ItemsException;

class ItemsServiceImpl implements ItemsService
{
    /** @var \MB\I\LoaderInterface */
    protected $loader;
    /** @var \MB\Configurations\ApplicationConfiguration */
    protected $appConfig;

    /**
     * @param \MB\I\LoaderInterface $loader
     */
    public function setLoader($loader)
    {
        $this->loader = $loader;
    }

    /**
     * @param string $itemId
     * @throws \MB\Exception\ItemsException
     * @return \MB\I\ItemInterface
     */
    public function getItem($itemId)
    {
        $this->loader->load($itemId);
        $item = new Item($this->loader->get());
        $item->setId($itemId);
        return $item;
    }

    /**
     * @return array
     */
    public function getAllItems()
    {
        return $this->loader->get();
    }


    /**
     * @param \MB\Configurations\ApplicationConfiguration $appConfig
     */
    public function setAppConfig($appConfig)
    {
        $this->appConfig = $appConfig;
    }
}
