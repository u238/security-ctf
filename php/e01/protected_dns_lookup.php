<?php

if (empty($_POST['hash_hmac']) || empty($_POST['domainname'])) {
	header('HTTP/1.0 400 Bad Request');
	exit;
}

$secret = getenv("SECRET");

if (isset($_POST['nonce']))
	$secret = hash_hmac('sha256', $_POST['nonce'], $secret);

$hmac = hash_hmac('sha256', $_POST['domainname'], $secret);

if ($hmac !== $_POST['hash_hmac']) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

echo exec("host ".$_POST['domainname']);

?>

