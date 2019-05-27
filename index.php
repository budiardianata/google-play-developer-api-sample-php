<?php
require_once __DIR__ . '/vendor/autoload.php';
/* -- setup -- */
$authFilePath = __DIR__ . '/vendor/key.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS={$authFilePath}");

/* -- parameter -- */
$packageName = 'com.oneapps.colorart.coloringpage';
$subscriptionId = 'com.oneapps.colorart.coloringpage.yearlysubs';
$token = 'alfieooiaodioilgjapladem.AO-J1OzkcBu3Kuh5TyVq4e1NodGCTltTlfY11BLwTI1GtRKZO0crjSc04hu_HAeYD-yCb3VtZE_enINWiuwWVxBMB8JIAopjdc4H-gCfUKmUm_n16s8h8zef6_v0e1KGLyHFwyaCTSTqTHl8J_evknM_nWDTZBDMQCRASf2N9Pdxh923LyJY4Is';


/* -- launch -- */
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes([Google_Service_AndroidPublisher::ANDROIDPUBLISHER]);

$service = new Google_Service_AndroidPublisher($client);
$result = $service->purchases_subscriptions->get($packageName, $subscriptionId, $token);
var_dump($result);

?>
