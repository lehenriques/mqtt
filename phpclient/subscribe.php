<?php

require('phpMQTT.php');

$server = '127.0.0.1';
$port = 1883;
$username = '';
$password = '';
$client_id = 'phpMQTT-msg';

$mqtt = new phpMQTT($server, $port, $client_id);
if (!$mqtt->connect(true, NULL, $username, $password)) {
	exit(1);
}

$mqtt->debug = false;

$topics['phpMQTT/phpclient'] = array('qos' => 0, 'function' => 'procMsg');
$mqtt->subscribe($topics, 0);

while ($mqtt->proc()) {
}

$mqtt->close();

function procMsg($topic, $msg)
{
	echo "$msg\n";
}
