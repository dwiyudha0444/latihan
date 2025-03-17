<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/test-db', 'Home::testDB');

$routes->get('/anggota', 'AnggotaController::index'); // Tampilkan daftar anggota
$routes->get('/anggota/create', 'AnggotaController::create'); // Form tambah anggota
$routes->post('/anggota/store', 'AnggotaController::store'); // Proses tambah anggota
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1'); // Form edit anggota
$routes->post('/anggota/update/(:num)', 'AnggotaController::update/$1'); // Proses update anggota
$routes->get('/anggota/delete/(:num)', 'AnggotaController::delete/$1'); // Hapus anggota
