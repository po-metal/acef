<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-cliente' => [
            'gridId' => 'zfmdg_Cliente',
            'title' => "Clientes",
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
                'vertical_groups' => [
                ],
                'horizontal_groups' => [
                ],
            ],
            'columnsConfig' => [
                'razonSocial' => [
                    'displayName' => 'Razón Social',
                ],
                'cuit' => [
                    'displayName' => 'Cuit',
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
                    'displayName' => 'Fecha de Actualización',
                    'hidden' => true,
                ],
                'responsable' => [
                    'displayName' => 'Responsable',
                ],
            ],
            'crudConfig' => [
                'enable' => true,
                'side' => "right",
                'add' => [
                    'enable' => true,
                    'class' => '',
                    'value' => 'Agregar Cliente',
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
