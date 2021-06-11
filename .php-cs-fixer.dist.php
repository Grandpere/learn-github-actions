<?php

$header = <<<'EOF'
This file is part of Grandpere's project.
(c) Lorenzo Marozzo <lorenzo.marozzo@gmail.com>
For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
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