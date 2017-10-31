<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/data/gantry5/themes/rt_gemini/config/default/page/head.yaml',
    'modified' => 1499321772,
    'data' => [
        'meta' => [
            
        ],
        'head_bottom' => '',
        'atoms' => [
            0 => [
                'id' => 'assets-3272',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => 'gantry-assets://css/animate.css',
                            'inline' => '',
                            'extra' => [
                                
                            ],
                            'name' => 'Animate CSS'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => '',
                            'inline' => '  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-92790076-1\', \'auto\');
  ga(\'send\', \'pageview\');',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'Universal Analytics'
                        ]
                    ]
                ]
            ],
            1 => [
                'id' => 'analytics-2370',
                'type' => 'analytics',
                'title' => 'Google Analytics',
                'attributes' => [
                    'enabled' => '1',
                    'ua' => [
                        'code' => 'UA-92790076-1',
                        'anonym' => '0',
                        'ssl' => '0',
                        'debug' => '0'
                    ]
                ]
            ]
        ]
    ]
];
