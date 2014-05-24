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
$timeline_item->setText("Apple Pie");

$pie_picture = new Google_Attachment();
$pie_picture->setContentType("image/jpeg");
$pie_picture->setContentUrl($base_url . "/static/images/pie.jpg");
$timeline_item->setAttachments(array($pie_picture));

insert_timeline_item($mirror_service, $timeline_item, null, null);

header('Location: ' . $user_url);

