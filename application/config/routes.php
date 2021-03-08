<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Main/index';
$route['404_override'] = 'Main/get404';
$route['translate_uri_dashes'] = FALSE;


//main
$route['products'] = 'Main/indexProducts';
$route['products/(:any)/(:any)'] = 'Main/indexProducts/$1/$2';
$route['getproductbycat'] = 'Main/onGetProductsByCat';
$route['productsearch'] = 'Main/onSearchProducts';

$route['contact_save'] = 'Main/onSetNewContact';