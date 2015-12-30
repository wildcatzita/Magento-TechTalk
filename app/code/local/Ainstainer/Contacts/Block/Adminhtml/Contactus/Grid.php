<?php
class Ainstainer_Contacts_Block_Adminhtml_Contacts_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    protected function _prepareCollection() {
        $collection = Mage::getResourceModel('ainstainer_contacts/contacts_collection');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {

        $helper = Mage::helper('ainstainer_contacts');

        $this->addColumn('contact_id', array(
            'header' => $helper->__('Contact ID'),
            'index' => 'contact_id'
        ));

        $this->addColumn('email', array(
            'header' => $helper->__('Email'),
            'index' => 'email',
            'type' => 'text',
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text',
        ));

        $this->addColumn('phone', array(
            'header' => $helper->__('Phone'),
            'index' => 'phone',
            'type' => 'text',
        ));

        $this->addColumn('description', array(
            'header' => $helper->__('Description'),
            'index' => 'description',
            'type' => 'text',
        ));

        $this->addColumn('created', array(
            'header' => $helper->__('Created'),
            'index' => 'created',
            'type' => 'date',
        ));

        return parent::_prepareColumns();
    }

}