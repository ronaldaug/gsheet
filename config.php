<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'callback' => 'http://localhost:8000/callback.php',
    'keys'     => [
                    'id' => $_ENV['GOOGLE_CLIENT_ID'],
                    'secret' => $_ENV['GOOGLE_CLIENT_SECRET']
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];

$adapter = new Hybridauth\Provider\Google( $config );
