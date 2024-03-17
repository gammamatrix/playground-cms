<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_CMS_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_CMS_LOAD_MIGRATIONS', false),
    ],
];
