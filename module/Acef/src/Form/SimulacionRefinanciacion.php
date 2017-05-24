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
            'name' => 'total_deuda_con_quita',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Total de Deuda con Quita',
            )
        ));

        $this->add(array(
            'name' => 'anticipo',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'ANTICIPO
',
            )
        ));

        $this->add(array(
            'name' => 'monto_a_refinanciar',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled'
            ),
            'options' => array(
                'label' => 'Monto a Refinanciar',
            )
        ));

        $this->add(array(
            'name' => 'interes',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => '% INTERES',
            )
        ));


        $this->add(array(
            'name' => 'cantidad_cuotas',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'CANT.CUOTAS',
            )
        ));

        $this->add(array(
            'name' => 'cuota_por_anio',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Cuota por año',
            )
        ));

        $this->add(array(
            'name' => 'monto_de_cuota',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled'
            ),
            'options' => array(
                'label' => 'MONTO DE CUOTA:',
            )
        ));

        $this->add(array(
            'name' => 'meses_cuentas',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'MESES CTAS.',
            )
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
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => "Calcular",
                'class' => 'btn btnCustom',
            ),
            'options' => array(
                'label' => 'Submit',
            )
        ));
    }

}
