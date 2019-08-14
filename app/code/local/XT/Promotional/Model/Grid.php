<?php 
class XT_Promotional_Model_Grid extends Mage_Core_Model_Abstract
{
	public function _construct()
	{
		parent::_construct();
		$this->_init('promotional/grid');
	}
}