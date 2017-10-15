<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'postgres' => [],
        ],
    ],
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOPgSql\Driver::class,
                'params' => [
                    'host' => 'localhost',
                    'port' => '5432',
                    'user' => 'postgres',
                    'password' => 'root',
                    'dbname' => 'brenno',
                ],
            ],
        ],
    ],
];
