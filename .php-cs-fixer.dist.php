<?php

$header = <<<'EOF'
This file is part of AmeliePortfolio.
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

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'header_comment' => ['header' => $header],
    ])
    ->setFinder($finder)
;