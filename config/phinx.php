<?php

$dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../' );
$dotenv->load();

return
    [
        'paths' => [
            'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        ],
        'environments' =>
        [
            'default_database' => '*** CHOOSE AN ENVIRONMENT ***',
            'default_migration_table' => 'phinxlog',
            'development'      =>
            [
                'adapter' => $_ENV['DB_CONNECTION'],
                'host' => $_ENV['DB_HOST'],
                'name' => $_ENV['DB_DATABASE'],
                'user' => $_ENV['DB_USERNAME'],
                'password' => $_ENV['DB_PASSWORD'],
                'port' => $_ENV['DB_PORT'],
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ],
            'testing' =>
            [
                'adapter' => $_ENV['TEST_DB_CONNECTION'],
                'host' => $_ENV['TEST_DB_HOST'],
                'name' => $_ENV['TEST_DB_DATABASE'],
                'user' => $_ENV['TEST_DB_USERNAME'],
                'password' => $_ENV['TEST_DB_PASSWORD'],
                'port' => $_ENV['TEST_DB_PORT'],
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ],
            'production' =>
            [
                'adapter' => $_ENV['DB_PRODUCTION_CONNECTION'],
                'host' => $_ENV['DB_PRODUCTION_HOST'],
                'name' => $_ENV['DB_PRODUCTION_DATABASE'],
                'user' => $_ENV['DB_PRODUCTION_USERNAME'],
                'password' => $_ENV['DB_PRODUCTION_PASSWORD'],
                'port' => $_ENV['DB_PRODUCTION_PORT'],
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ],
        ],
    ];
