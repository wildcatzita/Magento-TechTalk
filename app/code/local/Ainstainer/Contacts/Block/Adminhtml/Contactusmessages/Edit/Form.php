<?php

class Ainstainer_Contacts_Block_Adminhtml_Contactusmessages_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm()
    {
        $helper = Mage::helper('ainstainer_contacts');
        $model = Mage::registry('current_msg');
        if ($model) {
            $data = $model->getData();
        } else {
            $data = array();
        }

        $form = new Varien_Data_Form(array(
           'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method' => 'post',
        ));

        $this->setForm($form);

        $fieldset = $form->addFieldset('contactusmessages_form', array('legend' => $helper->__('Contactus information')));

        $fieldset->addField('email', 'text', array(
            'label' => $helper->__('Email'),
            'required' => true,
            'name' => 'email',
        ));
        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => true,
            'name' => 'name',
        ));
        $fieldset->addField('phone', 'text', array(
            'label' => $helper->__('Phone'),
            'required' => false,
            'name' => 'phone',
        ));
        $fieldset->addField('description', 'textarea', array(
            'label' => $helper->__('Description'),
            'required' => true,
            'name' => 'description',
        ));
        $fieldset->addField('created', 'date', array(
            'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            'image' => $this->getSkinUrl('images/grid-cal.gif'),
            'label' => $helper->__('Created'),
            'name' => 'created'
        ));

        $form->setValues($data);

        $form->setUseContainer(true);

        return parent::_prepareForm();
    }
}