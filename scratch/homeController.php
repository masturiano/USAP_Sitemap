<?php

class Sitemap_HomeController extends USAP_Controller_Action
{
    public function init()
    {
        parent::init();
        /* Initialize action controller here */
    }
    public function indexAction() 
    {
        $request = $this->getRequest();
        //if($request->isPost())
        //{
        //    echo "test";
            /*
            $form->setInputFilter(new UserFilter());
            $form->setData($request->getPost());
            if($form->isValid())
            {
                $data = $form->getData();
                //unset($data['submit']);
                //$this->getUsersTable()->insert($data);
                return $this->redirect()->toRoute('application/default',
                    array(
                        'controller' => 'Home',
                        'action' => 'index',
                    )
                );
            } 
            */ 
        //}        
        $this->view->form = new Sitemap_Form_Home();

        ###############################################
        /*
        $templateForm = $this->getTemplateFormUpload();

        if ($request->isPost()) {
            $posts = $request->getPost();
            $templateForm->buildForm();

            if ($templateForm->isValid($posts)) {

                $templateName = $templateForm->getValue('template_name');
        */
    }   

    public function generatesitemapAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $form_data = $request->getPost();
            echo $form_data['website_select'];
            echo "<br/>";
            echo $form_data['template_select'];
            echo "<br/>";
            echo $form_data['page_type_select'];
            echo "<br/>";
            echo $form_data['frequency_select'];
            echo "<br/>";
            echo $form_data['priority_select'];
        }
    } 
    
    /*
    if (isset($_POST["add"])) 
    {
        if ($this->view->form->isValid($request->getPost())){
            $merchant = $this->_request->getParam('Merchant', null);
            $site = $this->_request->getParam('Site', null);
        
            if (count($merchant)==0){
                // $this->addMessage("No specific Merchant alloted to Site \"{$site}\" ");
                $this->_helper->flashMessenger->addMessage(array('warning'=> "No specific Merchant alloted to Site \"{$site}\" "));  
                $this->queryCollect();
                return false;
            }

    
            $userReg = Zend_Registry::get('user');
            //merchant = $this->_request->getParam('Merchant', null);
            //$site = $this->_request->getParam('Site', null);
            $mdb = $this->siteConnection()->selectCollection('Sites');
            $siteCheck = $mdb->findOne(array("Site" => new MongoRegex("/^$site$/i")));
             
            if(empty($siteCheck))
            {
                $Site = array(
                'Site' => strtoupper($site),
                'createdAt' => new MongoDate(),
                'status' => '1',
                'creator' => $userReg->getUserName(),
                'Merchants' => array_values(array_unique($merchant))
                );
                
                if ($mdb->insert($Site)) 
                {
                    $this->addMessage("Site \"{$site}\" added succesfully");
                    $this->_redirect('/feeds/sites/index/page/' . $page);
                }    
            }
            else{
                $this->addMessage("Site \"{$site}\" Exist");
            }
        }                    
    }
       $this->queryCollect();
    }
    */  
}
