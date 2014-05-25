<?php

require_once 'config.php';
require_once 'mirror-client.php';
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_MirrorService.php';
require_once 'util.php';

$client = get_google_api_client();

if (!isset($_SESSION['userid']) || get_credentials($_SESSION['userid']) == null) {
    header('Location: ' . $base_url . '/oauth2callback.php');
} else {
    verify_credentials(get_credentials($_SESSION['userid']));
    $client->setAccessToken(get_credentials($_SESSION['userid']));
    header('Location: ' . $user_url.'/loggedin.php');
}
