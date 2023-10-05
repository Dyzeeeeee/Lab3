<?php

use App\Filters\AuthGuard;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/test', 'Home::index');
$routes->get('/shop', 'HomepageController::shop');
$routes->get('/category', 'HomepageController::category');
$routes->get('/register', 'UserController::registerIndex');
$routes->match(['get', 'post'], '/store', 'UserController::register');
$routes->match(['get', 'post'], '/loginAuth', 'UserController::loginAuth');
$routes->get('/signin', 'UserController::loginIndex');
$routes->get('/shop/user', 'ProfileController::index',['filter' => 'authGuard']);

