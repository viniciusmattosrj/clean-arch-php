<?php

$dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../' );
$dotenv->load();

return [
    'db' => [
        'host'      => $_ENV['DB_HOST'],
        'username'  => $_ENV['DB_USERNAME'],
        'password'  => $_ENV['DB_PASSWORD'],
        'dbname'    => $_ENV['DB_DATABASE'],
        'port'      => $_ENV['DB_PORT'],
        'charset'   => $_ENV['DB_CHARSET']
    ],
];
