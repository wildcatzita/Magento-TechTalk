<?php
class Ainstainer_Contacts_Adminhtml_ContactusController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        $this->_title('Contacts Us Reports');
        $this->loadLayout();
        $this->_setActiveMenu('ainstainer_contacts');
        $this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_contactus'));
        $this->renderLayout();
    }
}