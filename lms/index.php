<?php
$uri = urldecode(

    parse_url($_SERVER['REQUEST_URL'], PHP_URL_PATH)
);

if ($uri  !== '/' && file_exists(__DIR__."/public".$uri)) {
    return false;
}






?>