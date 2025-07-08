<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hilmi', 'page::about');
$routes->get('/ahmad', 'page::biodata');
$routes->get('/contact', 'Pages::contact');
$routes->get('/index', 'Pages::index');
$routes->get('/about', 'Pages::about');
