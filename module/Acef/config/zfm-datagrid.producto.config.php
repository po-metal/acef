<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-producto' => [
            'gridId' => 'zfmdg_Producto',
            'title' => "Productos",
            'title_add' => "Nuevo Producto",
            'title_edit' => "Editar Producto",
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['numero', 'nombre']
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\Producto::class,
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
                    'hidden' => true
                ],
                'nombre' => [
                    'displayName' => 'Tipo',
                    'type' => 'relational',
                    'multiSearchProperty' => "nombre"
                ],
                'numero' => [
                    'displayName' => 'Numero',
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'type' => 'relational',
                ],
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
                    'value' => 'Agregar Producto',
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
