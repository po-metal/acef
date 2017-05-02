<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ManagerController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ManagerController extends AbstractActionController {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    public $em = null;

    public function getEm() {
        return $this->em;
    }

    public function setEm(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function clienteAction() {
        
    }

    public function productosAction() {
        $clienteId = $this->getParams("clienteId");
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder("\Acef\Entity\Producto", 'cliente', $clienteId);
        $grid->setId("Grid_Productos");
        $grid->setTemplate("ajax");

        $viewModel = new ViewModel(["grid" => $grid]);
        $viewModel->setTerminal(true);
        return $viewModel;
    }

}
