<?php

return array(
    'controller_plugins' => array(
        'factories' => array(
            \Application\Controller\Plugin\Options::class => \Application\Factory\Controller\Plugin\OptionsFactory::class,
        ),
        'aliases' => array(
            'applicationOptions' => \Application\Controller\Plugin\Options::class,
        ),
    ),
);