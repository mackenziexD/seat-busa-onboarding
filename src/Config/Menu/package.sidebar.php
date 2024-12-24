<?php

return [
    '0busa-onboarding' => [
        'permission' => 'global.superuser',
        'name' => 'Onboarding',
        'icon' => 'fas fa-exchange-alt',
        'route_segment' => 'onboarding',
        'route' => 'seat-busa-onboarding::index',
    ],
    'settings' => [
        'permission' => 'global.superuser',
        'entries' => [
            [
                'name' => 'edit onboarding',
                'label' => 'Edit Onboarding',
                'icon' => 'fas fa-shield-alt',
                'route' => 'seat-busa-onboarding::edit',
            ],
        ],
    ],
];