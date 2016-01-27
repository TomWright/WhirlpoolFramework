<?php

// Define the paths
$basePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
define('BASE_PATH', $basePath);

$publicPath = BASE_PATH . 'public' . DIRECTORY_SEPARATOR;
define('PUBLIC_PATH', $publicPath);

$appPath = BASE_PATH . 'App' . DIRECTORY_SEPARATOR;
define('APP_PATH', $appPath);

$dataPath = APP_PATH . 'data' . DIRECTORY_SEPARATOR;
define('APP_DATA', $dataPath);

// Include the autoloader
require_once BASE_PATH . 'vendor/autoload.php';

$whirlpool = new \Whirlpool\Whirlpool();

$whirlpool->run();