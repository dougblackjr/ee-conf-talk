<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$config['site_license_key'] = '';
$config['app_version'] = '6.3.4';

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }
}

// Config local path
$configLocalPath = SYSPATH . 'user/config/config.local.php';

if (file_exists($configLocalPath)) {
    require $configLocalPath;
}

// EOF
