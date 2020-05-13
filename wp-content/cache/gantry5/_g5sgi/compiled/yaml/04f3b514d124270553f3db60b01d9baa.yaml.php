<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_g5sgi/custom/particles/spiro-card.yaml',
    'modified' => 1589335623,
    'data' => [
        'name' => 'Spiro Card',
        'description' => 'Display content below an image or icon.',
        'type' => 'particle',
        'icon' => 'fa-imagepicker',
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
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.text',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'name' => [
                    'type' => 'input.text'
                ],
                'icon' => [
                    'type' => 'input.text',
                    'label' => 'Icon (fa-book)'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select desired image.'
                ],
                'imageposition' => [
                    'type' => 'select.select',
                    'label' => 'Image Position',
                    'description' => 'Should the image appear above or below the content.',
                    'default' => 'Top',
                    'options' => [
                        'left' => 'Top',
                        'right' => 'Bottom'
                    ]
                ],
                'label' => [
                    'type' => 'input.text',
                    'label' => 'Label',
                    'description' => 'Enter the label that appears on top of the title'
                ],
                'copy' => [
                    'type' => 'input.text',
                    'label' => 'Copy',
                    'description' => 'Enter Some copy'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Input the item link.'
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Input the text for the item link.',
                    'default' => '&rarr;'
                ],
                'buttonclass' => [
                    'type' => 'input.text',
                    'label' => 'Button Class',
                    'description' => 'Input the button class.',
                    'default' => ''
                ],
                'buttontarget' => [
                    'type' => 'select.selectize',
                    'label' => 'Button Target',
                    'description' => 'Target browser window when item is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_self',
                    'options' => [
                        '_self' => 'Self',
                        '_blank' => 'New Window'
                    ]
                ]
            ]
        ]
    ]
];
