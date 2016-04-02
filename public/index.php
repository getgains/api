<?php

// Define some base paths.
define('ROOT_DIR', realpath(__DIR__ . '/../'));
define('CONFIG_DIR', ROOT_DIR . '/config');
define('PUBLIC_DIR', ROOT_DIR . '/public');

// Grab the autoloader.
require ROOT_DIR . '/vendor/autoload.php';

// Build the container instance.
$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->addDefinitions(CONFIG_DIR);
$container = $containerBuilder->build();


