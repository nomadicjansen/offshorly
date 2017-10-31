<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/themes/rt_gemini/blueprints/styles/header.yaml',
    'modified' => 1497418977,
    'data' => [
        'name' => 'Header Styles',
        'description' => 'Header styles for the Gemini theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f8f8f8'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#7f7f7f'
                ]
            ]
        ]
    ]
];
