<?php

class Example1
{
    private $cache_file;

    function __construct($cache_file)
    {
        if (preg_match('/^[a-z]+$/', $cache_file)) {
            throw new \http\Exception\InvalidArgumentException();
        }
        $this->cache_file = $cache_file;
    }

    function __destruct()
    {
        $file = "/var/cache/apache2/mod_cache_disk/{$this->cache_file}";
        if (file_exists($file)) @unlink($file);
    }
}

// some PHP code...

$user_data = unserialize($_GET['data']);

