<?php     

class XT_Promotional_Block_Adminhtml_Promotional_Edit extends Mage_Adminhtml_Block_Widget_Form_Container  
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'promotional';
        $this->_controller = 'adminhtml_promotional';
        
        $this->_updateButton('save', 'label', Mage::helper('promotional')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('promotional')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('promotional_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'promotional_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'promotional_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
		$this->_removeButton('save');
		$this->_removeButton('delete');
    }

    public function getHeaderText()
    {
        if( Mage::registry('promotional_data') && Mage::registry('promotional_data')->getId() ) {
            return Mage::helper('promotional')->__('Manage Promotional Products');
        } else {
            return Mage::helper('promotional')->__('Manage Promotional Products');
        }
    }
}