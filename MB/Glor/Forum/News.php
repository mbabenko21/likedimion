<?php
namespace MB\Glor\Forum;

use MB\Glor\AbstractAutoIncrementObject;
use MB\Helper\DateHelper;
use MB\Glor\Post;

/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 18:55
 * To change this template use File | Settings | File Templates.
 */
/**
 * @Entity
 * @Table(name="ld_news")
 */
class News extends AbstractAutoIncrementObject
{
    /**
     * @var string
     * @Column(type="string")
     */
    protected $name;
    /**
     * @var \MB\Glor\Post
     * @OneToOne(targetEntity="MB\Glor\Post", cascade={"persist", "remove"})
     * @JoinColumn(name="post_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $post;
    /**
     * @var \DateTime
     * @Column(name="posted", type="datetime")
     */
    protected $created;

    public function __construct()
    {
        if(is_null($this->getCreated())){
            $this->setCreated(DateHelper::createDate());
        }
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \MB\Glor\Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param \MB\Glor\Post $post
     */
    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
}
