<?php

return [
    'translator' => array(
        'locale' => 'es',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
            array(
                'type' => \Zend\I18n\Translator\Loader\PhpArray::class,
                'base_dir' => Zend\I18n\Translator\Resources::getBasePath(),
                'pattern' => Zend\I18n\Translator\Resources::getPatternForValidator(),
            ),
        ),
    ),
];
