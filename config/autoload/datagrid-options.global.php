<?php

//move to root "config/autoload/"
return array(
    'zf-metal-datagrid.options' => array(
        'recordsPerPage' => 10,
        'template_default' => 'default',
        "formConfig" => [
            'columns' => \ZfMetal\Commons\Consts::COLUMNS_ONE,
            'style' => \ZfMetal\Commons\Consts::STYLE_MENU_VERTICAL,
            'submit' => [
                'enable' => true,
                'value' => 'Enviar',
                'class' => 'pull-right btn btnCustom ',
                'priority' => 100,
            ],
            'cancel' => [
                'enable' => true,
                'value' => 'Cancelar',
                'class' => 'pull-right btn btnCancelCustom',
                'priority' => 30,
            ],
            'clean' => [
                'enable' => false,
                'value' => 'Limpiar',
                'class' => 'pull-right btn btnCancelCustom',
                'priority' => 50,
            ],
        ],
        "crudConfig" => [
            "enable" => true,
            'side' => "left",
            'displayName' => 'Acciones',
            'add' => [
                'enable' => false,
                'class' => '',
                'value' => 'Crear',
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
                'enable' => false,
                'action' => 'href="{{id}}"',
                'class' => ' table-link success',
                'value' => '<span class="fa-stack"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-cog fa-stack-1x fa-inverse"></i></span>',
            ],
        ],
        'export_config' => [
            'export_to_excel' => [
                'btn_class' => 'btn btnCustom fa fa-download',
                'btn_value' => '',
                'btn_tag' => 'button',
            ],
        ],
    )
);
