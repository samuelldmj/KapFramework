<?php

use Dotenv\Dotenv;

require_once dirname(__DIR__).'/vendor/autoload.php';

//load up dotenv files
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once "config/Config.php";
require_once "helpers/Helpers.php";