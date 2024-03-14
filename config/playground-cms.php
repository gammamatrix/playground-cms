<?php

declare(strict_types=1);

return [
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_CMS_LOAD_MIGRATIONS', false),
    ],
];
