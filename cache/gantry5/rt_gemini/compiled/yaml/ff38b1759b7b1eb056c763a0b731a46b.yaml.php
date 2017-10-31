<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/projects/xampp/htdocs/offshorly/user/data/gantry5/themes/rt_gemini/config/news/layout.yaml',
    'modified' => 1499072562,
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
            'navigation' => [
                
            ],
            '/slideshow/' => [
                
            ],
            '/header/' => [
                
            ],
            '/utility/' => [
                0 => [
                    0 => 'contentarray-4603'
                ],
                1 => [
                    0 => 'contentarray-8324'
                ],
                2 => [
                    0 => 'feed-1774'
                ]
            ],
            '/feature/' => [
                
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
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
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
                    'class' => 'fp-utility g-news'
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
            'contentarray-4603' => [
                'title' => 'Grav Content - Title',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'news'
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
                ],
                'block' => [
                    'variations' => 'title-center'
                ]
            ],
            'contentarray-8324' => [
                'title' => 'Grav Content - News',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => 'news-item'
                        ],
                        'limit' => [
                            'total' => '99',
                            'columns' => '1',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'publish_date',
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
                                'enabled' => 'show'
                            ],
                            'read_more' => [
                                'enabled' => ''
                            ],
                            'author' => [
                                'enabled' => 'show'
                            ],
                            'category' => [
                                'enabled' => ''
                            ]
                        ]
                    ],
                    'css' => [
                        'class' => 'grav-content-articles'
                    ]
                ]
            ],
            'feed-1774' => [
                'title' => 'Feed Buttons',
                'block' => [
                    'class' => 'feed'
                ]
            ]
        ]
    ]
];
