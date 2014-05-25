<?php
session_start();
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
$timeline_item->setText($_GET['name']); //ez


$openItem = new Google_MenuItem();
$openItem->setAction("OPEN_URI");
$openItem->setPayload("org.glasshack.pie://open/".$_GET['id']); //utolso

$openValues = new Google_MenuValue();
$openValues->setDisplayName("Open");
$openValues->setState("DEFAULT");

$openItem->setValues(array($openValues));

$deleteMenuItem = new Google_MenuItem();
$deleteMenuItem->setAction("DELETE");

$timeline_item->setMenuItems(array($openItem, $deleteMenuItem));

insert_timeline_item($mirror_service, $timeline_item, "image/jpeg", file_get_contents($_GET['url'])); //kep

header('Location: ' . $user_url . '/item.php?id='.$_GET['id']);

