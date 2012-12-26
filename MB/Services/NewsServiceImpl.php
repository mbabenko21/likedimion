<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 23:12
 */
use Doctrine\Common\Persistence\ObjectManager;
use MB\Exception\NewsException;
use MB\Glor\Forum\News;
use MB\Glor\Post;
use MB\Glor\Char\AbstractChar;
use Doctrine\Common\Collections\ArrayCollection;
use MB\Common\NewsService;

class NewsServiceImpl implements NewsService
{
    /** @var \Doctrine\ORM\EntityManager */
    protected $entityManager;
    /** @var \Doctrine\ORM\EntityRepository */
    protected $repository;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $class
     */
    public function setRepository($class)
    {
        $this->repository = $this->entityManager->getRepository($class);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAll()
    {
        $news = $this->repository->findAll();
        return new ArrayCollection($news);
    }

    /**
     * @throws \MB\Exception\NewsException
     * @return \MB\Glor\Forum\News
     */
    public function getLast()
    {
        $dql = 'SELECT n FROM MB\Glor\Forum\News n ORDER BY n.created DESC';
        $query = $this->entityManager->createQuery($dql);
        $news = $query->execute();
        if(count($news) < 1){
            throw new NewsException();
        } else {
            return $news[0];
        }
    }

    /**
     * Добавление новости
     * @param \MB\Glor\Post $post
     * @param string $name
     * @return void
     */
    public function add(Post $post, $name)
    {
        $new = new News();
        $new->setPost($post);
        $new->setName($name);
        $this->persist($new);
        $this->commit();
    }

    /**
     * @param \MB\Glor\Forum\News $news
     * @return void
     */
    public function remove(News $news)
    {
        $this->entityManager->remove($news);
    }

    /**
     * @param \MB\Glor\Forum\News $news
     * @return void
     */
    public function persist(News $news)
    {
        $this->entityManager->persist($news);
    }

    /**
     * @return void
     */
    public function commit()
    {
        $this->entityManager->flush();
    }
}
