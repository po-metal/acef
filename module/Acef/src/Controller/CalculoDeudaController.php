<?php

namespace Acef\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * CalculoDeudaController
 *
 *
 *
 * @author ZfMetal Team
 * @license Creative Commons
 * @link https://github.com/zf-metal
 */
class CalculoDeudaController extends AbstractActionController {

    public function simuladorAction() {
        $formActualizacion = new \Acef\Form\SimulacionActualizacion();
        $formRefinanciacion = new \Acef\Form\SimulacionRefinanciacion();
        return ["formActualizacion" => $formActualizacion, "formRefinanciacion" => $formRefinanciacion];
    }

    public function actualizacionAction() {
        $formActualizacion = new \Acef\Form\SimulacionActualizacion();
        $formActualizacion->setHydrator(new \Zend\Hydrator\ClassMethods());


        if ($this->getRequest()->isPost()) {
            $serviceActualizacion = new \Acef\Service\SimuladorActualizacion();
            $formActualizacion->bind($serviceActualizacion);
            $formActualizacion->setData($this->getRequest()->getPost());

            if ($formActualizacion->isValid()) {

                $serviceActualizacion->simular();
                $formActualizacion->bind($serviceActualizacion);
            }
        }

        return ["formActualizacion" => $formActualizacion, ''];
    }

    public function refinanciacionAction() {

        $formRefinanciacion = new \Acef\Form\SimulacionRefinanciacion();
        $formRefinanciacion->setInputFilter(new \Acef\Form\Filter\SimulacionRefinanciacion());

        if ($this->getRequest()->isPost()) {
            $serviceRefinanciacion = new \Acef\Service\SimuladorRefinanciacion();
            $formRefinanciacion->setHydrator(new \Zend\Hydrator\ClassMethods());
            $formRefinanciacion->bind($serviceRefinanciacion);
            $formRefinanciacion->setData($this->getRequest()->getPost());
            
            if ($formRefinanciacion->isValid()) {
                $serviceRefinanciacion->simular();
               $formRefinanciacion->bind($serviceRefinanciacion);
            }
        }
        return ["formRefinanciacion" => $formRefinanciacion];
    }

}
