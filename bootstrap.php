<?php

use DI\ContainerBuilder;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

define('ROOT_DIR', realpath(__DIR__ . '/..'));
define('CONFIG_DIR', ROOT_DIR . '/config');
define('PUBLIC_DIR', ROOT_DIR . '/public');

require ROOT_DIR . '/vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(CONFIG_DIR);
$container = $containerBuilder->build();

$router = new Rou