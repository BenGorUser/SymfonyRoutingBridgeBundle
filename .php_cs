<?php

/*
 * This file is part of the BenGorUser package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$header = <<<'EOF'
This file is part of the BenGorUser package.

(c) Beñat Espiña <benatespina@gmail.com>
(c) Gorka Laucirica <gorka.lauzirika@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
    )
    ->setRules([
        '@Symfony'                              => true,
        '@Symfony:risky'                        => true,
        'binary_operator_spaces'                => [
            'align_double_arrow' => true,
        ],
        'concat_space'                          => ['spacing' => 'one'],
        'header_comment'                        => [
            'header'      => $header,
            'commentType' => PhpCsFixer\Fixer\Comment\HeaderCommentFixer::HEADER_COMMENT,
        ],
        'no_unreachable_default_argument_value' => false,
        'ordered_imports'                       => true,
        'phpdoc_order'                          => true,
        'phpdoc_annotation_without_dot'         => false,
        'strict_param'                          => true,
    ]);
