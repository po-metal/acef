<?php

return [
    'validators' => [
        'factories' => [
            'CuitValidator' =>
            function ($container) {
                $uniqueObject = new \DoctrineModule\Validator\UniqueObject(array(
                    'use_context' => true,
                    'fields' => ['cuit'],
                    'object_repository' => $container->get('doctrine.entitymanager.orm_default')->getRepository('Acef\Entity\Cliente'),
                    'object_manager' => $container->get('doctrine.entitymanager.orm_default'),
                    'messages' => [
                        'objectNotUnique' => 'El CUIT ingresado ya existe en otro registro.'
                    ]
                ));
                return $uniqueObject;
            },
            'RazonSocialValidator' =>
            function ($container) {
                $uniqueObject = new \DoctrineModule\Validator\UniqueObject(array(
                    'use_context' => true,
                    'fields' => ['razonSocial'],
                    'object_repository' => $container->get('doctrine.entitymanager.orm_default')->getRepository('Acef\Entity\Cliente'),
                    'object_manager' => $container->get('doctrine.entitymanager.orm_default'),
                    'messages' => [
                        'objectNotUnique' => 'La Razon Social ingresada ya existe en otro registro.'
                    ]
                ));
                return $uniqueObject;
            },
            'TipoProductoValidator' =>
            function ($container) {
                $uniqueObject = new \DoctrineModule\Validator\UniqueObject(array(
                    'use_context' => true,
                    'fields' => ['nombre'],
                    'object_repository' => $container->get('doctrine.entitymanager.orm_default')->getRepository('Acef\Entity\TipoProducto'),
                    'object_manager' => $container->get('doctrine.entitymanager.orm_default'),
                    'messages' => [
                        'objectNotUnique' => 'El producto ingresado ya existe en otro registro.'
                    ]
                ));
                return $uniqueObject;
            },
            'EstadoValidator' =>
            function ($container) {
                $uniqueObject = new \DoctrineModule\Validator\UniqueObject(array(
                    'use_context' => true,
                    'fields' => ['nombre'],
                    'object_repository' => $container->get('doctrine.entitymanager.orm_default')->getRepository('Acef\Entity\Estado'),
                    'object_manager' => $container->get('doctrine.entitymanager.orm_default'),
                    'messages' => [
                        'objectNotUnique' => 'El estado ingresado ya existe en otro registro.'
                    ]
                ));
                return $uniqueObject;
            },
        ]
    ],
];


