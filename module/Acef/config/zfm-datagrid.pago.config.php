<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-pago' => [
            'gridId' => 'zfmdg_Pago',
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
                "properties_enabled" => ['pago', 'detalle', 'fecha']
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\Pago::class,
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
                    'hidden' => true,
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'hidden' => true,
                ],
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d',
                    'priority' => 20,
                ],
                'pago' => [
                    'displayName' => 'Pago',
                    'priority' => 30,
                ],
                'deudaActualizada' => [
                    'displayName' => 'Deuda Actualizada',
                    'priority' => 40,
                ],
                'responsable' => [
                    'displayName' => 'responsable',
                    'priority' => 50,
                ],
                'detalle' => [
                    'displayName' => 'Detalle',
                    'priority' => 60,
                    'type' => 'text',
                    'length' => 30
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
                    'value' => 'Agregar Pago',
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
