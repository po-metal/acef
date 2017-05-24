<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-bitacoracliente' => [
            'gridId' => 'zfmdg_BitacoraCliente',
            'title' => "Historial",
            'title_add' => "Nueva Nota",
            'title_edit' => "Editar Nota",
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['nota', 'responsable']
            ],
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
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    "hidden" => true
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'type' => 'relational',
                ],
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d',
                    'priority' => 80,
                ],
                'nota' => [
                    'displayName' => 'Nota',
                    'priority' => 85,
                    'type' => 'text',
                    'length' => 30
                ],
                'responsable' => [
                    'type' => 'relational',
                    'multiSearchProperty' => "username",
                    'priority' => 90,
                ]
            ],
            'crudConfig' => [
                'enable' => true,
                'side' => "right",
                'displayName' => 'Acciones',
                'tdClass' => 'action_column',
                'thClass' => 'action_column',
                'add' => [
                    'enable' => true,
                    'class' => 'btn btn-primary btn-xs',
                    'value' => 'Agregar Nota',
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
