<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dani');
$routes->get('/dani','Home::dani');
$routes->post('/register','App\Controllers\Home\register');