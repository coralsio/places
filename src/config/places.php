<?php

return [
    'models' => [
        'import' => [
            'presenter' => \Corals\Modules\Places\Transformers\ImportPresenter::class,
            'resource_url' => 'places/imports',
        ],
    ],
    'settings' => [
        'google' => [
            'api_key' => [
                'type' => 'text',
                'label' => 'Places::labels.settings.api_key',
                'required' => true,
                'validation' => '',
                'value' => null,
                'attributes' => [
                    'help_text' => ''
                ]
            ]
        ]
    ]

];
