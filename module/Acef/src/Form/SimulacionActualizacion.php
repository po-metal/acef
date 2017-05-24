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
            'name' => 'porcentaje_quita_intereses',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => '% de Quita sobre intereses',
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
            'name' => 'fecha_mora_desde',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Fecha de Mora (Desde)',
            )
        ));

        $this->add(array(
            'name' => 'fecha_calculo_hasta',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Fecha de Cálculo (hasta)',
            )
        ));


        $this->add(array(
            'name' => 'dias_de_mora',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
                'disabled' => 'disabled',
                'value' => '52'
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
            ),
            'options' => array(
                'label' => 'Compensa',
            )
        ));

        $this->add(array(
            'name' => 'total_intereses',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
            ),
            'options' => array(
                'label' => 'Total Intereses',
            )
        ));

        $this->add(array(
            'name' => 'total_deuda_actualizada',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
            ),
            'options' => array(
                'label' => 'Total de Deuda Actualizada',
            )
        ));

        $this->add(array(
            'name' => 'quita_intereses_total_deuda_actualizada',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Quita de interes sobre total deuda',
            )
        ));

        $this->add(array(
            'name' => 'quita_de_capital',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Quita de capital',
            )
        ));


        $this->add(array(
            'name' => 'total_deuda_con_quita',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control formula',
            ),
            'options' => array(
                'label' => 'Total de Deuda con Quita',
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
