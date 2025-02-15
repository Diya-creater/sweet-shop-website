<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] ='login';
$route['404_override'] = 'errors/page_missing';
$route['translate_uri_dashes'] = FALSE;
$route['login'] ='login';
$route['Register'] ='Register';

$route['admin_login'] ='admin/admin_login_controller';
$route['admin_register']='admin/admin_register_controlller';
$route['admin_register_add']='admin/admin_register_controller/insert';
$route['admin_dashboard']='admin/admin_dashboard';
$route['admin_sliders']='admin/admin_sliders';
$route['admin_sliders_add']='admin/admin_sliders/add';
$route['admin_sliders/delete/(:num)']='admin/admin_sliders/delete/$1';
$route['admin_sliders/edit/(:num)']='admin/admin_sliders/edit/$1';
$route['admin_sliders/update']='admin/admin_sliders/update';
$route['admin_categories']='admin/admin_categories_controller';
$route['admin_categories_add']='admin/admin_categories_controller/add';
$route['admin_categories/delete/(:num)']='admin/admin_categories_controller/delete/$1';
$route['admin_categories/edit/(:num)']='admin/admin_categories_controller/edit/$1';
$route['admin_categories/update']='admin/admin_categories_controller/update';
$route['admin_product']='admin/admin_product_controller/index';
$route['admin_products_add']='admin/admin_product_controller/add';
$route['admin_subcategories']='admin/admin_subcategories_controller';
$route['admin_subcategories_add']='admin/admin_subcategories_controller/add';

$route['home_screen']='frontend/frontend_home_screen';
$route['frontend_login']='frontend/frontend_login_controller';
$route['frontend_register']='frontend/frontend_register_controller';
$route['frontend_home_screen']='frontend/frontend_home_screen';
$route['frontend_product1/(:num)']='frontend/frontend_product_controller/index/$1';
// $route['categories/(:num)/subcategories'] = 'subcategory/index/$1';
// $route['categories/(:num)/subcategories/(:num)'] = 'subcategory/view/$1/$2' ;
// $route['categories/(:num)/subcategories/create'] = 'subcategory/create/$1';
$route['cart/add/(:num)'] = 'cart/add/$1'; // Add product to cart
$route['cart/view'] = 'cart/view';          // View the cart
$route['cart/remove/(:num)'] = 'cart/remove/$1'; // Remove product from cart
$route['cart/update_quantity/(:num)/(:num)'] = 'cart/update_quantity/$1/$2'; // Update quantity
