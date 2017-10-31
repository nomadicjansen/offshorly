<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/data/gantry5/themes/rt_gemini/config/_error/layout.yaml',
    'modified' => 1498636288,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => '_error',
            'timestamp' => 1486475006
        ],
        'layout' => [
            '/top/' => [
                0 => [
                    0 => 'system-messages-9828'
                ]
            ],
            '/navigation/' => [
                0 => [
                    0 => 'menu-2027 60',
                    1 => 'contentarray-4128 40'
                ]
            ],
            '/header/' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-7561'
                ]
            ],
            '/above/' => [
                
            ],
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                
            ],
            'copyright' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3'
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'aside' => [
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'menu-2027' => [
                'inherit' => [
                    'outline' => 'default',
                    'particle' => 'menu-2350',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ]
                ]
            ],
            'contentarray-4128' => [
                'title' => 'Grav Content',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-navigation-contacts'
                        ],
                        'limit' => [
                            'total' => '1',
                            'columns' => '1',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'text' => [
                                'formatting' => 'html'
                            ],
                            'title' => [
                                'enabled' => ''
                            ],
                            'date' => [
                                'enabled' => ''
                            ],
                            'read_more' => [
                                'enabled' => ''
                            ],
                            'author' => [
                                'enabled' => ''
                            ],
                            'category' => [
                                'enabled' => ''
                            ]
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'simplecontent-7561' => [
                'title' => 'We are sorry!',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Error 404',
                            'author' => '',
                            'leading_content' => 'Woops. Looks like this page doesn\'t exist.',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'We are sorry!'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
