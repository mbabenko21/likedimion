<?php
namespace MB\Common;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:09
 * To change this template use File | Settings | File Templates.
 */
use MB\I\LoaderInterface;

interface DialogService
{
    /**
     * @abstract
     * @param string $section
     * @return \MB\I\DialogSectionInterface
     * @throws \MB\Exception\DialogException
     */
    public function getSection($section);

    /**
     * Загрузка диалога
     * @abstract
     * @param \MB\I\LoaderInterface $dialogLoader
     * @return void
     */
    public function load(LoaderInterface $dialogLoader);
}
