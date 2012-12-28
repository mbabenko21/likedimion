<?php
namespace MB\Saver;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 17:06
 */
use MB\I\SaverInterface;
use MB\I\LoaderInterface;

class FileSaver
{
    public function put($file, $data){
        return file_put_contents($file, $data);
    }
}
