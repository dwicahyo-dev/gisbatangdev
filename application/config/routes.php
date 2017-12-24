<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ---------------------- ROUTE USER --------------------------------
$route['api/register']['POST']		= 'api/users/register';
$route['api/login']['POST']			= 'api/users/login';

// ---------------------- ROUTE KATEGORI --------------------------------
$route['api/kategori']['GET']                          				= 'api/kategori/index';
$route['api/kategori/format/(:any)']['GET']            				= 'api/kategori/index/format/$1';
$route['api/kategori/show/(:num)']['GET']              				= 'api/kategori/show/$1';
$route['api/kategori/show/(:num)/format/(:any)']['GET']     		= 'api/kategori/show/$1/format/$2';
$route['api/kategori/show/(:num)']['GET']              				= 'api/kategori/show/$1';
$route['api/kategori/search/(:any)']['GET']							= 'api/kategori/search/$1';

$route['api/kategori']['POST']                         				= 'api/kategori/index';

// ---------------------- ROUTE KATEGORI BERITA --------------------------------
$route['api/kategori_berita']['GET']                          		= 'api/kategori_berita/index';
$route['api/kategori_berita/format/(:any)']['GET']            		= 'api/kategori_berita/index/format/$1';
$route['api/kategori_berita/show/(:num)']['GET']              		= 'api/kategori_berita/show/$1';
$route['api/kategori_berita/show/(:num)/format/(:any)']['GET']		= 'api/kategori_berita/show/$1/format/$2';
$route['api/kategori_berita/search/(:any)']['GET']					= 'api/kategori_berita/search/$1';

$route['api/kategori_berita']['POST']                         		= 'api/kategori_berita/index';

// ---------------------- ROUTE TEMPAT --------------------------------
$route['api/tempat']['GET']                          		= 'api/tempat/index';
$route['api/tempat/format/(:any)']['GET']            		= 'api/tempat/index/format/$1';
$route['api/tempat/show/(:num)']['GET']              		= 'api/tempat/show/$1';
$route['api/tempat/show/(:num)/format/(:any)']['GET']     	= 'api/tempat/show/$1/format/$2';
$route['api/tempat/search/(:any)']['GET']					= 'api/tempat/search/$1';

$route['api/tempat']['POST']                         		= 'api/tempat/index';

$route['api/tempat/(:num)']['DELETE']                   	= 'api/tempat/tempat/$1';

// ---------------------- ROUTE BERITA --------------------------------
$route['api/berita']['GET']                          		= 'api/berita/index';
$route['api/berita/format/(:any)']['GET']            		= 'api/berita/index/format/$1';
$route['api/berita/show/(:num)']['GET']              		= 'api/berita/show/$1';
$route['api/berita/show/(:num)/format/(:any)']['GET']     	= 'api/berita/show/$1/format/$2';
$route['api/berita/search/(:any)']['GET']					= 'api/berita/search/$1';

$route['api/berita']['POST']                         		= 'api/berita/index';

$route['api/berita/(:num)']['DELETE']                   	= 'api/berita/berita/$1';

