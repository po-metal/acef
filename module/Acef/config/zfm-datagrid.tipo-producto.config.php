<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-tipoproducto' => [
            'gridId' => 'zfmdg_TipoProducto',
            'title' => "Productos",
            'title_add' => "Nuevo Producto",
            'title_edit' => "Editar Producto",
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['nombre']
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\TipoProducto::class,
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
                    'hidden' => true,
                ],
                'nombre' => [
                    'displayName' => 'NOMBRE',
                    'priority' => 80,
                ],
                'descripcion' => [
                    'type' => "text",
                    'length' => 30,
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
                    'class' => '',
                    'value' => 'Agregar Producto',
                ],
                'view' => [
                    'enable' => false,
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
