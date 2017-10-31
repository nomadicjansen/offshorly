<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1499073537,
    'checksum' => '21372d6fd992f9cb499de1237c3e005e',
    'files' => [
        'user/data/gantry5/themes/rt_gemini/config/news' => [
            'assignments' => [
                'file' => 'user/data/gantry5/themes/rt_gemini/config/news/assignments.yaml',
                'modified' => 1497418970
            ],
            'index' => [
                'file' => 'user/data/gantry5/themes/rt_gemini/config/news/index.yaml',
                'modified' => 1499072562
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/rt_gemini/config/news/layout.yaml',
                'modified' => 1499072562
            ],
            'page/body' => [
                'file' => 'user/data/gantry5/themes/rt_gemini/config/news/page/body.yaml',
                'modified' => 1497933611
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'page' => [
                0 => [
                    'news' => true
                ]
            ]
        ],
        'index' => [
            'name' => 'news',
            'timestamp' => 1499072562,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
                'timestamp' => 1486446206
            ],
            'positions' => [
                
            ],
            'sections' => [
                'sideoverlay' => 'Overlay Sidebar',
                'mainoverlay' => 'Overlay Main',
                'top' => 'Top',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'utility' => 'Utility',
                'feature' => 'Feature',
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'accordionmenu' => [
                    'accordionmenu-4111' => 'Accordion Menu'
                ],
                'custom' => [
                    'custom-1870' => 'Contact',
                    'custom-1946' => 'Info',
                    'custom-1816' => 'Custom HTML'
                ],
                'social' => [
                    'social-3923' => 'Social'
                ],
                'messages' => [
                    'system-messages-6626' => 'System Messages'
                ],
                'menu' => [
                    'menu-6703' => 'Menu'
                ],
                'contentarray' => [
                    'contentarray-7197' => 'Grav Content',
                    'contentarray-4603' => 'Grav Content - Title',
                    'contentarray-8324' => 'Grav Content - News'
                ],
                'feed' => [
                    'feed-1774' => 'Feed Buttons'
                ],
                'branding' => [
                    'branding-1387' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-4621' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'sideoverlay' => 'sideoverlay',
                    'accordionmenu-4111' => 'accordionmenu-7045',
                    'mainoverlay' => 'mainoverlay',
                    'custom-1870' => 'custom-4659',
                    'social-3923' => 'social-3757',
                    'custom-1946' => 'custom-4238',
                    'top' => 'top',
                    'system-messages-6626' => 'system-messages-9828',
                    'navigation' => 'navigation',
                    'menu-6703' => 'menu-2350',
                    'contentarray-7197' => 'contentarray-8551',
                    'copyright' => 'copyright',
                    'branding-1387' => 'branding-9192',
                    'custom-1816' => 'custom-4457',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-4621' => 'mobile-menu-7951'
                ]
            ]
        ],
        'layout' => [
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
        ],
        'page' => [
            'body' => [
                'body_bottom' => '<img class="g-bottom-bg" src="user/images/rt_gemini/Bottom-BG.jpg"/>'
            ]
        ]
    ]
];
