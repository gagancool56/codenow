<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['software-product/(:any)'] = 'HomeController/product/$1';
$route['software-programming/(:any)'] = 'HomeController/softwareprogramming/$1';
$route['products/(:any)'] = 'HomeController/products/$1';
$route['products/purchase/custom-payment'] = 'HomeController/product_purchase';
$route['products/purchase/make-payment'] = 'HomeController/product_purchase_link';
$route['blog/(:any)'] = 'HomeController/blog/$1';
$route['(:any)'] = 'HomeController/pages/$1';
