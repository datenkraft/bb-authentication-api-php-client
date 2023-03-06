<?php

namespace Datenkraft\Backbone\Client\AuthenticationApi\Generated\Model;

class CollectionPagination extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The page contained in this collection.
     *
     * @var int
     */
    protected $page;
    /**
     * The page size used for reading the collection.
     *
     * @var int
     */
    protected $pageSize;
    /**
     * The page contained in this collection.
     *
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * The page contained in this collection.
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * The page size used for reading the collection.
     *
     * @return int
     */
    public function getPageSize() : int
    {
        return $this->pageSize;
    }
    /**
     * The page size used for reading the collection.
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize) : self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
}