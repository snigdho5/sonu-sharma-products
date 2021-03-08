<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Auth/index';
$route['404_override'] = 'Auth/get404';
$route['translate_uri_dashes'] = FALSE;


//login
$route['login'] = 'Auth/onSetLogin';
$route['chk_login'] = 'Auth/onCheckLogin';
$route['logout'] = 'Auth/onSetLogout';
$route['dashboard'] = 'Auth/onGetDashboard';

//user management
$route['users'] = 'Users/index';
$route['duplicate_check_un'] = 'Users/onCheckDuplicateUser';
$route['adduser'] = 'Users/onCreateUserView';
$route['createuser'] = 'Users/onCreateUser';
$route['profile'] = 'Users/onGetUserProfile/';
$route['profile/(:num)'] = 'Users/onGetUserProfile/$1';
$route['changeprofile'] = 'Users/onChangeUserProfile';
$route['deluser'] = 'Users/onDeleteUser';


//contact us
$route['contactus'] = 'Main/onGetContactUs';
$route['deletecont'] = 'Main/onDeleteContUs';
$route['editdealer/(:num)'] = 'Main/onGetContactUsView/$1';
$route['savecont'] = 'Main/onSetContUsEdit';


//Website Visits
$route['visits'] = 'Stats/index';
$route['deleteconnections'] = 'Stats/onDeleteConnections';

//Category
$route['categories'] = 'Category/index';
$route['addcategory'] = 'Category/onCreateCategoryView';
$route['duplicate_check_category'] = 'Category/onCheckDuplicateCategory';
$route['createcategory'] = 'Category/onCreateCategory';
$route['editcategory/(:num)'] = 'Category/onCreateCategoryView/$1';
$route['deletecategory'] = 'Category/onDeleteCategory';

//Products
$route['products'] = 'Product/index';
$route['addproduct'] = 'Product/onCreateProductView';
$route['duplicate_check_product'] = 'Product/onCheckDuplicateProduct';
$route['createproduct'] = 'Product/onCreateProduct';
$route['editproduct/(:num)'] = 'Product/onCreateProductView/$1';
$route['deleteproduct'] = 'Product/onDeleteProduct';
