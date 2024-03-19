<?php

require 'vendor/autoload.php';

define('CLIENT_ID', 9015);
define('CLIENT_SECRET', 'f35ff93afa824669a58266435fcd2fe35fa081cd460d7da7');

$code = 'e327ee742df280323a63fb6ffc4953253e50c4b4';

$auth = new TiendaNube\Auth(CLIENT_ID, CLIENT_SECRET);
$store_info = $auth->request_access_token($code);

var_dump($store_info);