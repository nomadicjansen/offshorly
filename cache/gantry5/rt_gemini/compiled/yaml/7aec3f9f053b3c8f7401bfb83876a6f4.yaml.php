<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/blueprints/styles/navigation.yaml',
    'modified' => 1497418976,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation styles for the Gemini theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(255, 255, 255, 0.0)'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://backgrounds/navigation/img-01.jpg'
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
