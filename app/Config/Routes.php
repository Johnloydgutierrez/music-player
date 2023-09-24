<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MusicController::index');
$routes->get('/music', 'MusicController::viewAll');
$routes->get('/music/modal', 'MusicController::modal');
$routes->post('/music/upload', 'MusicController::upload');
$routes->get('/music/remove/(:num)', 'MusicController::remove/$1');
$routes->post('/playlist/create', 'PlaylistController::create');
$routes->post('/music/search', 'MusicController::search');


