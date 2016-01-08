<?php

class Ainstainer_Contacts_Block_Adminhtml_Contactusmessages_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    protected function _construct()
    {
        $this->_blockGroup = 'ainstainer_contacts';
        $this->_controller = 'adminhtml_contactusmessages';
    }
    public function getHeaderText()
    {
        $helper = Mage::helper('ainstainer_contacts');
        $model = Mage::registry('current_msg');
        if ($model->getId()) {
            return $helper->__("Edit contactus from ".$model->getName());
        }
    }
}