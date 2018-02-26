<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extending Frontend User Registration',
    'description' => '',
    'category' => 'module',
    'author' => 'Sebastian Fischer',
    'author_email' => 'typo3@evoweb.de',
    'state' => 'beta',
    'modify_tables' => 'fe_users',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'extender' => '6.0.0',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
