<?php

session_start();
require __DIR__ .'/vendor/autoload.php';
require __DIR__ .'/system/config/database.php';

$app = new \Slim\App($config);

$container = $app->getContainer();

$container['view'] = function($container){
	$view = new \Slim\Views\Twig(__DIR__.'/resources/views', [
		'cache' => false,
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

	return $view;
};

$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container->get('db'));
$capsule->bootEloquent();

require __DIR__.'/system/config/dependencies.php';
require __DIR__ .'/system/config/routes.php';

$app->run();