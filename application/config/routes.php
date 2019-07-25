<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'awal';
$route['register']='awal/register';
$route['login']='awal/login';
$route['logout']='awal/logout';
$route['menu']='menu';

$route['admin']='admin';
$route['admin/u_add']='admin/userAdd';
$route['admin/u_edit/(:any)']='admin/userEdit/$1';
$route['admin/u_delete/(:any)']='admin/userDelete/$1';
$route['admin/reset/(:any)']='admin/resetPass/$1';

$route['user']='user';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
