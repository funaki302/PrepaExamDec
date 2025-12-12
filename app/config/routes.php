<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function (Router $router) use ($app) {

	$router->get('/', function () use ($app) {
		$controller = new ApiExampleController($app);
		$produits = $controller->getAllProduits();

		$app->render('welcome', ['produits' => $produits]);
	});

	$router->get('/produit/@id', function ($id) use ($app) {
		$controller = new ApiExampleController($app);
		$produits = $controller->getOneProduits($id);

		$app->render('produit', ['produits' => $produits]);
	});

	$router->get('/hello-world/@name', function ($name) {
		echo '<h1>Hello world! Oh hey ' . $name . '!</h1>';
	});

	$router->get('/funaki/@name', function ($name) {
		echo '<h1>Tiako ano ' . $name . '!</h1>';
	});

	$router->group('/api', function () use ($router) {
		$router->get('/produits', [ApiExampleController::class, 'getAllProduits']);
		$router->get('/users/@id:[0-9]', [ApiExampleController::class, 'getUser']);
		$router->post('/users/@id:[0-9]', [ApiExampleController::class, 'updateUser']);
	});

}, [SecurityHeadersMiddleware::class]);