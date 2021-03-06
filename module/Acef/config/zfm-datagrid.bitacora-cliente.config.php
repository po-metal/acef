<?php

return [
    'zf-metal-datagrid.exports' => [
        'export-acef-entity-bitacoracliente' => [
            'fileName' => 'Historial',
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    "hidden" => true
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'type' => 'relational',
                      'priority' => 10,
                ],
                'fecha' => [
                    'displayName' => 'Fecha',
                    'type' => 'date',
                    'format' => 'Y-m-d H:i:s',
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
            ]
        ]
    ],
    'zf-metal-datagrid.custom' => [
        'acef-entity-bitacoracliente' => [
            'gridId' => 'zfmdg_BitacoraCliente',
            'title' => "Historial",
            'title_add' => "Nueva Nota",
            'title_edit' => "Editar Nota",
            'export_config' => [
                'export_to_excel' => [
                    'enable' => true,
                    'key' => 'export-acef-entity-bitacoracliente',
//                    'btn_class' => 'btn btnCustom fa fa-file-excel-o',
//                    'btn_value' => 'Excel',
//                    'btn_tag' => 'button',
                ],
            ],
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
                    'length' => 30,
                    'tooltip' => true
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
