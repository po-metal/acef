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

    const ENTITY = '\\Acef\\Entity\\Cliente';

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

    public function getDeudaActualizacionRepository() {
        return $this->getEm()->getRepository('\\Acef\\Entity\\DeudaActualizacion');
    }

    public function mainAction() {
        $clienteId = $this->params('clienteId');

        $cliente = $this->getClienteRepository()->find($clienteId);

        return ['cliente' => $cliente];
    }

    public function productosAction() {
        $clienteId = $this->params('clienteId');
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder('acef-entity-producto', 'cliente', $clienteId);

        $grid->setTemplate('ajax');
        //  $grid->setId('gridProductos');
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
        $grid = $this->gridBuilder('acef-entity-bitacoracliente', 'cliente', $clienteId);

        $grid->setTemplate('ajax');
        //  $grid->setId('gridBitacoras');
        // Elimina el cliente del Formulario
        $grid->getCrudForm()->remove('cliente');

        // Elimina el cliente del Filtro
        $grid->getForm()->remove('cliente');

        // Elimina la columna cliente del datagrid
        $grid->setColumnsConfig(array_merge_recursive($grid->getColumnsConfig(), ['cliente' => ['hidden' => true]]));

        //CLIENTE
        $cliente = $this->getClienteRepository()->find($clienteId);

        //RESPONSABLE
        if (!$this->identity()) {
            throw new \Exception("Identidy not found");
        }
        $identity = $this->identity();
        $responsable = $this->getEm()->getRepository("ZfMetal\Security\Entity\User")->find($identity->getId());

        $grid->getSource()->getEventManager()->attach('saveRecord_before', function($e) use ($cliente, $responsable) {
            $record = $e->getParam('record');
            $record->setCliente($cliente);
            $record->setResponsable($responsable);
        });

        $grid->getOptions()->setTitle($grid->getOptions()->getTitle() . ' - ' . $cliente->getRazonSocial() );

        $grid->prepare();

        $view = new \Zend\View\Model\ViewModel(array('grid' => $grid));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function editarClienteAction() {
        $clienteId = $this->params('clienteId');
        $cliente = $this->getClienteRepository()->find($clienteId);

        $form = $this->formBuilder($this->getEm(), \Acef\Entity\Cliente::class, TRUE);
        $form->add(new \Zend\Form\Element\Hidden("id"));
        $form->bind($cliente);
        $form->setAttribute('action', 'javascript:submitFormCliente(' . $cliente->getId() . ')');
        $formProcess = $this->formProcess($this->getEm(), $form, TRUE);

        if ($formProcess->getStatus()) {
            return $this->forward()->dispatch("Acef\Controller\ManagerClienteController", ["action" => "ver-cliente", "clienteId" => $clienteId]);
        }

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

    public function getEntityRepository() {
        return $this->getEm()->getRepository(self::ENTITY);
    }

    public function refinanciacionAction() {
        $clienteId = $this->params('clienteId');
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder('acef-entity-duedarefinanciacion', 'cliente', $clienteId);

        $grid->setTemplate('ajax');
        //$grid->setId('gridRefinanciacion');
        // Elimina el cliente del Formulario
        $grid->getCrudForm()->remove('cliente');

        //Special Input Filter
        $grid->getCrudForm()->setInputFilter(new \Acef\Form\Filter\SimulacionRefinanciacion());

        //TotalDeudaConQuita 
        //        $deudaActualizacion = $this->getDeudaActualizacionRepository()->findOneBy(['cliente' => $clienteId]);
        //
        //        if ($deudaActualizacion) {
        //            $grid->getCrudForm()->getObject()->setTotalDeudaConQuita($deudaActualizacion->getTotalDeudaConQuita());
        //            $grid->getCrudForm()->get('totalDeudaConQuita')->setValue($deudaActualizacion->getTotalDeudaConQuita());
        //        }
        // Elimina el cliente del Filtro
        $grid->getForm()->remove('cliente');

        // Elimina la columna cliente del datagrid
        $grid->setColumnsConfig(array_merge_recursive($grid->getColumnsConfig(), ['cliente' => ['hidden' => true]]));

        $cliente = $this->getClienteRepository()->find($clienteId);
        $grid->getSource()->getEventManager()->attach('saveRecord_before', function($e) use ($cliente, $grid) {
            $record = $e->getParam('record');
            $record->setCliente($cliente);
            $record->simular();
            $grid->getCrudForm()->bind($record);
        });

        $grid->getSource()->getEventManager()->attach('updateRecord_before', function($e) use ($cliente, $grid) {
            $record = $e->getParam('record');
            $record->simular();
            $grid->getCrudForm()->bind($record);
        });

        $grid->prepare();

        $view = new \Zend\View\Model\ViewModel(array('grid' => $grid));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function pagosAction() {
        $clienteId = $this->params('clienteId');
        $cliente = $this->getClienteRepository()->find($clienteId);
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $this->gridBuilder('acef-entity-pago', 'cliente', $cliente);

        $grid->setTemplate('ajax');

        $em = $this->getEm();
        $grid->getSource()->getEventManager()->attach('saveRecord_before', function($e) use ($cliente, $em) {
            $record = $e->getParam('record');
            $deudaActualizada = $cliente->getDeuda() - $record->getPago();
            $cliente->setDeuda($deudaActualizada);
            $record->setDeudaActualizada($deudaActualizada);
            $em->persist($cliente);
        });

        $grid->prepare();

        $view = new \Zend\View\Model\ViewModel(array('grid' => $grid));

        $view->setTerminal(TRUE);

        return $view;
    }

    public function deudaAction() {
        $clienteId = $this->params('clienteId');
        $cliente = $this->getClienteRepository()->find($clienteId);

        $form = new \Acef\Form\DeudaCliente();
        $form->setHydrator(new \DoctrineModule\Stdlib\Hydrator\DoctrineObject($this->getEm()));
        $form->bind($cliente);


        $this->formProcess($this->getEm(),$form,true,"Deuda Actualizada");

        $view = new \Zend\View\Model\ViewModel(array('form' => $form,'clienteId' => $clienteId));

        $view->setTerminal(TRUE);

        return $view;
    }

}
