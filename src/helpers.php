<?php

namespace OliversTravels;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function phpCsFixerStyles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require(__DIR__ . '/php-cs-fixer/rules.php'), $rules);

    return (new Config)
        ->setFinder($finder)
        ->setRules($rules)
        ->setRiskyAllowed(true)
        ->setUsingCache(true);
}
