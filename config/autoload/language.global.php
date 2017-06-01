<?php

return [
	'service_manager' => array(
		'aliases' => array(
			'translator' => 'MvcTranslator',
			),
		'factories' => array(
			'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
			),
		),
	'translator' => array(
		'locale' => 'es_AR',
		'translation_file_patterns' => array(
			array(
				'type' => 'gettext',
				'base_dir' => __DIR__ . '/../../data/language',
				'pattern' => '%s.mo',
				),
			array(
				'type' => 'phpArray',
				'base_dir' => __DIR__ . '/../../vendor/zendframework/zend-i18n-resources/languages/es',
				'pattern' => '%s.php',
				),
			),
		),
];