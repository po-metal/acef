<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->redirect()->toRoute("Acef/Inicio/Main");
    }
    
    public function testAction(){
        $view = new ViewModel();
        $view->setTemplate('zf-metal/security/mail/reset');
        $view->setVariables([
            'newPassowrd'=> '123456',
            'url' => $this->url()->fromRoute('zf-metal.user/login', [], ['force_canonical'=>true]),
        ]);
        
        return $view;
    }
}
