<?php

//move to root "config/autoload/"
return array(
    'zf-metal-datagrid.options' => array(
        'recordsPerPage' => 10,
        'template_default' => 'default',
        "crudConfig" => [
            "enable" => true,
            'side' => "left",
            'add' => [
                'enable' => false,
                'class' => 'btn btn-primary btn-xs',
                'value' => '<i class="fa fa-plus-circle fa-lg"></i> Crear',
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
    )
);