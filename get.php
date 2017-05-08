<?php

// fix for mac
date_default_timezone_set('UTC');

include_once (dirname(__FILE__) . '/config.php');
include_once (dirname(__FILE__) . '/vendor/autoload.php');

//$username = filter_input(INPUT_GET, 'username');
//$password = filter_input(INPUT_GET, 'password');
//$accessLicenseNumber = filter_input(INPUT_GET, 'licenseNumber');
//$data = explode('|', urldecode(filter_input(INPUT_GET, 'data')));

$username = username;
$password = password;
$accessLicenseNumber = licenseNumber;
//$data = explode('|', addressValues);
//$data = explode('|', pickupFreightValues);
//$data = explode('|', cancelPickupFreightValues);
//$data = explode('|', pickupCancelValues);
//$data = explode('|', rateValues);
//$data = explode('|', shippingValues);
//$data = explode('|', acceptShipValues);
//$data = explode('|', labelValues);
//$data = explode('|', voidValues);
//$data = explode('|', shipFreightValues);
//$data = explode('|', timeInTransitValues);
//$data = explode('|', trackingValues);
//$data = explode('|', signatureTrackingValues);
//$data = explode('|', uploadValues);
//$data = explode('|', deleteValues);
//$data = explode('|', pushValues);
//$data = explode('|', deniedPartyValues);
//$data = explode('|', exportLicenseValues);
//$data = explode('|', importComplianceValues);
//$data = explode('|', landedCostValues);
//$data = explode('|', quantumViewValues);
$data = explode('|', locatorValues);

$trace = array('trace' => 1, 'soap_version' => 'SOAP_1_1');

$upsSecurity = array(
    'UsernameToken' => array(
        'Username' => username,
        'Password' => password),
    'ServiceAccessToken' => licenseNumber);

$header = new SoapHeader('http://www.ups.com/XMLSchema/XOLTWS/UPSS/v1.0', 'UPSSecurity', $upsSecurity);