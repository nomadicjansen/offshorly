<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/blueprints/styles/slideshow.yaml',
    'modified' => 1497418976,
    'data' => [
        'name' => 'Slideshow Styles',
        'description' => 'Slideshow styles for the Gemini theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
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
