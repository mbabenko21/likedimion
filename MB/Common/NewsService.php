<?php
namespace MB\Common;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 23:07
 */
use MB\Glor\Char\AbstractChar;
use MB\Glor\Forum\News;
use MB\Glor\Post;

interface NewsService
{
    /**
     * @abstract
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAll();

    /**
     * @abstract
     * @return \MB\Glor\Forum\News
     */
    public function getLast();

    /**
     * Добавление новости
     * @param \MB\Glor\Post $post
     * @param string $name
     * @internal param $
     * @return void
     */
    public function add(Post $post, $name);

    /**
     * @abstract
     * @param \MB\Glor\Forum\News $news
     * @return void
     */
    public function remove(News $news);

    /**
     * @abstract
     * @param \MB\Glor\Forum\News $news
     * @return void
     */
    public function persist(News $news);

    /**
     * @abstract
     * @return void
     */
    public function commit();
}
