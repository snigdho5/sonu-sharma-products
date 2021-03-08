<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Main/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//main

$route['newsignup'] = 'Main/onSetSignUp';
$route['contact'] = 'Main/onGetContact';
$route['newcontact'] = 'Main/onSetNewContact';
$route['about'] = 'Main/onGetAbout';


//clients
$route['clients/(:num)'] = 'Main/onGetClientPage/$1';

//teacher
$route['findteacher'] = 'Main/onGetTeacher';
$route['searchteacher'] = 'Teachers/onGetMatchedTeacher';
$route['teacherprofile/(:num)'] = 'Teachers/onGetTeacherView/$1';
