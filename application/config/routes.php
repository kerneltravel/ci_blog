<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'www/index';
$route['404_override'] = '';

$route['login']    = 'auth/login';     // 登录
$route['loginout'] = 'auth/login_out'; // 登出
$route['register'] = 'auth/register';  // 注册

$route['cate']     = 'home/category';     // 分类首页
$route['cate/add'] = 'home/category/add'; // 添加分类

$route['tag']     = 'home/tag';     // 标签首页
$route['tag/add'] = 'home/tag/add'; // 添加标签

$route['post']     = 'home/post';     // 文章首页
$route['post/add'] = 'home/post/add'; // 添加文章

$route['comment']     = 'home/comment';     // 评论首页
$route['comment/add'] = 'home/comment/add'; // 发表评论


/* End of file routes.php */
/* Location: ./application/config/routes.php */
