<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-bitacoracliente' => [
            'gridId' => 'zfmdg_BitacoraCliente',
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
                    'type' => 'relational',
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
                'side' => "right",
                'add' => [
                    'enable' => false,
                    'class' => 'btn btn-primary btn-xs',
                    'value' => '<i class="fa fa-plus-circle fa-lg"></i> Crear',
                ],
                'view' => [
                    'enable' => true,
                    'class' => ' table-link',
                    'value' => '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-search-plus fa-stack-1x fa-inverse"></i></span>',
                ],
                'edit' => [
                    'enable' => true,
                    'class' => ' table-link',
                    'value' => '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-pencil fa-stack-1x fa-inverse"></i></span>',
                ],
                'del' => [
                    'enable' => true,
                    'class' => ' table-link danger',
                    'value' => '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-trash-o fa-stack-1x fa-inverse"></i></span>',
                ],
            ],
        ],
    ],
];
