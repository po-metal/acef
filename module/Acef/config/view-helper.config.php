<?php

return array(
    'view_helpers' => array(
    	'factories' => array(
            \Acef\Helper\View\AlertasPorRetencion::class => \Acef\Factory\Helper\View\AlertasPorRetencionFactory::class,
        ),
        'aliases' => [
        	'alertasPorRetencion' => \Acef\Helper\View\AlertasPorRetencion::class,
        ],
        'invokables' => array(
            'diasDeDiferencia' => \Acef\Helper\View\DiasDeDiferencia::class,
        ),
    ),
);