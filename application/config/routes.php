<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// this controller contains all links not related to the store or loggin in
$route['default_controller'] = "pages";

//Takes user to main page
$route['home'] = "pages/index";

//Takes user to the registration page
$route['register'] = "Users/register";

//Takes user to the shop
$route['shop'] = "Stores/shop";

//Takes user to login page directly
$route['login'] = "Sessions/gatekeeper";

//Takes user to the Councils page
$route['councils'] = "pages/councils";

//Takes user to the Executive Board page
$route['executive'] = "pages/executive_board";

//Takes user to Contact Us page
$route['contact'] = "pages/contact";

//Takes user to the About Us page
$route['about'] = "pages/about";

//Takes user to the Join Your Union page
$route['join'] = "pages/join";

//Takes user to the Buy page
$route['buy'] = "Stores/buy";


$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */