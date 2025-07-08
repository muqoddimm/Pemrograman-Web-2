<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hilmi', 'page::about');
$routes->get('/ahmad', 'page::biodata');
