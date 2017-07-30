<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-deuda' => [
            'gridId' => 'zfmdg_Deuda',
            'title_add' => 'Agregar Deuda',
            'title_edit' => 'Editar Deuda',
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "flashMessagesConfig" => [
                'enable' => true,
                'add_ok' => "Registro creado con éxito",
                'add_fail' => "Formulario inválido, por favor verificar",
                'edit_ok' => "Registro actualizado con éxito",
                'edit_fail' => "Formulario inválido, por favor verificar",
                'delete_ok' => "Registro eliminado",
                'delete_fail' => "Falla al intentar eliminar el registro",
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['pago', 'detalle', 'fecha']
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\Deuda::class,
                    'entityManager' => 'doctrine.entitymanager.orm_default',
                ],
            ],
            'formConfig' => [
                'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                'groups' => [
                    
                ],
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    'priority' => 10,
                    'hidden' => 'true',
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'type' => 'relational',
                    'hidden' => 'true',
                ], 
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d',
                    'priority' => 20,
                ],
                'monto' => [
                    'displayName' => 'Monto',
                    'priority' => 30,
                ],
                'deudaActualizada' => [
                    'displayName' => 'Deuda Actualizada',
                    'priority' => 40,
                ],
                'detalle' => [
                    'displayName' => 'Detalle',
                    'priority' => 60,
                    'type' => 'text',
                    'length' => 30
                ],
                'responsable' => [
                    'displayName' => 'Responsable',
                    'type' => 'relational',
                    'priority' => 50,
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
                    'class' => '',
                    'value' => 'Agregar Deuda',
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