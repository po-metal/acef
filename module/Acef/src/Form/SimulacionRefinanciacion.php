<?php

namespace Acef\Form;

use Zend\Form\Form;

class SimulacionRefinanciacion extends \Zend\Form\Form {

    public function __construct() {
        parent::__construct('simulacion_refinanciacion');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', "form");
        $this->setAttribute('role', "form");

        $this->add(array(
            'name' => 'totalDeudaConQuita',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Total de deuda con quita',
            )
        ));

        $this->add(array(
            'name' => 'anticipo',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Anticipo',
            )
        ));

        $this->add(array(
            'name' => 'montoRefinanciar',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled'
            ),
            'options' => array(
                'label' => 'Monto a refinanciar',
            )
        ));

        $this->add(array(
            'name' => 'interes',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => '% Interes',
            )
        ));


        $this->add(array(
            'name' => 'cantidadCuotas',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Cant. Cuotas',
            )
        ));

        $this->add(array(
            'name' => 'cuotaPorAnio',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control noClean',
                'readonly' => 'readonly',
                'value'=>12
            ),
            'options' => array(
                'label' => 'Cuota por año',
                'required' => true,
            )
        ));

        $this->add(array(
            'name' => 'montoDeCuota',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled'
            ),
            'options' => array(
                'label' => 'Monto de Cuota',
            )
        ));

        $this->add(array(
            'name' => 'mesesCuentas',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control noClean',
                'readonly' => 'readonly',
                'value'=> 1
            ),
            'options' => array(
                'label' => 'Meses Ctas.',
            )
        ));

        $this->add(array(
            'name' => 'tasa',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled'
            ),
            'options' => array(
                'label' => '% Tasa',
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
                'onclick' => 'this.form.reset()',
            ),
            'options' => array(
                'label' => 'Cancelar',
            )
        ));
    }

}
