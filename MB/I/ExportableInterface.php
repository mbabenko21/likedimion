<?php
namespace MB\I;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 17:03
 * To change this template use File | Settings | File Templates.
 */
interface ExportableInterface
{
    /**
     * @abstract
     * @return array
     */
    public function export();
}
