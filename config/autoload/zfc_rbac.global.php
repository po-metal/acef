<?php

return [
    'zfc_rbac' => [
        'guest_role' => 'invitado',
        'guards' => [
            'ZfcRbac\Guard\RouteGuard' => [
                'Acef*' => ['admin','usuario','superUsuario'],
                'home' => ['admin','usuario','superUsuario'],
            ]
        ],
    ]
];
