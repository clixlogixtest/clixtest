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
$route['default_controller'] = 'Front_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//front-end routes  Front_Controller//
$route['add-subjects'] 	= 'Front_Controller/add_subject';		//tutor_registration page





$route['tutor-registration'] 		= 'Teacher_login_Controller/tutor_registration';		//tutor_registration page
$route['teacher-dashboard'] 		= 'Teacher_Controller';									//Teacher Dashboard page
$route['teacher-logout'] 			= 'Teacher_Controller/logout';							//Teacher Logout page
$route['teacher-profile'] 			= 'Teacher_Controller/teacher_profile_show';			//Teacher profile page
$route['teacher-edit-profile'] 		= 'Teacher_Controller/teacher_profile_edit';			//Teacher Edit profile page
$route['teacher-change-password'] 	= 'Teacher_Controller/teacher_change_password';		//Teacher change password page
$route['book-appointments'] 		= 'Teacher_Controller/book_appointments';				//Teacher book_appointments



$route['login'] 					= 'Login_Controller';									//login page
$route['sign-up'] 					= 'Login_Controller/sign_up';							//register page
$route['forgot-password'] 			= 'Login_Controller/forgot_password';					//forgot_password page
$route['reset-password/(:any)'] 	= 'Login_Controller/reset_password';					//reset_password page
$route['terms-services'] 			= 'Login_Controller/termsofservice';					//termsofservice page



$route['logout'] 					= 'Home_Controller/logout';							//student logout page
$route['student-dashboard'] 		= 'Home_Controller';								//Student dashboard page
$route['student-profile'] 			= 'Home_Controller/student_profile_details';		//Student Profile page
$route['student-edit-profile'] 		= 'Home_Controller/update_profile_details';			//Student Edit Profile page
$route['student-change-password'] 	= 'Home_Controller/student_change_password';		//Student change password page
$route['search-date-by-month'] 		= 'Home_Controller/show_date_by_month_id';			//Student find teacher page
$route['search-time-by-date'] 		= 'Home_Controller/show_timeslots_by_date_id';		//Student ajax acuity
$route['search-teacher'] 			= 'Home_Controller/find_teacher';					//Student ajax acuity
$route['submit-filters'] 			= 'Home_Controller/submit_filters';					//Student filter teacher page
$route['book-teacher/(:num)/(:num)/(:any)'] = 'Home_Controller/book_teacher_timeslots/$1/$2/$3';			//Student book teacher page




$route['parent-dashboard'] 			= 'Parent_Controller';								//parent dashboard page
$route['parent-logout'] 			= 'Parent_Controller/logout';						//parent logout page
