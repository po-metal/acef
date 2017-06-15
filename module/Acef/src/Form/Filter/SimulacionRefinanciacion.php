<?php

namespace Acef\Form\Filter;

use Zend\InputFilter\InputFilter;

/**
 * Description of RecoverFilter
 *
 * @author Cristian Incarnato <cristian.cdi@gmail.com>
 */
class SimulacionRefinanciacion extends InputFilter {

    function __construct() {

        $this->add(array(
            'name' => 'cuota_por_anio',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\Validator\Digits'
                ),
            ),
        ));

        $this->add(array(
            'name' => 'interes',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\Validator\Digits'
                ),
            ),
        ));

        new \Zend\Validator\GreaterThan();
        $this->add(array(
            'name' => 'meses_cuentas',
            'required' => true,
            'validators' => array(
                [
                    'name' => 'Zend\Validator\Digits'
                ],
                [
                    'name' => 'Zend\Validator\GreaterThan',
                    'options' => [
                        'min' => 0,
                        "messages" => 
                        ["notGreaterThan" => "El valor debe ser mayor a '%min%'"]
                    ]
                ]
            ),
        ));
    }

}
