<?php

/*
 * This file is part of Grandpere's project.
 * (c) Lorenzo Marozzo <lorenzo.marozzo@gmail.com>
 */

$header = <<<'EOF'
This file is part of Grandpere's project.
(c) Lorenzo Marozzo <lorenzo.marozzo@gmail.com>
EOF;

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        __DIR__.'/bin',
        __DIR__.'/config',
        __DIR__.'/fixtures',
    ])
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'header_comment' => ['header' => $header],
    ])
    ->setFinder($finder)
;

return $config;
