<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * DeudaActualizacionController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class DeudaActualizacionController extends AbstractActionController {

    const ENTITY = '\\Acef\\Entity\\DeudaActualizacion';

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

    public function getDeudaActualizacionRepository() {
        return $this->getEm()->getRepository(self::ENTITY);
    }

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function formAction() {
        $clienteId = $this->params('clienteId');

        $deudaActualizacion = $this->getDeudaActualizacionRepository()->findOneBy(['cliente' => $clienteId]);

        if (!$deudaActualizacion) {
            $deudaActualizacion = new \Acef\Entity\DeudaActualizacion();
            $deudaActualizacion->setCliente($this->getEm()->getReference("Acef\Entity\Cliente", $clienteId));
        }

        $formActualizacion = new \Acef\Form\SimulacionActualizacion();
        $formActualizacion->setHydrator(new \DoctrineModule\Stdlib\Hydrator\DoctrineObject($this->getEm()));
        $formActualizacion->bind($deudaActualizacion);

        if ($this->getRequest()->isPost()) {


            $formActualizacion->setData($this->getRequest()->getPost());

            if ($formActualizacion->isValid()) {
                $deudaActualizacion->simular();
                $this->getEm()->persist($deudaActualizacion);
                $this->getEm()->flush();

                $formActualizacion->bind($deudaActualizacion);
            }
        }

        $view = new \Zend\View\Model\ViewModel(array('formActualizacion' => $formActualizacion, 'clienteId' => $clienteId));
        $view->setTerminal(true);
        return $view;
    }

}
