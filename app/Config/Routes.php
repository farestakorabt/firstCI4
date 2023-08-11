<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(true);
 

// example.com/shop/product/

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->add('product/(:any)/(:any)', 'Shop::product/$1/$2');

// admin routes 

// Group of routes under the 'admin' namespace
$routes->group('admin', function ($routes) {
    // Route to display user index
    $routes->add('user', 'Admin\Users::index');

    // Route to get all users
    $routes->add('users', 'Admin\Users::getAllUsers');

    // Route to display a specific product using two route parameters
    $routes->add('product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');
    
    // Blog routes
    // Route to display the blog index
    $routes->add('blog', 'Admin\Blog::index');
    
    // Route to display a form for creating a new blog post
    $routes->get('blog/new', 'Admin\Blog::createNew');
    
    // Route to handle the submission of a new blog post
    $routes->post('blog/new', 'Admin\Blog::saveBlog'); 
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
