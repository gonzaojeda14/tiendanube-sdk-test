<?php

require 'vendor/autoload.php';

define('STORE_ID', 3978462);
define('ACCESS_TOKEN', '5b6a82471b016a4e2e6dc7ab06013037237011e4');

$api = new TiendaNube\API(STORE_ID, ACCESS_TOKEN, '9015 (test@tiendanube.com.ar)');
$response = $api->get("products");
var_dump($response->body);