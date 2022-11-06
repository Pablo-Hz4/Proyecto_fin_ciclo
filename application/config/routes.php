<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#LOGIN
$route['nuevo'] = 'NuevoUsuarioController';

#ADMIN
$route['admin'] = 'AdminController';


$route['datos_usuario'] = 'NuevoUsuarioController/add_usuario';





$route['default_controller'] = 'InicioController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
