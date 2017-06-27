<?php

namespace Acef\Form;

use Zend\Form\Form;

class SimulacionActualizacion extends \Zend\Form\Form {

    public function __construct() {
        parent::__construct('simulacion_actualizacion');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', "form");
        $this->setAttribute('role', "form");

        $this->add(array(
            'name' => 'porcentajeQuitaIntereses',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Porcentaje de quita sobre intereses',
            )
        ));

        $this->add(array(
            'name' => 'porcentajeQuitaCapital',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Porcentaje de quita sobre capital ',
            ),
        ));


        $this->add(array(
            'name' => 'tasa',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Tasa',
            )
        ));

        $this->add(array(
            'type' => 'Date',
            'name' => 'fechaMoraDesde',
            'attributes' => array(
                'type' => 'date',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Fecha de mora (Desde)',
            )
        ));

        $this->add(array(
            'type' => 'Date',
            'name' => 'fechaCalculoHasta',
            'attributes' => array(
                'type' => 'date',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Fecha de cálculo (Hasta)',
            )
        ));


        $this->add(array(
            'name' => 'diasDeMora',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Días de Mora',
            )
        ));

        $this->add(array(
            'name' => 'capital',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Capital',
            )
        ));

        $this->add(array(
            'name' => 'compensa',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Compensa',
            )
        ));

        $this->add(array(
            'name' => 'totalIntereses',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Total intereses',
            )
        ));

        $this->add(array(
            'name' => 'totalDeudaActualizada',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Total de deuda actualizada',
            )
        ));

        $this->add(array(
            'name' => 'quitaInteresesTotalDeudaActualizada',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Quita de interes sobre total deuda',
            )
        ));

        $this->add(array(
            'name' => 'quitaDeCapital',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Quita de capital',
            )
        ));


        $this->add(array(
            'name' => 'totalDeudaConQuita',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
            ),
            'options' => array(
                'label' => 'Total de deuda con quita',
            )
        ));



        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => "Calcular",
                'class' => 'btn btnCustom pull-right',
                'style' => 'margin-left: 2px'
            ),
            'options' => array(
                'label' => 'Submit',
            )
        ));

        $this->add(array(
            'name' => 'borrar',
            'type' => 'Zend\Form\Element\Button',
            'attributes' => array(
                'value' => "Borrar",
                'class' => 'pull-right btn btnCancelCustom',
                'onclick' => 'cleanActualizacion()',
            ),
            'options' => array(
                'label' => 'Cancelar',
            )
        ));

        $this->getInputFilter()->add([
            'name' => 'porcentajeQuitaIntereses',
            'validators'=>[
                [
                   'name'=> '\Zend\Validator\Digits',
                   'options'=>[
                        'messages'=>[
                            \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                        ]
                   ]
               ]
            ]
        ]);

        $this->getInputFilter()->add([
            'name' => 'porcentajeQuitaCapital',
            'validators'=>[
                [
                   'name'=> '\Zend\Validator\Digits',
                   'options'=>[
                        'messages'=>[
                            \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                        ]
                   ]
               ]
            ]
        ]);

        $this->getInputFilter()->add([
            'name' => 'tasa',
            'validators'=>[
                [
                   'name'=> '\Zend\Validator\Digits',
                   'options'=>[
                        'messages'=>[
                            \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                        ]
                   ]
               ]
            ]
        ]);

        $this->getInputFilter()->add([
            'name' => 'capital',
            'validators'=>[
                [
                   'name'=> '\Zend\Validator\Digits',
                   'options'=>[
                        'messages'=>[
                            \Zend\Validator\Digits::NOT_DIGITS => 'El valor ingresado no es numérico',
                        ]
                   ]
               ]
            ]
        ]);
    }

}
