<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//GET
//POST

$routes->get('/', 'Home::index');
$routes->get('/login', 'School::index');
$routes->post('/aksi_login', 'School::aksi_login');
$routes->post('/aksi_registration', 'School::aksi_registration');
$routes->get('/konten/(:any)', 'Home::$1');
