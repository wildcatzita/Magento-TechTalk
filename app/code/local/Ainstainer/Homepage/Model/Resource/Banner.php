<?php

class Ainstainer_Homepage_Model_Resource_Banner extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('homepage/banner', 'banner_id');
    }
}