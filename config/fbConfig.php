<?php 
require_once 'vendor/autoload.php';

session_start();

$provider = new \League\OAuth2\Client\Provider\Facebook([
    'clientId'          => '1121542038236765',
    'clientSecret'      => '4f96f3a30cb929e1900b8a41b984355d',
    'redirectUri'       => 'http://localhost:8000/fb-callback.php',
    'graphApiVersion'   => 'v2.10',
]);
