<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/data/gantry5/themes/rt_gemini/config/home/layout.yaml',
    'modified' => 1498636288,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1486475006
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
                    0 => 'contentarray-5105'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'contentarray-8214'
                ],
                1 => [
                    0 => 'contentarray-4544'
                ],
                2 => [
                    0 => 'contentarray-6922'
                ]
            ],
            '/feature/' => [
                
            ],
            '/expanded/' => [
                0 => [
                    0 => 'contentarray-9907'
                ],
                1 => [
                    0 => 'contentarray-9536'
                ],
                2 => [
                    0 => 'contentarray-1176'
                ],
                3 => [
                    0 => 'contentarray-8411'
                ],
                4 => [
                    0 => 'contentarray-1452'
                ],
                5 => [
                    0 => 'contentarray-2698'
                ]
            ],
            '/extension/' => [
                0 => [
                    0 => 'contentarray-9989'
                ],
                1 => [
                    0 => 'contentarray-6949'
                ],
                2 => [
                    0 => 'contentarray-5583'
                ]
            ],
            '/bottom/' => [
                0 => [
                    0 => 'contentarray-7813'
                ],
                1 => [
                    0 => 'contentarray-6018'
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'contentarray-1262'
                ],
                1 => [
                    0 => 'system-content-2911'
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
                    'class' => 'nopaddingbottom fp-navigation'
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
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-utility'
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
                    'class' => 'fp-expanded-homeparticles'
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
            'contentarray-5105' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-header'
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
                            'category' => [
                                'enabled' => ''
                            ]
                        ]
                    ]
                ]
            ],
            'contentarray-8214' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-extension'
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
            ],
            'contentarray-4544' => [
                'title' => 'Grav Content - Posts',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-extension-posts'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '2',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'date',
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
                    ]
                ]
            ],
            'contentarray-6922' => [
                'title' => 'Grav Content - Read More',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-extension-read-more-link'
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
            ],
            'contentarray-9907' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-utility'
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
            ],
            'contentarray-9536' => [
                'title' => 'Grav Content - 1',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-process-1'
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
                                'enabled' => ''
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
                                'enabled' => '',
                                'route' => 'portfolio-projects'
                            ]
                        ]
                    ]
                ]
            ],
            'contentarray-1176' => [
                'title' => 'Grav Content - 2',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-process-2'
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
                                'enabled' => ''
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
            ],
            'contentarray-8411' => [
                'title' => 'Grav Content - 3',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-process-3'
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
                                'enabled' => ''
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
            ],
            'contentarray-1452' => [
                'title' => 'Grav Content - 4',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-process-4'
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
                                'enabled' => ''
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
            ],
            'contentarray-2698' => [
                'title' => 'Grav Content - Read More',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-extension-read-more-link'
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
            ],
            'contentarray-9989' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-expanded'
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
            ],
            'contentarray-6949' => [
                'title' => 'Grav Content - Agencies',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-expanded-clients'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '3',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'slug',
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
            ],
            'contentarray-5583' => [
                'title' => 'Grav Content - Read More',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-expanded-read-more-link'
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
            ],
            'contentarray-7813' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-bottom'
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
            ],
            'contentarray-6018' => [
                'title' => 'Grav Content - Team',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-bottom-team'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '1',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'slug',
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
            ],
            'contentarray-1262' => [
                'title' => 'Grav Content - Form',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'home-g-bottom-form'
                        ],
                        'limit' => [
                            'total' => '99',
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
