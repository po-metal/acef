<?php

return [
    'zfc_rbac' => [
        'guest_role' => 'invitado',
        'guards' => [
            'ZfcRbac\Guard\RouteGuard' => [
                'Acef*' => ['admin','usuario'],
                'home' => ['admin','usuario'],
            ]
        ],
    ]
];
