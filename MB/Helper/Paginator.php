<?php
namespace MB\Helper;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:27
 */
use MB\Glor\Params\AbstractList;

class Paginator
{
    /** @var AbstractList */
    protected $list;
    /** @var int */
    protected $itemsPerPage = 10;
    /** @var int */
    protected $currentPage = 1;
    /** @var array */
    protected $response;

    public function __construct(AbstractList $list)
    {
        $this->list = $list;
    }

    public function paginate()
    {
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = \MB\Container::get("app_config");
        $countPages = ceil($this->list->count()/$appConfig->getItemsPerPage());
        $response = array();
        $response["count_pages"] = $countPages;
        $response["pages"] = array();
        $page = 1; $k = 0;
        foreach($this->list->export() as $key => $value){
            $response["pages"][$page][$key] = $value;
            if(count($response["pages"][$page]) >= $appConfig->getItemsPerPage()){
                $page++;
            }
            $k++;
        }
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function countPages()
    {
        return count($this->response["pages"]);
    }

    /**
     * @param int $page
     * @return array
     */
    public function getPage($page)
    {
        return (isset($this->response["pages"][$page])) ? $this->response["pages"][$page] : array();
    }

    /**
     * @return array
     */
    public function getCurrentPage()
    {
        return $this->getPage($this->currentPage);
    }

    /**
     * @return int
     */
    public function getCurrentPageNum()
    {
        return $this->currentPage;
    }

    /**
     * @param int $currentPage
     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }
}
