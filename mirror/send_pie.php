<?php
/**
 * Created by IntelliJ IDEA.
 * User: gabriel
 * Date: 2014.05.24.
 * Time: 13:49
 */

require_once 'config.php';
require_once 'mirror-client.php';
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_MirrorService.php';
require_once 'util.php';

$client = get_google_api_client();
$client->setAccessToken(get_credentials($_SESSION['userid']));

// A glass service for interacting with the Mirror API
$mirror_service = new Google_MirrorService($client);

$timeline_item = new Google_TimelineItem();
$timeline_item->setText("Apple Pie !");

$deleteMenuItem = new Google_MenuItem();
$deleteMenuItem->setAction("DELETE");
$timeline_item->setMenuItems(array($deleteMenuItem));

insert_timeline_item($mirror_service, $timeline_item, "image/jpeg", file_get_contents('./static/images/pie.jpg'));

header('Location: ' . $user_url);

