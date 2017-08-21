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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['applicant']['GET'] = 'ApplicantController';
$route['applicant/create_applicant']['POST']= 'ApplicantController/create_applicant';
$route['applicant/new']['GET'] = 'ApplicantController/new';
$route['applicant/edit_view/(:num)']['GET'] = 'ApplicantController/edit_view/$1';
$route['applicant/edit']['POST'] = 'ApplicantController/edit';
$route['applicant/(:num)']['GET'] = 'ApplicantController/view/$1';
$route['home']   ="ApplicantController/home";
$route['applicant/insert_role']['POST'] = 'ApplicantController/insert_role';
$route['applicant/add'] = 'applicantcontroller/add_applicant';
$route['addEmployee'] ='ApplicantController/view_add_employee';
$route['applicant/add_employee']['POST'] = 'ApplicantController/add_employee';
$route['add_result']['POST'] = 'ApplicantController/add_result';
//Login
$route['auth/login']  = "login/auth";
$route['auth/logout'] = "login/logout";

$route['default_controller'] = "login";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
