<?php
namespace MB\Glor\Params;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:33
 */
use MB\Helper\Paginator;
use MB\Helper\RequestHelper;

class PaginationList extends AbstractList
{
    /** @var \MB\Helper\Paginator */
    protected $paginator;

    public function __construct(array $list)
    {
        parent::__construct($list);
        $this->paginator = new Paginator($this);
        $this->paginator->paginate();
    }

    /**
     * @return array
     */
    public function getCurrentPage()
    {
        $this->paginator->setCurrentPage(RequestHelper::get("page", 1));
        $currentPage = $this->paginator->getCurrentPage();
        foreach($currentPage as $key => $item)
        {
            $currentPage[$key] = $this->__get($key);
        }
        return $currentPage;
    }

    /**
     * @return \MB\Helper\Paginator
     */
    public function getPaginator()
    {
        return $this->paginator;
    }
}
