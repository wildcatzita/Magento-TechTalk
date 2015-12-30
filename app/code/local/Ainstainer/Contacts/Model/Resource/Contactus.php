<?php

class Ainstainer_Contacts_Model_Resource_Contactus extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('ainstainer_contacts/contactus', 'contact_id');
    }
}