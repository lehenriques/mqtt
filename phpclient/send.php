<?php

require('phpMQTT.php');

$name = preg_replace('/\s+/', ' ', trim(readline('Digite seu nome: ')));

$server = '127.0.0.1';
$port = 1883;
$username = '';
$password = '';
$client_id = $name;

$mqtt = new phpMQTT($server, $port, $client_id);
if(!$mqtt->connect(true, NULL, $username, $password)){
	exit(1);
}

while (1) {
		$msg = preg_replace('/\s+/', ' ', trim(readline($name.': ')));
		$mqtt->publish('phpMQTT/phpclient', $name . ': ' . $msg, 0, false);
}
$mqtt->close();