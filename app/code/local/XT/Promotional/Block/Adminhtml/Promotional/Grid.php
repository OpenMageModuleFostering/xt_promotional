<?php 

class XT_Promotional_Block_Adminhtml_Promotional_Grid extends Mage_Adminhtml_Block_Widget_Grid 
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('promotionalGrid');
      $this->setDefaultSort('promotional_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('promotional/promotional')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('promotional_id', array(
          'header'    => Mage::helper('promotional')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'promotional_id',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('promotional')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));

        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('promotional')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('promotional')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('promotional_id');
        $this->getMassactionBlock()->setFormFieldName('promotional');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('promotional')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('promotional')->__('Are you sure?')
        ));

        return $this;
    }

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}