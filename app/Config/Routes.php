<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba/(:any)', 'Coba::about/$1'); //menggunakan placeholder

// // untuk folder Admin yang berada di Controllers
// $routes->get('/users', 'Admin\Users::index');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Pages::index');
// $routes->get('/pages/index', 'Pages::index');
// $routes->get('/pages/contact', 'Pages::contact');
// $routes->get('/pages/(:any)', 'Pages::about/$1'); //menggunakan placeholder

// route Mahasiswa Controller
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/(:segment)', 'Mahasiswa::detail/$1');
$routes->get('/tambah_mahasiswa', 'TambahMahasiswa::index');
$routes->post('/tambah_mahasiswa/save', 'TambahMahasiswa::save');

// route orangtua_lk Controller
$routes->get('/orangtua_lk', 'OrangTuaLk::index');
$routes->get('/orangtua_lk/(:segment)', 'OrangTuaLk::detail/$1');
$routes->get('/tambah_orangtua_lk', 'TambahOrangTuaLk::index');
$routes->post('/tambah_orangtua_lk/save', 'TambahOrangTuaLk::save');

// route orangtua_pr Controller
$routes->get('/orangtua_pr', 'OrangTuaPr::index');
$routes->get('/orangtua_pr/(:segment)', 'OrangTuaPr::detail/$1');
$routes->get('/tambah_orangtua_pr', 'TambahOrangTuaPr::index');
$routes->post('/tambah_orangtua_pr/save', 'TambahOrangTuaPr::save');

// route asal_sekolah Controller
$routes->get('/asal_sekolah', 'AsalSekolah::index');
$routes->get('/asal_sekolah/(:segment)', 'AsalSekolah::detail/$1');
$routes->get('/tambah_asal_sekolah', 'TambahAsalSekolah::index');
$routes->post('/tambah_asal_sekolah/save', 'TambahAsalSekolah::save');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
