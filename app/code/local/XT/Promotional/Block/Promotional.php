<?php
class XT_Promotional_Block_Promotional extends Mage_Core_Block_Template
{	
     public function __construct()
	  {
		parent::__construct();
	  }
	
	  public function _prepareLayout()
	  {
		  return $this;
	  }
    	  
}