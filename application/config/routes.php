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

$route['default_controller'] = 'site/home';

// PT
$route['pt/home'] = 'site/home/pt';
$route['pt/about'] = 'site/about/pt';
$route['pt/contact'] = 'site/contact/pt';
$route['pt/map'] = 'site/map/pt';
$route['pt/references'] = 'site/references/pt';
$route['pt/post/(:num)'] = 'site/post/pt/$1';

// EN
$route['en/home'] = 'site/home/en';
$route['en/about'] = 'site/about/en';
$route['en/contact'] = 'site/contact/en';
$route['en/map'] = 'site/map/en';
$route['en/references'] = 'site/references/en';
$route['en/post/(:num)'] = 'site/post/en/$1';

// ES
$route['es/home'] = 'site/home/es';
$route['es/about'] = 'site/about/es';
$route['es/contact'] = 'site/contact/es';
$route['es/map'] = 'site/map/es';
$route['es/references'] = 'site/references/es';
$route['es/post/(:num)'] = 'site/post/es/$1';

// FR
$route['fr/home'] = 'site/home/fr';
$route['fr/about'] = 'site/about/fr';
$route['fr/contact'] = 'site/contact/fr';
$route['fr/map'] = 'site/map/fr';
$route['fr/references'] = 'site/references/fr';
$route['fr/post/(:num)'] = 'site/post/fr/$1';

// IT
$route['it/home'] = 'site/home/it';
$route['it/about'] = 'site/about/it';
$route['it/contact'] = 'site/contact/it';
$route['it/map'] = 'site/map/it';
$route['it/references'] = 'site/references/it';
$route['it/post/(:num)'] = 'site/post/it/$1';

// GE
$route['ge/home'] = 'site/home/ge';
$route['ge/about'] = 'site/about/ge';
$route['ge/contact'] = 'site/contact/ge';
$route['ge/map'] = 'site/map/ge';
$route['ge/references'] = 'site/references/ge';
$route['ge/post/(:num)'] = 'site/post/ge/$1';