<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/particles/overlaytoggle.yaml',
    'modified' => 1497418982,
    'data' => [
        'name' => 'Overlay Toggle',
        'description' => 'Displays Overlay Toggle',
        'type' => 'particle',
        'icon' => 'fa-clone',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'menutext' => [
                    'type' => 'input.text',
                    'label' => 'Menu Text',
                    'description' => 'Customize the Menu Text.',
                    'placeholder' => 'Menu'
                ]
            ]
        ]
    ]
];
