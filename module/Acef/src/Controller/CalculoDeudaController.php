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
        $form = new \Acef\Form\SimulacionActualizacion();
        return ["form" => $form];
    }

}
