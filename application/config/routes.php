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

//Prueba de Rutas
$route['itemCRUD'] = "itemCRUD/index";
$route['itemCRUD/(:num)'] = "itemCRUD/show/$1";
$route['itemCRUDCreate']['post'] = "itemCRUD/store";
$route['itemCRUDEdit/(:any)'] = "itemCRUD/edit/$1";
$route['itemCRUDUpdate/(:any)']['put'] = "itemCRUD/update/$1";
$route['itemCRUDDelete/(:any)']['delete'] = "itemCRUD/delete/$1";

// Ruta Profesor PRINCIPAL
$route['Profesor'] = "Profesor/index";
$route['Profesor/(:num)'] = "Profesor/show/$1";
$route['ProfesorCreate']['post'] = "Profesor/store";
$route['ProfesorEdit/(:any)'] = "Profesor/edit/$1";
$route['ProfesorUpdate/(:any)']['put'] = "Profesor/update/$1";
$route['ProfesorDelete/(:any)']['delete'] = "Profesor/delete/$1";

// Ruta Grado PRINCIPAL
$route['Grado'] = "Grado/index";
$route['Grado/(:num)'] = "Grado/show/$1";
$route['GradoCreate']['post'] = "Grado/store";
$route['GradoEdit/(:any)'] = "Grado/edit/$1";
$route['GradoUpdate/(:any)']['put'] = "Grado/update/$1";
$route['GradoDelete/(:any)']['delete'] = "Grado/delete/$1";

// Ruta Encargado PRINCIPAL
$route['Encargado'] = "Encargado/index";
$route['Encargado/(:num)'] = "Encargado/show/$1";
$route['EncargadoCreate']['post'] = "Encargado/store";
$route['EncargadoEdit/(:any)'] = "Encargado/edit/$1";
$route['EncargadoUpdate/(:any)']['put'] = "Encargado/update/$1";
$route['EncargadoDelete/(:any)']['delete'] = "Encargado/delete/$1";

// Ruta Alumno SECUNDARIA
$route['Alumno/(:num)'] = "Alumno/index/$1";
$route['Alumno/create/(:num)'] = "Alumno/create/$1";
$route['Alumno/show/(:num)'] = "Alumno/show/$1";
$route['AlumnoCreate']['post'] = "Alumno/store/$1";
$route['AlumnoEdit/(:any)'] = "Alumno/edit/$1";
$route['AlumnoUpdate/(:any)']['put'] = "Alumno/update/$1";
$route['AlumnoDelete/(:any)']['delete'] = "Alumno/delete/$1";

// Ruta Materia Profesor SECUNDARIA
$route['MateriaProfesor/(:num)'] = "MateriaProfesor/index/$1";
$route['MateriaProfesor/show/(:num)'] = "MateriaProfesor/show/$1";
$route['MateriaProfesor/create/(:num)'] = "MateriaProfesor/create/$1";
$route['MateriaProfesorCreate']['post'] = "MateriaProfesor/store/$1";
$route['MateriaProfesorEdit/(:any)'] = "MateriaProfesor/edit/$1";
$route['MateriaProfesorUpdate/(:any)/(:any)']['put'] = "MateriaProfesor/update/$1/$1";
$route['MateriaProfesorDelete/(:any)']['delete'] = "MateriaProfesor/delete/$1";

// Ruta Materia Grado SECUNDARIA
$route['MateriaGrado/(:num)'] = "MateriaGrado/index/$1";
$route['MateriaGrado/show/(:num)'] = "MateriaGrado/show/$1";
$route['MateriaGrado/create/(:num)'] = "MateriaGrado/create/$1";
$route['MateriaGradoCreate']['post'] = "MateriaGrado/store/$1";
$route['MateriaGradoEdit/(:any)'] = "MateriaGrado/edit/$1";
$route['MateriaGradoUpdate/(:any)']['put'] = "MateriaGrado/update/$1/$1";
$route['MateriaGradoDelete/(:any)']['delete'] = "MateriaGrado/delete/$1";
