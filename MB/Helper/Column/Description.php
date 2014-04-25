<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 16:33
 */

namespace MB\Helper\Column;


trait Description {
    /**
     * @var string
     * @Column(name="info", type="text")
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
} 