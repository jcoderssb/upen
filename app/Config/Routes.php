<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// landing page
$routes->get('/', 'Home::index');

// Login modul
$routes->get('login', 'Login::index');
$routes->post('logout', 'Login::logout');

// Register modul
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::save');

// user modul
$routes->group("pengguna", ["filter" => "myauth"], function ($routes) {
	$routes->get('', 'User::index');
});

// audit trail modul
$routes->group("audit_trails", ["filter" => "myauth"], function ($routes) {
	$routes->get('', 'AuditTrail::index');
});

// permohonan modul
$routes->group("permohonan", ["filter" => "myauth"], function ($routes) {
	$routes->get('', 'Permohonan::index');
	$routes->post('', 'Permohonan::save');
	$routes->get('daftar', 'Permohonan::create');
	$routes->get('mmk', 'Permohonan::mmk');
	$routes->get('(:any)', 'Permohonan::show/$1');
});




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
