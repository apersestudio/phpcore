<?php

return [
    "master"=>[
        'driver' => 'postgres',
        'host' => getenv('DB_HOST'),
        'port' => getenv('DB_PORT'),
        'schema' => getenv('DB_SCHEMA'),
        'database' => getenv('DB_DATABASE'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'sslmode' => 'verify-full',
        'sslrootcert' => '/ssl/ca/rootca.crt',
        'sslcert' => '/ssl/certs/'.getenv('DB_USERNAME').'.crt',
        'sslkey' => '/ssl/private/'.getenv('DB_USERNAME').'.key',
    ]
];