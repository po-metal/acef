<?php

namespace Application;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface {

    const VERSION = '3.0.2dev';

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(\Zend\Mvc\MvcEvent $e) {
        /* @var $translator \Zend\Mvc\I18n\Translator */
        $translator = $e->getApplication()->getServiceManager()->get(\Zend\Mvc\I18n\Translator::class);
        \Zend\Validator\AbstractValidator::setDefaultTranslator($translator);
    }

}
