<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * DeudaRefinanciacionController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DeudaRefinanciacionController extends AbstractActionController
{

    const ENTITY = '\\Acef\\Entity\\DuedaRefinanciacion';

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    public $em = null;

    /**
     * @var \ZfMetal\Datagrid\Grid
     */
    public $grid = null;

    public function getEm()
    {
        return $this->em;
    }

    public function setEm(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function getDeudaRefinanciacionRepository()
    {
        return $this->getEm()->getRepository(self::ENTITY);
    }

    public function getDeudaActualizacionRepository()
    {
        return $this->getEm()->getRepository('\\Acef\\Entity\\DeudaActualizacion');
    }

    public function __construct(\Doctrine\ORM\EntityManager $em, \ZfMetal\Datagrid\Grid $grid)
    {
        $this->em = $em; $this->grid = $grid;
    }

    public function formAction()
    {
        $clienteId = $this->params('clienteId');

        $deudaRefinanciacion = $this->getDeudaRefinanciacionRepository()->findOneBy(['cliente' => $clienteId]);

        if (!$deudaRefinanciacion) {
            $deudaRefinanciacion = new \Acef\Entity\DuedaRefinanciacion();
            $deudaRefinanciacion->setCliente($this->getEm()->getReference("Acef\Entity\Cliente", $clienteId));
        }

        $deudaActualizacion = $this->getDeudaActualizacionRepository()->findOneBy(['cliente' => $clienteId]);

        if($deudaActualizacion){
             $deudaRefinanciacion->setTotalDeudaConQuita($deudaActualizacion->getTotalDeudaConQuita());
        }
               


        $formRefinanciacion = new \Acef\Form\SimulacionRefinanciacion();
        $formRefinanciacion->setInputFilter(new \Acef\Form\Filter\SimulacionRefinanciacion());
        $formRefinanciacion->setHydrator(new \DoctrineModule\Stdlib\Hydrator\DoctrineObject($this->getEm()));
        $formRefinanciacion->bind($deudaRefinanciacion);

        if ($this->getRequest()->isPost()) {

            $formRefinanciacion->setData($this->getRequest()->getPost());

            if ($formRefinanciacion->isValid()) {
                $deudaRefinanciacion->simular();

                $this->getEm()->persist($deudaRefinanciacion);
                $this->getEm()->flush();
                $formRefinanciacion->bind($deudaRefinanciacion);
            }
        }

        $view = new \Zend\View\Model\ViewModel(array('formRefinanciacion' => $formRefinanciacion, 'clienteId' => $clienteId));
        $view->setTerminal(true);
        return $view;
    }

    public function getEntityRepository()
    {
        return $this->getEm()->getRepository(self::ENTITY);
    }

    public function getGrid()
    {
        return $this->grid;
    }

    public function setGrid(\ZfMetal\Datagrid\Grid $grid)
    {
        $this->grid = $grid;
    }

    public function gridAction()
    {
        $this->grid->setTemplate("ajax");
        $this->grid->prepare();
        return array("grid" => $this->grid);
    }


}

