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
$route['default_controller'] = 'home';

$route['selection'] = 'home/selection';

/* Korroboree Team Journal Dashboard*/

$route['account'] = 'k_team_journal/admin/account';
$route['settings'] = 'k_team_journal/admin/settings';

$route['kteam'] = 'k_team_journal/kteam';
$route['dashboard'] = 'k_team_journal/kteam/dashboard';
$route['kteam_file_manager'] = 'k_team_journal/kteam/kteam_file_manager';
$route['kteam_library'] = 'k_team_journal/kteam/kteam_library';
$route['kteam_userdata'] = 'k_team_journal/kteam/kteam_userdata';
/* Episode Pages*/
$route['project_list'] = 'k_team_journal/kteam/project_list';
$route['episode_list'] = 'k_team_journal/episode/episode_list';
$route['create'] = 'k_team_journal/episode/create';
$route['edit'] = 'k_team_journal/episode/edit';
$route['view'] = 'k_team_journal/episode/view';
$route['tracker'] = 'k_team_journal/episode/tracker';

/* Topic Pages*/
$route['topic_list'] = 'k_team_journal/topic/topic_list';
$route['topic_create'] = 'k_team_journal/topic/topic_create';
$route['topic_edit'] = 'k_team_journal/topic/topic_edit';
$route['topic_view'] = 'k_team_journal/topic/topic_view';
$route['topic_tracker'] = 'k_team_journal/topic/topic_tracker';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
