<?php
namespace MB\Services;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:22
 * To change this template use File | Settings | File Templates.
 */
use MB\Common\DialogService;
use MB\Dialog\DialogSectionImpl;
use MB\Exception\DialogException;
use MB\I\LoaderInterface;

class DialogServiceImpl implements DialogService
{
    private $dialog = array();

    /**
     * @param string $section
     * @return \MB\I\DialogSectionInterface
     * @throws \MB\Exception\DialogException
     */
    public function getSection($section)
    {
        if (!isset($this->dialog[$section])) {
            throw new DialogException("Section {$section} not found");
        }
        return new DialogSectionImpl($this->dialog[$section]);
    }

    /**
     * Загрузка диалога
     * @param \MB\I\LoaderInterface $dialogLoader
     * @return void
     */
    public function load(LoaderInterface $dialogLoader)
    {
        $this->dialog = $dialogLoader->get();
    }
}
