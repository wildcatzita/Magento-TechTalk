<?php
/**
 * Created by PhpStorm.
 * User: Zita
 * Date: 08.12.2015
 * Time: 12:15
 */

class Ainstainer_Contacts_Helper_Data extends Mage_Contacts_Helper_Data
{
    public function getUserName()
    {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            return 'Joe';
        }
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        return trim($customer->getName());
    }
}