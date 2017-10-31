<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/offshorly/user/config/system.yaml',
    'modified' => 1499073304,
    'data' => [
        'absolute_urls' => false,
        'param_sep' => ':',
        'wrapped_site' => false,
        'reverse_proxy_setup' => false,
        'force_ssl' => false,
        'username_regex' => '^[a-z0-9_-]{3,16}$',
        'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
        'languages' => [
            'include_default_lang' => true,
            'translations' => true,
            'translations_fallback' => true,
            'session_store_active' => false,
            'http_accept_language' => false,
            'override_locale' => false
        ],
        'home' => [
            'alias' => '/home',
            'hide_in_urls' => false
        ],
        'pages' => [
            'theme' => 'rt_gemini',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'short' => 'jS M Y',
                'long' => 'F jS \\a\\t g:ia'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'twig_first' => false,
            'never_cache_twig' => false,
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => false,
                'auto_line_breaks' => false,
                'auto_url_links' => false,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ]
            ],
            'types' => [
                0 => 'txt',
                1 => 'xml',
                2 => 'html',
                3 => 'htm',
                4 => 'json',
                5 => 'rss',
                6 => 'atom'
            ],
            'expires' => 604800,
            'last_modified' => false,
            'etag' => false,
            'vary_accept_encoding' => false,
            'redirect_default_route' => false,
            'redirect_default_code' => '301',
            'redirect_trailing_slash' => true,
            'ignore_files' => [
                0 => '.DS_Store'
            ],
            'ignore_folders' => [
                0 => '.git',
                1 => '.idea'
            ],
            'ignore_hidden' => true,
            'url_taxonomy_filters' => true,
            'frontmatter' => [
                'process_twig' => false,
                'ignore_fields' => [
                    0 => 'form',
                    1 => 'forms'
                ]
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'cli_compatibility' => true,
            'lifetime' => 1209600,
            'gzip' => true,
            'allow_webserver_gzip' => true
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true,
            'umask_fix' => false
        ],
        'assets' => [
            'css_pipeline' => true,
            'css_pipeline_include_externals' => false,
            'css_pipeline_before_excludes' => true,
            'css_minify' => true,
            'css_minify_windows' => true,
            'css_rewrite' => true,
            'js_pipeline' => true,
            'js_pipeline_include_externals' => true,
            'js_pipeline_before_excludes' => true,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
            ]
        ],
        'errors' => [
            'display' => '1',
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'shutdown' => [
                'close_connection' => true
            ],
            'twig' => true
        ],
        'images' => [
            'default_image_quality' => 1,
            'cache_all' => false,
            'cache_perms' => '0775',
            'debug' => false,
            'auto_fix_orientation' => false
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'upload_limit' => 0,
            'auto_metadata_exif' => false
        ],
        'session' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-site',
            'secure' => false,
            'httponly' => true,
            'split' => true
        ],
        'gpm' => [
            'releases' => 'stable',
            'method' => 'auto',
            'verify_peer' => true,
            'official_gpm_only' => true
        ]
    ]
];