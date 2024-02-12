<?php
Kirby::plugin('architecturelandinitiative/blocks', [
    'blueprints' => [
        'blocks/medialink' => __DIR__ . '/blueprints/blocks/medialink.yml',
      ],
      'snippets' => [
        'blocks/medialink' => __DIR__ . '/snippets/blocks/medialink.php',
      ],
]);