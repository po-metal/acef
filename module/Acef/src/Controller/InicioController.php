<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * InicioController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class InicioController extends AbstractActionController
{

    public function mainAction()
    {
        //Se aplica Redirect por pedido de Lio de que la home sea la vista de clientes
         $this->redirect()->toRoute("Acef/Clientes/Grid");
    }


}

