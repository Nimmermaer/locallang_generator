<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'locallang_generator',
    'description' => 'A TYPO3 extension for translating other extensions\' f:translate tags into locallang files.',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mblunck\\LocallangGenerator\\' => 'Classes/',
        ],
    ],
];
