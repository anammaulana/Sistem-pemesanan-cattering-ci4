<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('blank', 'Home::index', ['filter' => 'auth']);

$routes->post('auth/register', 'Auth::register');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/register', 'Auth::register');
// File: app/Config/Routes.php

// File: app/Config/Routes.php

// $routes->get('domains', 'DomainController::index');
// $routes->get('domains/create', 'DomainController::create');
// $routes->post('domains/store', 'DomainController::store');
// $routes->get('domains/edit/(:num)', 'DomainController::edit/$1');
// $routes->post('domains/update', 'DomainController::update');
// $routes->get('domains/delete/(:num)', 'DomainController::delete/$1');
