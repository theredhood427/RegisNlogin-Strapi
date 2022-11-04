<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = ________?
$password = ________?

$result = $client->login(__________________________);

var_dump($result->getStatusCode());
var_dump($result->getReasonPhrase());
var_dump($result->getProtocolVersion());
var_dump($result->getBody()->getContents());