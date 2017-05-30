<?php

return [
    'zf-metal-datagrid.exports' => [
        'export-acef-entity-producto' => [
            'fileName' => 'Producto',
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                ],
                'nombre' => [
                    'displayName' => 'TIPO',
                    'type' => 'relational',
                    'multiSearchProperty' => "nombre",
                    'priority' => 80,
                ],
                'numero' => [
                    'displayName' => 'NÚMERO',
                ],
                'cliente' => [
                    'displayName' => 'CLIENTE',
                    'type' => 'relational',
                    'field' => "razonSocial",
                     'priority' => 10,
                ],
            ]
        ]
    ],
    'zf-metal-datagrid.custom' => [
        'acef-entity-producto' => [
            'gridId' => 'zfmdg_Producto',
            'title' => "Productos",
            'title_add' => "Nuevo Producto",
            'title_edit' => "Editar Producto",
            'export_config' => [
                'export_to_excel' => [
                    'enable' => true,
                    'key' => 'export-acef-entity-producto',
//                    'btn_class' => 'btn btnCustom fa fa-file-excel-o',
//                    'btn_value' => 'Excel',
//                    'btn_tag' => 'button',
                ],
            ],
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "flashMessagesConfig" => [
                'enable' => true,
                'add_ok' => "Registro creado con exito",
                'add_fail' => "Formulario invalido, por favor verificar",
                'edit_ok' => "Registro actualizado con exito",
                'edit_fail' => "Formulario invalido, por favor verificar",
                'delete_ok' => "Registro eliminado",
                'delete_fail' => "Falla al intentar eliminar el registro",
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
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    'hidden' => true
                ],
                'nombre' => [
                    'displayName' => 'TIPO',
                    'type' => 'relational',
                    'multiSearchProperty' => "nombre",
                    'priority' => 80,
                ],
                'numero' => [
                    'displayName' => 'NÚMERO',
                ],
                'cliente' => [
                    'displayName' => 'CLIENTE',
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
                    'enable' => false,
                    'class' => '',
                    'value' => '<span class="fa-stack btnCircle btn btnBlue"></i><i class="fa fa-search-plus fa-stack-1x"></i></span>',
                ],
                'edit' => [
                    'enable' => true,
                    'class' => ' ',
                    'value' => '<span class="fa-stack btnCircle btn btnBlue"></i><i class="fa fa-pencil fa-stack-1x"></i></span>',
                ],
                'del' => [ 
                    'enable' => true,
                    'class' => '',
                    'value' => '<span class="fa-stack btnCircle btn btnRed"></i><i class="fa fa-trash-o fa-stack-1x"></i></span>',
                ],
            ],
        ],
    ],
];
