<?php

return [
    '@PSR12' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'none',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
    'trailing_comma_in_multiline' => true,
    'phpdoc_align' => [
        'align' => 'vertical'
    ],
    'binary_operator_spaces' => [
        'operators' => [
            '=' => 'align_single_space_minimal',
            '=>' => 'align_single_space_minimal'
        ]
    ],
    'operator_linebreak' => [
        'only_booleans' => false,
        'position' => 'beginning'
    ],
    'ordered_imports' => [
        'sort_algorithm' => 'alpha'
    ]
];
