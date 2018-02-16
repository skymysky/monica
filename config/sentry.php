<?php

return [
    'dsn' => env('SENTRY_DSN'),

    // capture release as git sha
    'release' => trim(exec('test -d '.__DIR__.'/../.git && git log --pretty="%h" -n1 HEAD')),

    // Capture bindings on SQL queries
    'breadcrumbs.sql_bindings' => true,
];
