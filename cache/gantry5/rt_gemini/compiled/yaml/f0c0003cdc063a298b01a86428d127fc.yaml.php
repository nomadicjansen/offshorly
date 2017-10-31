<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/blueprints/styles/overlay.yaml',
    'modified' => 1497418976,
    'data' => [
        'name' => 'Overlay Styles',
        'description' => 'Overlay styles for the Isotope theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(2, 3, 30, 0.9)'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'opacity' => [
                    'type' => 'input.text',
                    'label' => 'Overlay Opacity',
                    'default' => '0.9'
                ]
            ]
        ]
    ]
];
