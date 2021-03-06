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
//Applicant
$route['applicant']['GET'] = 'Applicant';
$route['applicant'] = 'Applicant/index';
$route['applicant/new']['GET'] = 'Applicant/new';

$route['applicant/edit_view/(:num)']['GET'] = 'Applicant/edit_view/$1';
$route['applicant/edit']['POST'] = 'Applicant/edit';
$route['applicant/(:num)']['GET'] = 'Applicant/view/$1';
$route['insert_role']['POST'] = 'Applicant/insert_role';
$route['applicants/add'] = 'Applicant/add_applicant';
 
$route['add_result']['POST'] = 'Applicant/add_result';

//Employee
$route['employee']['GET'] = 'Employee/index';
$route['employee/edit/(:num)']['GET'] = 'Employee/edit/$1';
$route['employee/edit']['POST'] = 'Employee/edit_data';
$route['employee/add'] = 'employee/add_employee';

//Intern
$route['intern']['GET'] = 'Intern/index';
$route['intern/add'] = 'intern/add_intern';
$route['intern/edit/(:num)']['GET'] = 'Intern/edit/$1';
$route['intern/edit']['POST'] = 'Intern/edit_data';
//Freelancers
$route['freelance']['GET'] = 'Freelance/index';
$route['freelance/add'] = 'freelance/add_freelance';
$route['freelance/edit/(:num)']['GET'] = 'Freelance/edit/$1';
$route['freelance/edit']['POST'] = 'freelance/edit_data';

//role
$route['roles/add']['POST']='roles/insert_role';
$route['delete_role'] = 'Applicant/delete_role';


$route['default_controller'] = "Home";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
