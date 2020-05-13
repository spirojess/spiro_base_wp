<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_HYsgi/custom/config/home/layout.yaml',
    'modified' => 1589380538,
    'data' => [
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
                    'boxed' => '0',
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
                    'icon' => '',
                    'image' => 'gantry-media://2020/05/herschel.jpg',
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
    ]
];
