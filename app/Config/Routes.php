<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('schedule', 'Home::schedule');
$routes->get('contact', 'Home::contact');
