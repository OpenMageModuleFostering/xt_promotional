<?php 

class XT_Promotional_Block_Adminhtml_Promotional_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs 
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('promotional_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('promotional')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
	   $this->addTab('store_section', array(
          'label'     => Mage::helper('promotional')->__('Select Stores'),
          'title'     => Mage::helper('promotional')->__('Select Stores'),
          'content'   => $this->getLayout()->createBlock('promotional/adminhtml_promotional_edit_tab_store')->toHtml(),
      ));
      $this->addTab('grid_section', array(
          'label'     => Mage::helper('promotional')->__('Promotional Products'),
          'title'     => Mage::helper('promotional')->__('Promotional Products'),
          'url'       => $this->getUrl('*/*/grid', array('_current' => true)),
          'class'     => 'ajax',
      ));
      
      return parent::_beforeToHtml();
  }
}