<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-duedarefinanciacion' => [
            'gridId' => 'zfmdg_DuedaRefinanciacion',
             'multi_filter_config' => [
                "enable" => false,
                "properties_disabled" => []
            ],
            "multi_search_config" => [
                "enable" => true,
                "properties_enabled" => ['cantidadCuotas','montoDeCuota', 'montoRefinanciar', 'fechaCreacion', ]
            ],
            'sourceConfig' => [
                'type' => 'doctrine',
                'doctrineOptions' => [
                    'entityName' => \Acef\Entity\DuedaRefinanciacion::class,
                    'entityManager' => 'doctrine.entitymanager.orm_default',
                ],
            ],
            'formConfig' => [
                'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
                'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                     'submit' => [
                'enable' => true,
                'value' => 'Calcular y Guardar',
                'class' => 'pull-right btn btnCustom',
                'priority' => 100,
            ],
            'cancel' => [
                'enable' => true,
                'value' => 'Volver',
                'class' => 'pull-right btn btnCancelCustom',
                'priority' => 30,
            ],
            'clean' => [
                'enable' => true,
                'value' => 'Limpiar',
                'class' => 'pull-right btn btnCancelCustom btnAjaxCustom',
                'priority' => 50,
            ],
                'groups' => [
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_VERTICAL,
                        'id' => 'Parametros',
                        'title' => 'Parametros',
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_THREE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['totalDeudaConQuita', 'anticipo', 'mesesCuentas']
                    ],
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_VERTICAL,
                        'id' => 'Parametros 2',
                        'title' => '<br>',
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_THREE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['interes', 'cantidadCuotas', 'cuotaPorAnio']
                    ],
                    [
                        'type' => \ZfMetal\Commons\Options\FormGroupConfig::TYPE_VERTICAL,
                        'id' => 'Final',
                        'title' => 'Totales',
                        'columns' => \ZfMetal\Commons\Consts::COLUMNS_THREE,
                        'style' => \ZfMetal\Commons\Consts::STYLE_VERTICAL,
                        'fields' => ['tasa', 'montoRefinanciar', 'montoDeCuota',]
                    ],
                ]
            ],
            'columnsConfig' => [
                'id' => [
                    'displayName' => 'ID',
                     'hidden' => true,
                    'priority' => 10
                ],
                'totalDeudaConQuita' => [
                    'displayName' => 'Total de deuda con quita',
                     'hidden' => true,
                ],
                'anticipo' => [
                    'displayName' => 'Anticipo',
                     'hidden' => true,
                ],
                'montoRefinanciar' => [
                    'displayName' => 'Monto a refinanciar',
                ],
                'interes' => [
                    'displayName' => '% Interes',
                     'hidden' => true,
                ],
                'cuotaPorAnio' => [
                    'displayName' => 'Cuota por año',
                     'hidden' => true,
                ],
                'montoDeCuota' => [
                    'displayName' => 'Monto de Cuota',
                       'priority' => 40
                ],
                'mesesCuentas' => [
                    'displayName' => 'Meses Ctas.',
                    'hidden' => true,
                ],
                'tasa' => [
                    'displayName' => 'Tasa',
                     'hidden' => true,
                ],
                'cliente' => [
                    'displayName' => 'Cliente',
                    'type' => 'relational',
                ],
                'cantidadCuotas' => [
                    'displayName' => 'Cant. Cuotas',
                       'priority' => 30
                ],
                'fechaCreacion' => [
                    'displayName' => 'Fecha Creacion',
                    'type' => 'date',
                    'format' => 'Y-m-d',
                       'priority' => 20
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
                    'class' => ' glyphicon glyphicon-plus cursor-pointer',
                    'value' => 'Agregar Refinanciación',
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