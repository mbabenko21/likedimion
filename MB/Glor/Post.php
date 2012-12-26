<?php
namespace MB\Glor;

/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 18:06
 * To change this template use File | Settings | File Templates.
 */

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="posts")
 */
class Post extends AbstractAutoIncrementObject
{
    /**
     * @var \MB\Glor\Char\AbstractChar
     * @ManyToOne(targetEntity="MB\Glor\Char\AbstractChar")
     * @JoinColumn(name="author_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $author;
    /**
     * @var \MB\Glor\Char\AbstractChar
     * @ManyToOne(targetEntity="MB\Glor\Char\AbstractChar")
     * @JoinColumn(name="adressat_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $adressat;
    /**
     * @var \DateTime
     * @Column(name="post_date", type="datetime")
     */
    protected $postDate;
    /**
     * @var string
     * @Column(name="message", type="text")
     */
    protected $message;
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @OneToMany(targetEntity="Post", mappedBy="id", cascade={"persist"})
     * @JoinColumn(name="parent_post_id", referencedColumnName="id")
     */
    protected $comments;
    /**
     * @var Post
     * @ManyToOne(targetEntity="Post", inversedBy="comments")
     * @JoinColumn(name="parent_post_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $parentPost;


    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $fromChar
     */
    public function setAuthor($fromChar)
    {
        $this->author = $fromChar;
    }

    /**
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getAdressat()
    {
        return $this->adressat;
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $toChar
     */
    public function setAdressat($toChar)
    {
        $this->adressat = $toChar;
    }

    /**
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * @param \DateTime $postDate
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Post $comment
     */
    public function addComment(Post $comment)
    {
        $this->comments->add($comment);
        $comment->setParentPost($this);
    }

    /**
     * @return \MB\Glor\Post
     */
    public function getParentPost()
    {
        return $this->parentPost;
    }

    /**
     * @param \MB\Glor\Post $parentPost
     */
    public function setParentPost($parentPost)
    {
        $this->parentPost = $parentPost;
    }
}
