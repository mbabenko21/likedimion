<?php
namespace MB\Glor\Forum;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:12
 */
use MB\Glor\AbstractAutoIncrementObject;
use MB\Common\JournalService;
use MB\Glor\Char\AbstractChar;
use MB\I\LocationInterface;
use MB\I\JournalInterface;
use MB\Glor\Post;

/**
 * @Entity
 * @Table(name="journal")
 */
class Journal extends AbstractAutoIncrementObject implements JournalInterface
{
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
    /**
     * @var \MB\I\LocationInterface
     * @ManyToOne(targetEntity="MB\Glor\Locations\LocationDB")
     * @JoinColumn(name="loc_id", referencedColumnName="loc_id", onDelete="CASCADE")
     */
    protected $location;
    /**
     * @var \MB\Glor\Char\AbstractChar
     * @ManyToOne(targetEntity="MB\Glor\Char\AbstractChar")
     * @JoinColumn(name="char_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $char;
    /**
     * @var int
     * @Column(name="type", type="smallint", length=1)
     */
    protected $type = JournalService::JOURNAL_PUBLIC;

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
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * @return \MB\I\LocationInterface
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \MB\I\LocationInterface $location
     */
    public function setLocation(LocationInterface $location)
    {
        $this->location = $location;
    }

    /**
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $char
     */
    public function setChar(AbstractChar $char)
    {
        $this->char = $char;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
