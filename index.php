<?php

/**
 * A PHP MVC skeleton using Slim Framework
 *
 * @package php-mvc-slim
 * @author J.Ching
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load application config (error reporting etc.)
require 'application/config/config.php';

// load external stuff
require 'vendor/autoload.php';

// load internal stuff
require 'application/libs/controller.php';
require 'application/libs/Twig.php';
require 'application/libs/TwigExtension.php';

// load application class
$app = new \Slim\Slim(array(
    'debug' 			=> true,
	'mode'				=> 'development',
	'templates.path' 	=> 'application/views/'
));

// allow case-insensitive urls
$app->hook('slim.before.router', function () use ($app) {
    $app->environment['PATH_INFO'] = strtolower($app->environment['PATH_INFO']);
});

// Prepare Twig view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'cache' => 'data/cache',
    'auto_reload' => true,
    'strict_variables' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Define controller resource
$app->container->singleton('controller', function () {
    return new Controller();
});

// Automatically load router files
$routers = glob('application/routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}

// start the Slim application
$app->run();

Kint::dump($_SESSION);