<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::submitForm');
$routes->get('/hallo', 'HelloWorld::halodunia');
$routes->get('/layout', 'layoutController::index');
$routes->get('/', 'Pages::profile');
$routes->get('/skills', 'Pages::skills');
$routes->get('/profile-tugas', 'ProfilController::indexx');
$routes->get('/experience-tugas', 'ExperienceController::indexx');