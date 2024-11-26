<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get ('/serch', 'home ::serch');
$routes->get ('/cart', 'home ::cart');
$routes->get ('/checkout', 'home ::checkout');
$routes->post ('/submit', 'home ::submit');
