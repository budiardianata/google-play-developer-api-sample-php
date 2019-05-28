<?php
require_once __DIR__ . '/vendor/autoload.php';
/* -- setup -- */
$authFilePath = __DIR__ . '/vendor/key.json'; //lokasi key
putenv("GOOGLE_APPLICATION_CREDENTIALS={$authFilePath}");

/* -- parameter -- */
$packageName = 'com.oneapps.colorart.coloringpage';
$subscriptionId = 'com.oneapps.colorart.coloringpage.yearlysubs';
//SAMPLE EXPIRED TOKEN
$token = 'alfieooiaodioilgjapladem.AO-J1OzkcBu3Kuh5TyVq4e1NodGCTltTlfY11BLwTI1GtRKZO0crjSc04hu_HAeYD-yCb3VtZE_enINWiuwWVxBMB8JIAopjdc4H-gCfUKmUm_n16s8h8zef6_v0e1KGLyHFwyaCTSTqTHl8J_evknM_nWDTZBDMQCRASf2N9Pdxh923LyJY4Is';
//SAMPLE VALID TOKEN
// $token = 'ikgllgggfnplabjlkmeopbgb.AO-J1OyGxvdtA64auZFX5u-QUaHyz35gKjD0Bdi-iLC5od3jCKcD-GOPFlvXkqDkHaoxVugaxulteXYR0yHA6Ve9mbr_jK9552ch3MJmlxvbYK1oQfSzHu2cMiijF8WCcuhtfTRij7VfXjq3Gnr8Xi1ncUeUM9ZIm121k3uGu4j_s2eNdSoACsI';

/* -- launch -- */
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes([Google_Service_AndroidPublisher::ANDROIDPUBLISHER]);

$service = new Google_Service_AndroidPublisher($client);
$result = $service->purchases_subscriptions->get($packageName, $subscriptionId, $token);
var_dump($result);

?>
