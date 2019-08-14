<?php

class XT_Promotional_Model_Mysql4_Promotional_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('promotional/promotional');
    }
}