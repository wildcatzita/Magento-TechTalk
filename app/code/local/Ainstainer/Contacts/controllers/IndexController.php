<?php



class Ainstainer_Contacts_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    //Save ainstainer contacts form
    public function createAction()
    {
        $data = $this->getRequest()->getPost();
        $model = Mage::getModel('ainstainer_contacts/contactus');
        $model->setData($data);
        $model->save();
    }
}