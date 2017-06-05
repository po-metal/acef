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
            "flashMessagesConfig" => [
                'enable' => true,
                'add_ok' => "Registro creado con exito",
                'add_fail' => "Formulario invalido, por favor verificar",
                'edit_ok' => "Registro actualizado con exito",
                'edit_fail' => "Formulario invalido, por favor verificar",
                'delete_ok' => "Registro eliminado",
                'delete_fail' => "Falla al intentar eliminar el registro, el producto se encuentra asociado a otros clientes.",
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
                    'tooltip' => true
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
