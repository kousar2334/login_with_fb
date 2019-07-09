<?php
session_start();
require_once('Facebook/autoload.php');
$app_id="app_ig";//get app id fromdevelopers.facebook.com creating a new app
$app_screet="app_screet";//get app id fromdevelopers.facebook.com creating a new app
$permissions = ['email']; // Optional permissions
$callbackurl='http://localhost/fb_login/callback.php';
$fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_screet,
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();


$loginUrl = $helper->getLoginUrl($callbackurl, $permissions);

?>