<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['franchise'] = 'Home/franchise';
$route['blog'] = 'Home/blog';
$route['blogdetails/(:any)/(:any)'] = 'Home/blog/$1/$2';
$route['about'] = 'Home/about';
$route['foundation'] = 'Home/foundation';
$route['faqs'] = 'Home/faqs';
$route['gallery'] = 'Home/gallery';
$route['animated-videos'] = 'Home/animated_videos';
$route['viewmore/(:any)/(:any)'] = 'Home/all_videos/$1/$2';