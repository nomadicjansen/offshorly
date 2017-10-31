<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/themes/rt_gemini/custom/particles/inject_page.yaml',
    'modified' => 1497418976,
    'data' => [
        'name' => 'Inject Page',
        'description' => 'Displays a Grav page.',
        'type' => 'particle',
        'icon' => 'fa-file-text-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the Page particle.',
                    'default' => true
                ],
                'page' => [
                    'type' => 'input.text',
                    'size' => 'medium',
                    'label' => 'Page to Display',
                    'default' => '',
                    'help' => 'Enter the page (including entire route) to display.',
                    'description' => 'Enter the page (including entire route) to display.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
