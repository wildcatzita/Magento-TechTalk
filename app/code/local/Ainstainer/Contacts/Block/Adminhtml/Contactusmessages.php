<?php
class Ainstainer_Contacts_Block_Adminhtml_Contactusmessages extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_blockGroup = 'ainstainer_contacts';
        $this->_controller = 'adminhtml_contactusmessages';
        $this->_headerText = 'Contacts Us Report';

        parent::__construct();
    }
}