<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/programas', 'Home::programas');
$routes->get('/admission', 'Home::admission');
$routes->post('/admission/submit', 'Home::admissionSubmit');
$routes->get('/contacto', 'Home::contacto');
$routes->post('/contacto/send', 'Home::contactoSend');

// Catch-all for 404
$routes->set404Override();