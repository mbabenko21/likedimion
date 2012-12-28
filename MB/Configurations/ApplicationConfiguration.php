<?php
namespace MB\Configurations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:42
 */
use MB\Configuration;
use MB\I\LoaderInterface;

class ApplicationConfiguration extends Configuration
{
    /** @var string */
    protected $appName;
    /** @var string */
    protected $mode;
    /** @var string */
    protected $version;
    /** @var string */
    protected $author;
    /** @var string */
    protected $locale;
    /** @var array */
    protected $map;
    /** @var int */
    protected $regenTime;
    /** @var string */
    protected $appKey;
    /** @var int */
    protected $baseSpeed;
    /** @var int */
    protected $itemsPerPage;
    /** @var int */
    protected $journalMessageLeave;

    public function __construct(LoaderInterface $loader)
    {
        parent::__construct($loader);
        $data = $loader->get();
        $this->setAppName($data["name"]);
        $this->setMode($data["mode"]);
        $this->setVersion($data["version"]);
        $this->setAuthor($data["author"]);
        $this->setMap($data["map"]);
        $this->setLocale($data["locale"]);
        $this->setRegenTime($data["regen_time"]);
        $this->setAppKey($data["key"]);
        $this->setBaseSpeed($data["base_speed"]);
        $this->setItemsPerPage($data["items_per_page"]);
        $this->setJournalMessageLeave($data["journal_life"]);
    }

    /**
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function getMap()
    {

    }

    /**
     * @param array $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return int
     */
    public function getRegenTime()
    {
        return $this->regenTime;
    }

    /**
     * @param int $regenTime
     */
    public function setRegenTime($regenTime)
    {
        $this->regenTime = $regenTime;
    }

    /**
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param string $appKey
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    /**
     * @return int
     */
    public function getBaseSpeed()
    {
        return $this->baseSpeed;
    }

    /**
     * @param int $baseSpeed
     */
    public function setBaseSpeed($baseSpeed)
    {
        $this->baseSpeed = $baseSpeed;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param int $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return int
     */
    public function getJournalMessageLeave()
    {
        return $this->journalMessageLeave;
    }

    /**
     * @param int $journalMessageLeave
     */
    public function setJournalMessageLeave($journalMessageLeave)
    {
        $this->journalMessageLeave = $journalMessageLeave;
    }
}
