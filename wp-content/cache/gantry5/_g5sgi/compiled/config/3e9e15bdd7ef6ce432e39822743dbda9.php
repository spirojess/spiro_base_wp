<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1589342490,
    'checksum' => '9612f54b05b224cc7ea91a63f2d34938',
    'files' => [
        'wp-content/themes/_g5sgi/custom/config/home' => [
            'assignments' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/home/assignments.yaml',
                'modified' => 1589342472
            ],
            'index' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/home/index.yaml',
                'modified' => 1589342424
            ],
            'layout' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/home/layout.yaml',
                'modified' => 1589342424
            ],
            'styles' => [
                'file' => 'wp-content/themes/_g5sgi/custom/config/home/styles.yaml',
                'modified' => 1589341931
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true,
                    'is_home' => true
                ]
            ],
            'menu' => [
                
            ],
            'language' => [
                
            ],
            'post' => [
                
            ],
            'taxonomy' => [
                
            ],
            'archive' => [
                
            ]
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1589342424,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1589312938
            ],
            'positions' => [
                'header' => 'Header',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'above' => 'Above',
                'below' => 'Below',
                'testimonials' => 'Testimonials',
                'utility' => 'Utility',
                'aside' => 'Aside',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-2831' => 'Logo'
                ],
                'position' => [
                    'position-position-5773' => 'Header',
                    'position-position-8934' => 'Footer'
                ],
                'menu' => [
                    'menu-8402' => 'Menu'
                ],
                'owlcarousel_spiro' => [
                    'owlcarousel_spiro-3404' => 'Owl Carousel - Spiro'
                ],
                'spiro-card' => [
                    'spiro-card-1889' => 'Spiro Card',
                    'spiro-card-6563' => 'Spiro Card',
                    'spiro-card-9101' => 'Spiro Card'
                ],
                'content' => [
                    'system-content-6480' => 'Page Content'
                ],
                'testimonial_owlcarousel' => [
                    'testimonial_owlcarousel-5019' => 'Testimonials (owlcarousel)'
                ],
                'copyright' => [
                    'copyright-3482' => 'Copyright'
                ],
                'spacer' => [
                    'spacer-8579' => 'Spacer'
                ],
                'branding' => [
                    'branding-2781' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-3873' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'logo-2831' => 'logo-6197',
                    'position-position-5773' => 'position-header',
                    'navigation' => 'navigation',
                    'menu-8402' => 'menu-9135',
                    'above' => 'above',
                    'aside' => 'aside',
                    'mainbar' => 'mainbar',
                    'system-content-6480' => 'system-content-1587',
                    'sidebar' => 'sidebar',
                    'below' => 'below',
                    'utility' => 'utility',
                    'footer' => 'footer',
                    'position-position-8934' => 'position-footer',
                    'copyright-3482' => 'copyright-2062',
                    'spacer-8579' => 'spacer-2692',
                    'branding-2781' => 'branding-9862',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-3873' => 'mobile-menu-5741'
                ]
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
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                '/intro/' => [
                    0 => [
                        0 => 'owlcarousel_spiro-3404'
                    ]
                ],
                '/features/' => [
                    0 => [
                        0 => 'spiro-card-1889 33.3',
                        1 => 'spiro-card-6563 33.3',
                        2 => 'spiro-card-9101 33.3'
                    ]
                ],
                'above' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'aside 25' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 50' => [
                                
                            ]
                        ],
                        2 => [
                            'sidebar 25' => [
                                
                            ]
                        ]
                    ]
                ],
                'below' => [
                    
                ],
                '/testimonials/' => [
                    0 => [
                        0 => 'testimonial_owlcarousel-5019'
                    ]
                ],
                'utility' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'aside' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'below' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'owlcarousel_spiro-3404' => [
                    'title' => 'Owl Carousel - Spiro'
                ],
                'spiro-card-1889' => [
                    'title' => 'Spiro Card',
                    'attributes' => [
                        'css' => [
                            'class' => ''
                        ],
                        'title' => 'First Thing',
                        'icon' => 'star',
                        'label' => '1st label',
                        'copy' => 'This is the first thing'
                    ]
                ],
                'spiro-card-6563' => [
                    'title' => 'Spiro Card',
                    'attributes' => [
                        'title' => 'Second Thing',
                        'icon' => 'atom',
                        'label' => '2nd Label',
                        'copy' => 'This is the second thing - copy'
                    ]
                ],
                'spiro-card-9101' => [
                    'title' => 'Spiro Card'
                ],
                'testimonial_owlcarousel-5019' => [
                    'title' => 'Testimonials (owlcarousel)',
                    'attributes' => [
                        'title' => 'What Folks be Sayin\'',
                        'nav' => 'enable',
                        'dots' => 'enable',
                        'items' => [
                            0 => [
                                'class' => '',
                                'image' => '',
                                'client' => 'Margerite Sedona',
                                'namecredit' => 'First-Time client',
                                'quote' => 'This place is rockin\'\'',
                                'link' => '',
                                'linktext' => '',
                                'buttonclass' => 'button-outline',
                                'namebelow' => '0',
                                'disable' => '0',
                                'name' => 'Betty Barker'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ]
            ]
        ],
        'styles' => [
            'preset' => 'preset2',
            'testimonials' => [
                'background' => '#d894f7',
                'background-image' => 'gantry-media://2020/05/hdr-pkg.jpg'
            ]
        ]
    ]
];
