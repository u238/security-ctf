<?php

function validate_cookie($cookie, $key){
	$hash = hash_hmac('md5', $cookie['username'] . '|' . $cookie['$expiration'], $key);
	if($cookie['hmac'] != $hash) { // loose comparison
        return false;
    } else {
	    return true;
	}
}
$key = getenv('SECRET'); // to simplify: it's only 2 lowercase alpha chars long

if (!validate_cookie($_COOKIE, $key)) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

echo exec("id " . $_GET['username']);