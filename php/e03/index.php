<?php

function validate_param($username){
    if (preg_match('/[ ;&`]/',$username)) {
        return false;
    }
    return true;
}

if (!isset($_GET['username']) || !validate_param($_GET['username'])) {
    header('HTTP/1.0 400 Error');
    exit;
}

echo shell_exec("bash -c 'id " . $_GET['username'] . " 2>&1'");
