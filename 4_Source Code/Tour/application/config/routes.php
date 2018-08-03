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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// admin
$route['admin'] = 'admin/login'; 
$route['admin/login'] = 'admin/login';

// tour
$route['admin/tour'] = 'admin_tour/tour';
$route['admin/tour_create'] = 'admin_tour/tour_create';
$route['admin/tour_edit/(:any)'] = 'admin_tour/tour_edit/$1';
$route['admin/tour_remove'] = 'admin_tour/tour_delete';

// địa điểm
$route['admin/diadiem'] = 'admin_diadiem/diadiem';
$route['admin/diadiem_create'] = 'admin_diadiem/diadiem_create';
$route['admin/diadiem_edit/(:any)'] = 'admin_diadiem/diadiem_edit/$1';
$route['admin/diadiem_remove'] = 'admin_diadiem/diadiem_remove';

// xe
$route['admin/xe'] = 'admin_xe/xe';
$route['admin/xe_create'] = 'admin_xe/xe_create';
$route['admin/xe_edit/(:any)'] = 'admin_xe/xe_edit/$1';
$route['admin/xe_remove'] = 'admin_xe/xe_remove';

// khách hàng
$route['admin/khachhang'] = 'admin_khachhang/khachhang';
$route['admin/khachhang_create'] = 'admin_khachhang/khachhang_create';
$route['admin/khachhang_edit/(:any)'] = 'admin_khachhang/khachhang_edit/$1';
$route['admin/khachhang_remove'] = 'admin_khachhang/khachhang_remove';

// lịch trình
$route['admin/lichtrinh'] = 'admin_lichtrinh/lichtrinh';
$route['admin/lichtrinh_create'] = 'admin_lichtrinh/lichtrinh_create';
$route['admin/lichtrinh_edit/(:any)'] = 'admin_lichtrinh/lichtrinh_edit/$1';
$route['admin/lichtrinh_remove'] = 'admin_lichtrinh/lichtrinh_remove';

// đặt tour
$route['admin/dattour'] = 'admin_dattour/dattour';
$route['admin/dattour_create'] = 'admin_dattour/dattour_create';
$route['admin/dattour_edit/(:any)'] = 'admin_dattour/dattour_edit/$1';
$route['admin/dattour_remove'] = 'admin_dattour/dattour_remove';