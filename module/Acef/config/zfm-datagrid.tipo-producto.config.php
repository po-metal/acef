<?php

return [
    'zf-metal-datagrid.custom' => [
        'acef-entity-tipoproducto' => [
            'gridId' => 'zfmdg_TipoProducto',
                 'title' => "Tipo de Productos",
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
                'vertical_groups' => [
                    
                ],
                'horizontal_groups' => [
                    
                ],
            ],
            'columnsConfig' => [
                'nombre' => [
                    'displayName' => 'Nombre',
                ],
            ],
            'crudConfig' => [
                'enable' => true,
                      'side' => "right",
                'add' => [
                    'enable' => true,
                    'class' => '',
                    'value' => '',
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
            ],
        ],
    ],
];