<?php

class XT_Promotional_Model_Promotional extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('promotional/promotional');
    }
	public function getproids()
	{
		$connection = Mage::getSingleton('core/resource')->getConnection('core_write');
		$result = $connection->query("select * from grid_promotional order by position");
		while ($row = $result->fetch() ) {
		$ids[]=$row['product_id'];
		}
		return $ids;
	}
}