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

        return ["formActualizacion" => $formActualizacion];
    }

    public function refinanciacionAction() {

        $formRefinanciacion = new \Acef\Form\SimulacionRefinanciacion();
        return ["formRefinanciacion" => $formRefinanciacion];
    }

}
