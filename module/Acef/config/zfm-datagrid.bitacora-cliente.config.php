<?php

return [
    'zf-metal-datagrid.custom' => [
        '\\Acef\\Entity\\BitacoraCliente' => [
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\BitacoraCliente::class,
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
                'id' => [
                    'displayName' => 'ID',
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                ],
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d H:i:s',
                ],
                'nota' => [
                    'displayName' => 'Nota',
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