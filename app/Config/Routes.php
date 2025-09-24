<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/Acceuil', 'Home::index', ['as' => 'Acceuil']);
$routes->get('/A-propos', 'Apropos::apropos', ['as' => 'Apropos']);
$routes->get('/Blog', 'Blog::blog', ['as' => 'Blog']);
$routes->get('/Parcours', 'Parcours::parcours', ['as' => 'Parcours']);



