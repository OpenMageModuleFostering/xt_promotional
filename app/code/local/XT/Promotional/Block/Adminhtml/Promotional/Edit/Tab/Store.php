<?php 
class XT_Promotional_Block_Adminhtml_Promotional_Edit_Tab_Store extends Mage_Adminhtml_Block_Widget_Grid 
{
	public function __construct()
	{
        parent::__construct();
        $this->setTemplate('promotional/stores.phtml');
	}
		
}