<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/g5_helium/custom/config/left_sidebar/layout.yaml',
    'modified' => 1588258336,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1468340932
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'custom-6833'
                ]
            ],
            '/intro/' => [
                
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'custom-6361'
                            ],
                            1 => [
                                0 => 'custom-9374'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 75' => [
                            0 => [
                                0 => 'custom-5490'
                            ]
                        ]
                    ]
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
                        1 => 'children'
                    ]
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
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
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ]
        ],
        'content' => [
            'custom-6833' => [
                'title' => 'Header',
                'attributes' => [
                    'html' => '<h2 class="large-heading">Left Sidebar Example</h2>
<p>Cuaqum ante augue, iaculis eget fringilla vel, gravida non nibh. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu, eu fermentum elit metus vel mauris.</p>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-6361' => [
                'title' => 'Left Sidebar',
                'attributes' => [
                    'html' => '<h3>Left Sidebar</h3>
<p class="nomarginbottom"> A left column layout example. The sidebar is independent from the Mainbody so can have multiple rows and columns, separate from the Mainbody area.</p>'
                ],
                'block' => [
                    'variations' => 'box1'
                ]
            ],
            'custom-9374' => [
                'title' => 'Flexible Layouts',
                'attributes' => [
                    'html' => '<h3>Flexible Layouts</h3>
<p>Gantry 5 benefits from a flexible and intuitive, drag &amp; drop layout manager. You can add as many rows and blocks to each section as you desire, and configure their distance to intervals of 1%.</p>'
                ],
                'block' => [
                    'variations' => 'box2'
                ]
            ],
            'custom-5490' => [
                'title' => 'Content',
                'attributes' => [
                    'html' => '<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. Nam id turpis sit amet neque cursus luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque id tortor. In vitae sapien. Nunc quis tellus. </p>

<h3 style="display: inline-block;">H3 Heading</h3>
<p>In erat. Pellentesque erat. <strong>Mauris vehicula vestibulum justo.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pulvinar est. Integer urna. Pellentesque pulvinar dui a magna. Nulla facilisi.</p>

<h4>H4 Heading</h4>
<p>Mauris lobortis. Aliquam lacinia purus. <strong>Pellentesque magna</strong>. Mauris euismod metus nec tortor. Phasellus elementum, quam a euismod imperdiet, ligula felis faucibus enim, eu malesuada nunc felis sed turpis. <a href="#">Morbi convallis luctus tortor</a>. Integer bibendum lacinia velit. Suspendisse mi lorem, porttitor ut, interdum et, lobortis a, lectus. Phasellus vitae est at massa luctus iaculis. In tincidunt.</p>'
                ]
            ]
        ]
    ]
];
