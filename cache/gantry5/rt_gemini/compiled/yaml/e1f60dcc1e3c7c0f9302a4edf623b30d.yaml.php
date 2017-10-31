<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/data/gantry5/themes/rt_gemini/config/portfolio/layout.yaml',
    'modified' => 1498636288,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1486446206
        ],
        'layout' => [
            '/container-overlay/' => [
                0 => [
                    0 => [
                        'sideoverlay 40' => [
                            
                        ]
                    ],
                    1 => [
                        'mainoverlay 60' => [
                            
                        ]
                    ]
                ]
            ],
            'top' => [
                
            ],
            '/navigation/' => [
                
            ],
            '/slideshow/' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'contentarray-4553'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'contentarray-3595'
                ]
            ],
            '/feature/' => [
                
            ],
            '/expanded/' => [
                0 => [
                    0 => 'contentarray-6237'
                ],
                1 => [
                    0 => 'contentarray-6524'
                ]
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                
            ],
            '/footer/' => [
                0 => [
                    0 => 'contentarray-2185'
                ],
                1 => [
                    0 => 'system-content-8939'
                ]
            ],
            'copyright' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'sideoverlay' => [
                'type' => 'section',
                'subtype' => 'aside',
                'title' => 'Overlay Sidebar',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'mainoverlay' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Overlay Main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'container-overlay' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'top' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-navigation nopaddingbottom'
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-slideshow'
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'g-portfolio'
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => 'fp-utility g-portfolio'
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-expanded-homeparticles g-portfolio'
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'g-portfolio'
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-bottom'
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
            'contentarray-4553' => [
                'title' => 'Grav Content - Header',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'portfolio-header'
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
                            'image' => [
                                'enabled' => 'full'
                            ],
                            'text' => [
                                'type' => 'full',
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
                    ],
                    'css' => [
                        'class' => 'portfolio-header'
                    ]
                ]
            ],
            'contentarray-3595' => [
                'title' => 'Grav Content - Featured Projects',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'portfolio-projects-featured'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '1',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'title',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'full'
                            ],
                            'text' => [
                                'type' => 'full',
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
                    ],
                    'css' => [
                        'class' => 'portfolio-projects-featured'
                    ]
                ]
            ],
            'contentarray-6237' => [
                'title' => 'Grav Content - Header',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'portfolio-header-2'
                        ],
                        'limit' => [
                            'total' => '1',
                            'columns' => '1',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'default',
                            'ordering' => 'desc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'full'
                            ],
                            'text' => [
                                'type' => 'full',
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
                    ],
                    'css' => [
                        'class' => 'portfolio-header-2'
                    ]
                ]
            ],
            'contentarray-6524' => [
                'title' => 'Grav Content - Projects',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'portfolio-projects'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '2',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'title',
                            'ordering' => 'asc'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'full'
                            ],
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
                    ],
                    'css' => [
                        'class' => 'portfolio-projects'
                    ]
                ]
            ],
            'contentarray-2185' => [
                'title' => 'Grav Content',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'portfolio-header-form'
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
                            'image' => [
                                'enabled' => 'full'
                            ],
                            'text' => [
                                'type' => 'full',
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
                ]
            ]
        ]
    ]
];
