<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1589318750,
    'checksum' => '38aa951fc1a880211354ade6d82d6779',
    'files' => [
        'wp-content/themes/_g5sgi/custom/config/_body_only' => [
            'index' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/_body_only/index.yaml',
                'modified' => 1589313937
            ],
            'layout' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/_body_only/layout.yaml',
                'modified' => 1589313937
            ]
        ],
        'wp-content/themes/_g5sgi/custom/config/default' => [
            'index' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/default/index.yaml',
                'modified' => 1589317311
            ],
            'layout' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/default/layout.yaml',
                'modified' => 1589317311
            ],
            'styles' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/default/styles.yaml',
                'modified' => 1589318748
            ]
        ],
        'wp-content/themes/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'wp-content/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1589312938
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'post' => [
                    'filter' => [
                        'sticky' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'show'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'comments' => [
                            'enabled' => 'show'
                        ],
                        'text' => [
                            'type' => 'content',
                            'limit' => '',
                            'formatting' => 'text'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'date',
                        'ordering' => 'DESC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'loginform' => [
                'enabled' => true,
                'title' => 'Login',
                'greeting' => 'Hi, %s'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'widget' => [
                'enabled' => true
            ]
        ],
        'content' => [
            'archive' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 1
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'blog' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 0
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'general' => [
                'wpautop' => [
                    'enabled' => 1
                ]
            ],
            'page' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 0,
                    'link' => 1
                ],
                'meta-date' => [
                    'enabled' => 0,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'single' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#b8dfff',
                'color-2' => '#e3d98d'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#7a7a7a',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => '0'
            ],
            'navigation' => [
                'background' => '#5c5c5c',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#3d3d3d',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => '_body_only',
            'timestamp' => 1589313937,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1589312938
            ],
            'positions' => [
                'header' => 'Header',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-2712' => 'Logo'
                ],
                'position' => [
                    'position-header' => 'Header',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'menu' => [
                    'menu-8464' => 'Menu'
                ],
                'messages' => [
                    'system-messages-8550' => 'System Messages'
                ],
                'content' => [
                    'system-content-9878' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-1142' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-7810' => 'Spacer'
                ],
                'branding' => [
                    'branding-6342' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-6699' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1589312938
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-2712 30',
                        1 => 'position-header 70'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'menu-8464'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-breadcrumbs'
                    ],
                    1 => [
                        0 => 'system-messages-8550'
                    ],
                    2 => [
                        0 => 'system-content-9878'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-1142 40',
                        1 => 'spacer-7810 30',
                        2 => 'branding-6342 30'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-6699'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'key' => 'header'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ]
    ]
];
