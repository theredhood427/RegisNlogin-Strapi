<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$username = ________?
$email = ________?
$password = ________?

$result = $client->register(__________________________);

var_dump($result->getStatusCode());
var_dump($result->getReasonPhrase());
var_dump($result->getProtocolVersion());
var_dump($result->getBody()->getContents());