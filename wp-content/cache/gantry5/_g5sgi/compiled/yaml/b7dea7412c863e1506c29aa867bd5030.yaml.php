<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_g5sgi/custom/particles/testimonial_owlcarousel.yaml',
    'modified' => 1589335623,
    'data' => [
        'name' => 'Testimonials (owlcarousel)',
        'description' => 'Display Testimonial in an Owl Carousel.',
        'type' => 'particle',
        'icon' => 'fa-sliders',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'nav' => [
                    'type' => 'select.select',
                    'label' => 'Prev / Next',
                    'description' => 'Enable or disable the Prev / Next navigation.',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'dots' => [
                    'type' => 'select.select',
                    'label' => 'Dots',
                    'description' => 'Enable or disable the Dots navigation.',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Enable or disable the Autoplay.',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'autoplaySpeed' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Speed',
                    'description' => 'Set the speed of the Autoplay, in milliseconds.',
                    'placeholder' => 5000
                ],
                'imageOverlay' => [
                    'type' => 'select.select',
                    'label' => 'Image Overlay',
                    'description' => 'Enable or disable the image overlay.',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'itemsVisible' => [
                    'type' => 'input.text',
                    'label' => 'How many items visible',
                    'description' => 'how many testimonials to show at 1 time',
                    'placeholder' => 1
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Owl Carousel Items',
                    'description' => 'Create each Owl Carousel item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'CSS class names for the individual item.'
                        ],
                        '.name' => [
                            'type' => 'input.text'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.client' => [
                            'type' => 'input.text',
                            'label' => 'Client',
                            'description' => 'Enter the Name'
                        ],
                        '.namecredit' => [
                            'type' => 'input.text',
                            'label' => 'Client\'s position or subheading',
                            'description' => 'Enter subheading'
                        ],
                        '.quote' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Quote',
                            'description' => 'Customize the description',
                            'placeholder' => 'Enter short description'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.'
                        ],
                        '.buttonclass' => [
                            'type' => 'input.text',
                            'label' => 'Button Class',
                            'description' => 'Input the button class.',
                            'default' => 'button-outline'
                        ],
                        '.namebelow' => [
                            'type' => 'input.checkbox',
                            'label' => 'Name Below',
                            'description' => 'Disables the item on the front end.',
                            'default' => false
                        ],
                        '.disable' => [
                            'type' => 'input.checkbox',
                            'label' => 'Disable',
                            'description' => 'Disables the item on the front end.',
                            'default' => false
                        ]
                    ]
                ]
            ]
        ]
    ]
];
