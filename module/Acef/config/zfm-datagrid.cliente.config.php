<?php

return [
    'zf-metal-datagrid.custom' => [
        '\\Acef\\Entity\\Cliente' => [
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
                    'hidden' => true,
                ],
                'localidad' => [
                    'hidden' => true,
                ],
                'telefono' => [
                    'hidden' => true,
                ],
                'telefonoAlternativo' => [
                    'hidden' => true,
                ],
                'email' => [
                    'hidden' => true,
                ],
                'fechaAsignacion' => [
                    'hidden' => true,
                ],
                'fechaRetencion' => [
                    'hidden' => true,
                ],
                'fechaActualizacion' => [
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
                    'class' => 'btn btn-link glyphicon glyphicon-plus cursor-pointer',
                    'value' => '',
                ],
                'edit' => [
                    'enable' => true,
                    'class' => 'btn btn-link glyphicon glyphicon-edit cursor-pointer',
                    'value' => '',
                ],
                'del' => [
                    'enable' => true,
                    'class' => 'btn btn-link glyphicon glyphicon-trash cursor-pointer',
                    'value' => '',
                ],
                'view' => [
                    'enable' => true,
                    'class' => 'btn btn-link glyphicon glyphicon-list-alt cursor-pointer',
                    'value' => '',
                ],
            ],
        ],
    ],
];