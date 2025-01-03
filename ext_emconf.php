<?php

$EM_CONF['ew_sfregister_extended'] = [
    'title' => 'Extending Frontend User Registration',
    'description' => '',
    'category' => 'module',
    'author' => 'Sebastian Fischer',
    'author_email' => 'typo3@evoweb.de',
    'state' => 'beta',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'extender' => '11.0.0',
            'sf_register' => '13.0.0',
        ],
    ],
];
