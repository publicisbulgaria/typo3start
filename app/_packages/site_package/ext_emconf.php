<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Site Package',
    'description' => 'TYPO3 Site Package',
    'category' => 'templates',
    'author' => '',
    'author_email' => '',
    'author_company' => 'DPX',
    'version' => '1.0.1',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.27',
            'fluid_styled_content' => '11.5'
        ],
        'conflicts' => [],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => [
            'PUBBG\\SitePackage\\' => 'Classes',
        ],
    ],

];