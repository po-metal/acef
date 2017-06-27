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
            'name' => 'cuotaPorAnio',
            'required' => false,
            'validators' => array(
                array(
                    'name' => 'Zend\Validator\Digits',
                    'options'=>[
                         'messages'=>[
                             \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                         ]
                    ]
                ),
            ),
        ));

        $this->add(array(
            'name' => 'interes',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\Validator\Digits',
                    'options'=>[
                         'messages'=>[
                             \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                         ]
                    ]
                ),
            ),
        ));

        $this->add(array(
            'name' => 'cantidadCuotas',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\Validator\Digits',
                    'options'=>[
                        'messages'=>[
                            \Zend\Validator\Digits::INVALID => 'El valor ingresado no es numérico',
                        ]
                   ]
                ),
            ),
        ));

        $this->add(array(
            'name' => 'totalDeudaConQuita',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\IsFloat',
                    'options'=>[
                        'messages'=>[
                            \Zend\I18n\Validator\IsFloat::NOT_FLOAT => 'El valor ingresado no es numérico',
                        ],
                   ],
                ),
            ),
        ));

        $this->add(array(
            'name' => 'anticipo',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\IsFloat',
                    'options'=>[
                        'messages'=>[
                            \Zend\I18n\Validator\IsFloat::NOT_FLOAT => 'El valor ingresado no es numérico',
                        ],
                   ],
                ),
            ),
        ));

        new \Zend\Validator\GreaterThan();
        $this->add(array(
            'name' => 'mesesCuentas',
            'required' => false,
            'validators' => array(
                [
                    'name' => 'Zend\Validator\Digits',
                    'options'=>[
                         'messages'=>[
                             \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                         ]
                    ]
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
