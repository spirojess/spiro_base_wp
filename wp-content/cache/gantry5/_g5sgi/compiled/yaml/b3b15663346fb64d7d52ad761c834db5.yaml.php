<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/blueprints/menu/menu.yaml',
    'modified' => 1589335619,
    'data' => [
        'name' => 'Menu',
        'description' => 'Gantry menu.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'settings.title' => [
                    'type' => 'input.text',
                    'label' => 'Title'
                ],
                'settings.base' => [
                    'type' => 'input.text',
                    'label' => 'Base Path',
                    'default' => '/'
                ]
            ]
        ]
    ]
];
