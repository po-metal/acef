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
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'hidden' => true,
                ],
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d H:i:s',
                ],
                'pago' => [
                    'displayName' => 'Pago',
                ],
                'deudaActualizada' => [
                    'displayName' => 'Deuda Actualizada',
                ],
            ],
            'crudConfig' => [
                'enable' => true,
                'add' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-plus cursor-pointer',
                    'value' => '',
                ],
                'edit' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-edit cursor-pointer',
                    'value' => '',
                ],
                'del' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-trash cursor-pointer',
                    'value' => '',
                ],
                'view' => [
                    'enable' => true,
                    'class' => ' glyphicon glyphicon-list-alt cursor-pointer',
                    'value' => '',
                ],
            ],
        ],
    ],
];
