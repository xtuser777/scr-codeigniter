<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/index', 'Home::index');
$routes->get('/parameterization/index', 'Parameterization::index');
$routes->post('/parameterization/create', 'Parameterization::create');
