<?php

namespace Acef\Form;

use Zend\Form\Form;

class DeudaCliente extends \Zend\Form\Form {

    public function __construct() {
        parent::__construct('DeudaCliente');
        $this->setAttribute('method', 'post');
          $this->setAttribute('id', 'DeudaCliente');
        $this->setAttribute('class', "form");
        $this->setAttribute('role', "form");

        $this->add(array(
            'name' => 'deuda',
            'attributes' => array(
                'type' => 'text',
                'class' => 'form-control ',
            ),
            'options' => array(
                'label' => 'Deuda',
            )
        ));

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            )
        ));


        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => "Guardar",
                'class' => 'btn btnCustom pull-left',
                'style' => 'margin-left: 2px'
            ),
            'options' => array(
                'label' => 'Submit',
            )
        ));

    }

}
