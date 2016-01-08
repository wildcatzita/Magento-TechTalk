<?php

class Ainstainer_Contacts_Adminhtml_ContactusmessagesController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->_title('Contacts Us Reports');
        $this->loadLayout();
        $this->_setActiveMenu('ainstainer_contacts');
        $this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_contactusmessages'));
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = (int)$this->getRequest()->getParam('id');
        $model = Mage::getModel('ainstainer_contacts/contactusmessages');
        Mage::register('current_msg', $model->load($id));
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_contactusmessages_edit'));
        $this->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        if ($data) {
            $model = Mage::getModel('ainstainer_contacts/contactusmessages');
            $model->setData($data)->setId($this->getRequest()->getParam('id'));
            try {
                if (!$model->getCreated()) {
                    $model->setCreated(now());
                }
                $model->save();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Update contactus was saved success!!!'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array(
                    'id' => $this->getRequest()->getParam('id')
                ));
            }
            return;
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Can\'t find msg to save'));
        $this->_redirect('*/*/');
    }

    public function deleteAction()
    {
        if ($id = $this->getRequest()->getParam('id')) {
            try {
                $model = Mage::getModel('ainstainer_contacts/contactusmessages');
                $model->setId($id);
                $model->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The review has been deleted.'));
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Can\'t find msg to delete.'));
        $this->_redirect('*/*/');
    }
}