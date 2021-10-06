<?php

namespace Defr\CzechDataBox\Api;

class tISDSSearchInput3
{

    /**
     * @var string $searchText
     */
    protected $searchText = null;

    /**
     * @var searchType $searchType
     */
    protected $searchType = null;

    /**
     * @var searchScope $searchScope
     */
    protected $searchScope = null;

    /**
     * @var int $page
     */
    protected $page = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var boolean $highlighting
     */
    protected $highlighting = null;

    /**
     * @param string $searchText
     */
    public function __construct($searchText)
    {
      $this->searchText = $searchText;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->searchText;
    }

    /**
     * @param string $searchText
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setSearchText($searchText)
    {
      $this->searchText = $searchText;
      return $this;
    }

    /**
     * @return searchType
     */
    public function getSearchType()
    {
      return $this->searchType;
    }

    /**
     * @param searchType $searchType
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setSearchType($searchType)
    {
      $this->searchType = $searchType;
      return $this;
    }

    /**
     * @return searchScope
     */
    public function getSearchScope()
    {
      return $this->searchScope;
    }

    /**
     * @param searchScope $searchScope
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setSearchScope($searchScope)
    {
      $this->searchScope = $searchScope;
      return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
      return $this->page;
    }

    /**
     * @param int $page
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setPage($page)
    {
      $this->page = $page;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHighlighting()
    {
      return $this->highlighting;
    }

    /**
     * @param boolean $highlighting
     * @return \Defr\CzechDataBox\Api\tISDSSearchInput3
     */
    public function setHighlighting($highlighting)
    {
      $this->highlighting = $highlighting;
      return $this;
    }

}
