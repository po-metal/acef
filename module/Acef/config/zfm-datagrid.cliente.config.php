<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-cliente' => [
            'gridId' => 'zfmdg_Cliente',
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\Cliente::class,
                    'entityManager' => 'doctrine.entitymanager.orm_default',
                ],
            ],
            'formConfig' => [
                'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                'vertical_groups' => [
                    
                ],
                'horizontal_groups' => [
                    
                ],
            ],
            'columnsConfig' => [
                'razonSocial' => [
                    'displayName' => 'Razón Social',
                ],
                'cuit' => [
                    'displayName' => 'Cuit',
                ],
                'domicilio' => [
                    'displayName' => 'Domicilio',
                    'hidden' => true,
                ],
                'localidad' => [
                    'displayName' => 'Localidad',
                    'hidden' => true,
                ],
                'telefono' => [
                    'displayName' => 'Télefono',
                    'hidden' => true,
                ],
                'telefonoAlternativo' => [
                    'displayName' => 'Teléfono Alternativo',
                    'hidden' => true,
                ],
                'email' => [
                    'displayName' => 'Email',
                    'hidden' => true,
                ],
                'fechaAsignacion' => [
                    'displayName' => 'Fecha Asignación',
                    'hidden' => true,
                ],
                'fechaRetencion' => [
                    'displayName' => 'Fecha de Retencion',
                    'hidden' => true,
                ],
                'fechaActualizacion' => [
                    'displayName' => 'Fecha de Actualización',
                    'hidden' => true,
                ],
                'responsable' => [
                    'displayName' => 'Responsable',
                ],
            ],
            'crudConfig' => [
                'enable' => true,
                'add' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-plus cursor-pointer',
                    'value' => '',
                ],
                'edit' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-edit cursor-pointer',
                    'value' => '',
                ],
                'del' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-trash cursor-pointer',
                    'value' => '',
                ],
                'view' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-list-alt cursor-pointer',
                    'value' => '',
                ],
            ],
        ],
    ],
];