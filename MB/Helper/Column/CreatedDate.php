<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 16:35
 */

namespace MB\Helper\Column;


trait CreatedDate {
    /**
     * @var \DateTime
     * @Column(name="created_at", type="date")
     */
    protected $createdDate;

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
    }
} 