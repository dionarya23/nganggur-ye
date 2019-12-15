<?php
require_once 'vendor/autoload.php';

session_start();
$fb = new Facebook\Facebook([
  'app_id' => '1298319950187401', // Replace {app-id} with your app id
  'app_secret' => '4e0816fbb8c2142803c9afa2bb38bdbd',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost:8000/fb-callback.php', $permissions);