<?php


function env($name){
    return getenv($name);
}



define('APPROOT', dirname(dirname(__FILE__)));

// Define Site URL e.g http://localhost/kapframework
define('SITEURL', env("APP_URL"));

// Define Site name
define('SITENAME', env("APP_NAME"));






?>