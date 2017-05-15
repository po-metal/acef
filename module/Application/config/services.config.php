<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'Application.options' => \Application\Factory\Options\ModuleOptionsFactory::class,
        ),
    ),
);