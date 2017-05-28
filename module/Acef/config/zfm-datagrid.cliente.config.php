<?php

return [
    'zf-metal-datagrid.exports' => [
        'export-acef-entity-cliente' => [
            'fileName' => 'Clientes',
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                ],
                'razonSocial' => [
                    'displayName' => 'Razón Social',
                    'priority' => 10,
                ],
                'cuit' => [
                    'displayName' => 'Cuit',
                    'priority' => 20,
                ],
                'deuda' => [
                    'priority' => 30,
                ],
                'domicilio' => [
                    'displayName' => 'Domicilio',
                ],
                'localidad' => [
                    'displayName' => 'Localidad',
                ],
                'telefono' => [
                    'displayName' => 'Télefono',
                ],
                'telefonoAlternativo' => [
                    'displayName' => 'Teléfono Alternativo',
                ],
                'email' => [
                    'displayName' => 'Email',
                ],
                'fechaAsignacion' => [
                    'displayName' => 'Fecha Asignación',
                    'type' => 'datetime',
                    'format' => 'd/m/Y'
                ],
                'fechaRetencion' => [
                    'displayName' => 'Fecha de Retencion',
                    'type' => 'datetime',
                    'format' => 'd/m/Y'
                ],
                'fechaActualizacion' => [
                    'displayName' => 'Fecha',
                    'type' => 'datetime',
                    'format' => 'd/m/Y'
                ],
                'responsable' => [
                    'displayName' => 'Responsable',
                    'type' => 'relational',
                    'field' => 'name',
                    'priority' => 40,
                ],
                'estado' => [
                    'displayName' => 'Estado',
                    'type' => 'relational',
                    'field' => 'nombre',
                    'priority' => 50,
                ],
            ],
        ]
    ],
    'zf-metal-datagrid.custom' => [
        'acef-entity-cliente' => [
            'gridId' => 'zfmdg_Cliente',
            'title' => "Clientes",
            'title_add' => "Nuevo Cliente",
            'title_edit' => "Editar Cliente",
            'export_config' => [
                'export_to_excel' => [
                    'enable' => true,
                    'key' => 'export-acef-entity-cliente',
                    'btn_class' => 'btn btnCustom fa fa-file-excel-o',
                    'btn_value' => 'Excel',
                    'btn_tag' => 'button',
                ],
            ],
            'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['razonSocial', 'cuit', 'domicilio', 'localidad', 'telefono', 'telefonoAlternativo', 'email', 'responsable', 'estado', 'deuda']
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\Cliente::class,
                    'entityManager' => 'doctrine.entitymanager.orm_default',
                ],
            ],
            'formConfig' => [
                'columns' => \ZfMetal\Commons\Consts::COLUMNS_TWO,
                'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                'groups' => [
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_HORIZONTAL,
                        'id' => 'User',
                        'title' => null,
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_TWO,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['razonSocial', 'cuit', 'domicilio', 'localidad', 'telefono', 'telefonoAlternativo', 'email', 'responsable', 'estado', 'deuda']
                    ],
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_HORIZONTAL,
                        'id' => 'User',
                        'title' => null,
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_THREE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['fechaAsignacion', 'fechaRetencion', 'fechaActualizacion']
                    ],
                ]
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                    "hidden" => true
                ],
                'razonSocial' => [
                    'displayName' => 'Razón Social',
                    'priority' => 10,
                ],
                'cuit' => [
                    'displayName' => 'Cuit',
                    'priority' => 20,
                ],
                'deuda' => [
                    'priority' => 30,
                ],
                'domicilio' => [
                    'displayName' => 'Domicilio',
                    'hidden' => true,
                ],
                'localidad' => [
                    'displayName' => 'Localidad',
                    'hidden' => true,
                ],
                'telefono' => [
                    'displayName' => 'Télefono',
                    'hidden' => true,
                ],
                'telefonoAlternativo' => [
                    'displayName' => 'Teléfono Alternativo',
                    'hidden' => true,
                ],
                'email' => [
                    'displayName' => 'Email',
                    'hidden' => true,
                ],
                'fechaAsignacion' => [
                    'displayName' => 'Fecha Asignación',
                    'hidden' => true,
                ],
                'fechaRetencion' => [
                    'displayName' => 'Fecha de Retencion',
                    'hidden' => true,
                ],
                'fechaActualizacion' => [
                    'displayName' => 'Fecha',
                    'hidden' => true,
                    'type' => 'datetime',
                    'format' => 'd/m/Y'
                ],
                'responsable' => [
                    'displayName' => 'Responsable',
                    'type' => 'relational',
                    'multiSearchProperty' => "username",
                    'priority' => 40,
                ],
                'estado' => [
                    'displayName' => 'Estado',
                    'type' => 'relational',
                    'multiSearchProperty' => "nombre",
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
                    'value' => 'Agregar Cliente',
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
                'manager' => [
                    'enable' => true,
                    'action' => 'href="/acef/manager-cliente/main/{{id}}"',
                    'class' => ' table-link success',
                    'value' => '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-cog fa-stack-1x fa-inverse"></i></span>',
                ],
            ],
        ],
    ],
];
