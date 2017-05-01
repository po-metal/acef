<?php

return [
    'Acef-Entity-Cliente' => [
        'sourceConfig' => [
            'type' => 'doctrine',
            'doctrineOptions' => [
                'entityName' => 'Acef\\Entity\\Cliente',
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
            'domicilio' => [
                'hidden' => true,
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
];