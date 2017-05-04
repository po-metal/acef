<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * ManagerClienteController
 *
 * Provee la gestión de los clientes y sus entidades relacionadas.
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class ManagerClienteController extends AbstractActionController {

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

    private function getClienteRepository() {
        return $this->getEm()->getRepository(\Acef\Entity\Cliente::class);
    }

    public function mainAction() {
        $clienteId = $this->params('clienteId');

        $cliente = $this->getClienteRepository()->find($clienteId);

        return ['cliente' => $cliente];
    }

    public function productosAction() {
        $clienteId = $this->params('clienteId');
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder(\Acef\Entity\Producto::class, '\\Acef\\Entity\\Producto', 'cliente', $clienteId);

        $grid->setTemplate('ajax');
        $grid->setId('gridProductos');

        // Elimina el cliente del Formulario
        $grid->getCrudForm()->remove('cliente');

        // Elimina el cliente del Filtro
        $grid->getForm()->remove('cliente');

        // Elimina la columna cliente del datagrid
        $grid->setColumnsConfig(array_merge_recursive($grid->getColumnsConfig(), ['cliente' => ['hidden' => true]]));

        $cliente = $this->getClienteRepository()->find($clienteId);
        $grid->getSource()->getEventManager()->attach('saveRecord_before', function($e) use ($cliente) {
            $record = $e->getParam('record');
            $record->setCliente($cliente);
        });

        $grid->prepare();

        $view = new \Zend\View\Model\ViewModel(array('grid' => $grid));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function bitacorasAction() {
        $clienteId = $this->params('clienteId');
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder(\Acef\Entity\BitacoraCliente::class, '\\Acef\\Entity\\BitacoraCliente', 'cliente', $clienteId);

        $grid->setTemplate('ajax');
        $grid->setId('gridBitacoras');

        // Elimina el cliente del Formulario
        $grid->getCrudForm()->remove('cliente');

        // Elimina el cliente del Filtro
        $grid->getForm()->remove('cliente');

        // Elimina la columna cliente del datagrid
        $grid->setColumnsConfig(array_merge_recursive($grid->getColumnsConfig(), ['cliente' => ['hidden' => true]]));

        $cliente = $this->getClienteRepository()->find($clienteId);
        $grid->getSource()->getEventManager()->attach('saveRecord_before', function($e) use ($cliente) {
            $record = $e->getParam('record');
            $record->setCliente($cliente);
        });

        $grid->prepare();

        $view = new \Zend\View\Model\ViewModel(array('grid' => $grid));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function editarClienteAction() {
        $clienteId = $this->params('clienteId');
        $cliente = $this->getClienteRepository()->find($clienteId);

        $form = $this->formBuilder($this->getEm(), \Acef\Entity\Cliente::class, TRUE);
        $form->bind($cliente);
        $form->setAttribute('action', 'javascript:submitFormCliente(' . $cliente->getId() . ')');
        $this->formProcess($this->getEm(), $form, TRUE);

        $view = new \Zend\View\Model\ViewModel(array('form' => $form));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function verClienteAction() {
        $clienteId = $this->params('clienteId');

        $cliente = $this->getClienteRepository()->find($clienteId);

        $view = new \Zend\View\Model\ViewModel(array('cliente' => $cliente));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function getClientesAction() {

        $nombreCliente = $this->params('nombreCliente');
        
        $clientes = $this->getClienteRepository()->getClienteByRazonSocial($nombreCliente);
        return new \Zend\View\Model\JsonModel($clientes);
    }

}