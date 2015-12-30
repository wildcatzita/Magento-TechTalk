<?php
class Ainstainer_Contacts_Block_Adminhtml_Contactus extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_blockGroup = 'ainstainer_contacts';
        $this->_controller = 'adminhtml_contactus';
        $this->_headerText = 'Contacts Us Report';

        parent::__construct();
    }
}