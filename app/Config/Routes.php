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

$routes->get('/login', 'Auth::login');
$routes->post('/validar', 'Auth::validar');
$routes->get('/logout', 'Auth::logout');

$routes->get('/estudiante', 'Auth::index');
$routes->get('/profesor', 'Profesor::index');
$routes->post('/guardar-nota', 'Profesor::guardarNota');

// DEBUG - Eliminar en producción
$routes->get('/debug', 'Debug::index');

// TEST - Eliminar en producción
$routes->get('/test/login', 'Test::login_test');
$routes->post('/test/validar-test', 'Test::validar_test');

// Catch-all for 404
$routes->set404Override();