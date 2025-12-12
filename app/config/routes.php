<?php

use app\controllers\ProductController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

$router->group('', function(Router $router) use ($app) {
    $router->get('/', function() use ($app) {
        $controller = new ProductController($app);
        $controller->home();
    });
    $router->group('/product', function() use ($router, $app) {
        $router->get('/show-@id', function($id) use ($app) {
            $controller = new ProductController($app);
            $controller->product($id);
        });
        $router->post('/insert', function() use ($app) {
            $controller = new ProductController($app);
            $controller->insert();
        });
        $router->post('/update', function() use ($app) {
            $controller = new ProductController($app);
            $controller->update();
        });
        $router->get('/delete-@id', function($id) use ($app) {
            $controller = new ProductController($app);
            $controller->delete($id);
        });
    });
	$router->get('/insert', function() use ($app) {
		$app->render('insert' , ['csp_nonce' => Flight::get('csp_nonce')]);
	});
	$router->get('/update-@id', function($id) use ($app) {
		$controller = new ProductController($app);
		$app->render('update' , ['product' => $controller->getProduit($id) , 'csp_nonce' => Flight::get('csp_nonce')]);
	});

}, [ SecurityHeadersMiddleware::class ]);
