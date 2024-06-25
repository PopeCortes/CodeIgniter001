<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Redireccion a la carpeta de Productos a la funcion index
$routes->get('/productos', 'Productos::index');

// Permite mandar digitos numericos
// $routes->get('/productos/(:num)', 'Productos::show/$1');

// Permite mandar solo numeros pero solo dos, por las llaves le pones cuantos parametros o numeros son en total
// $routes->get('/productos/([0-9]{2})', 'Productos::show/$1');
$routes->get('/productos/(:num)', 'Productos::show/$1');
$routes->get('/productos/transaccion', 'Productos::transaccion');

// Permite mandar solo letras y depues números
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$1/$2');

// Para poner los parametros a la vista
$routes->view('productoslist/(:alpha)', 'listas_productos');

$routes->group('admin', static function ($routes){
    $routes->get('/productos', 'Admin\Productos::index');

});

