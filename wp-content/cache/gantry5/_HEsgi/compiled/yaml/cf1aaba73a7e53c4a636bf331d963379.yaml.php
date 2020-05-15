<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_HEsgi/custom/config/home/layout.yaml',
    'modified' => 1589517710,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1588258328
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                
            ],
            'intro' => [
                
            ],
            '/features/' => [
                0 => [
                    0 => 'spiro-card-4220 33.3',
                    1 => 'spiro-card-8148 33.3',
                    2 => 'spiro-card-2274 33.3'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'custom-onpic-8746'
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
            '/testimonials/' => [
                0 => [
                    0 => 'spiro_picblock-3555 25',
                    1 => 'spiro_picblock-1252 25',
                    2 => 'spiro_picblock-6659 25',
                    3 => 'spiro_picblock-7264 25'
                ]
            ],
            '/expanded/' => [
                0 => [
                    0 => 'spiro-card-9089 33.3',
                    1 => 'custom-onpic-4462 33.3',
                    2 => 'spiro_picblock-3861 33.3'
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
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
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'intro' => [
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
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => 'nomarginall nopaddingall'
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
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
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
            'spiro-card-4220' => [
                'title' => 'Spiro Card',
                'attributes' => [
                    'css' => [
                        'class' => 'box shadow'
                    ],
                    'title' => 'Spin Baby, Spin',
                    'icon' => 'fa fa-bank fa-spin fa-lg',
                    'height' => '44px',
                    'link' => '/home',
                    'linktext' => ''
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'spiro-card-8148' => [
                'title' => 'Spiro Card',
                'attributes' => [
                    'css' => [
                        'class' => ''
                    ],
                    'title' => 'Title',
                    'icon' => '',
                    'image' => 'gantry-media://2020/05/acmelogo.svg',
                    'height' => '44px',
                    'copy' => 'Copy Goes Here. This is great.',
                    'link' => '/home',
                    'linktext' => 'Link'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'spiro-card-2274' => [
                'title' => 'Spiro Card',
                'attributes' => [
                    'title' => 'Another Title',
                    'icon' => '',
                    'image' => 'gantry-media://testimonials/face.jpg',
                    'height' => '22px'
                ]
            ],
            'custom-onpic-8746' => [
                'title' => 'Custom HTML on Picture',
                'attributes' => [
                    'image' => 'gantry-media://2020/05/sandwich.jpg',
                    'html' => '<h2>Heading TWO</h2>
<p>This is a Paragraph - we can do anything with this that we want.</p>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'spiro_picblock-3555' => [
                'title' => 'Spiro Picture Block',
                'attributes' => [
                    'title' => 'Title!!',
                    'image' => 'gantry-media://2020/05/sandwich.jpg',
                    'link' => '',
                    'linktext' => ''
                ],
                'block' => [
                    'variations' => 'equal-height'
                ]
            ],
            'spiro_picblock-1252' => [
                'title' => 'Spiro Picture Block',
                'block' => [
                    'variations' => 'equal-height'
                ]
            ],
            'spiro_picblock-6659' => [
                'title' => 'Spiro Picture Block',
                'block' => [
                    'variations' => 'equal-height'
                ]
            ],
            'spiro_picblock-7264' => [
                'title' => 'Spiro Picture Block',
                'attributes' => [
                    'title' => 'Title!!e',
                    'image' => 'gantry-media://2020/05/sandwich.jpg',
                    'copy' => 'Copy Copy Copy Too'
                ],
                'block' => [
                    'variations' => 'equal-height center'
                ]
            ],
            'spiro-card-9089' => [
                'title' => 'Spiro Card',
                'block' => [
                    'variations' => 'equal-height'
                ]
            ],
            'custom-onpic-4462' => [
                'title' => 'Custom HTML on Picture',
                'attributes' => [
                    'html' => ''
                ],
                'block' => [
                    'variations' => 'equal-height'
                ]
            ],
            'spiro_picblock-3861' => [
                'title' => 'Spiro Picture Block',
                'attributes' => [
                    'title' => 'Heading/Title'
                ],
                'block' => [
                    'variations' => 'equal-height'
                ]
            ]
        ]
    ]
];
