<?php

namespace Defr\CzechDataBox\Api;

class tDbOwnersArray
{

    /**
     * @var tDbOwnerInfo $dbOwnerInfo
     */
    protected $dbOwnerInfo = null;

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     */
    public function __construct($dbOwnerInfo = null)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
    }

    /**
     * @return tDbOwnerInfo
     */
    public function getDbOwnerInfo()
    {
        if ( $this->dbOwnerInfo instanceof \stdClass) {
		    $object = new tDbOwnerInfo();

		    foreach ($this->dbOwnerInfo as $key => $value) {
		    	$mehtod = 'set' . ucfirst($key);
		    	 if (method_exists($object, $mehtod)) {
		    	 	$object->$mehtod($value);
			     }
		    }

		    $this->dbOwnerInfo = $object;
	    }
      return $this->dbOwnerInfo;
    }

    /**
     * @param tDbOwnerInfo $dbOwnerInfo
     * @return \Defr\CzechDataBox\Api\tDbOwnersArray
     */
    public function setDbOwnerInfo($dbOwnerInfo)
    {
      $this->dbOwnerInfo = $dbOwnerInfo;
      return $this;
    }

}
