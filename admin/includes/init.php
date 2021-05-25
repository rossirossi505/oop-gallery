<?php 



defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//define('SITE_ROOT', 'C:' . DS . 'XAMPP' . DS . 'htdocs' . DS . 'gallery' );

define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');

defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');
 
//require_once(INCLUDES_PATH.DS."functions.php");
ob_start();
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."config.php");

require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."comment.php");

require_once(INCLUDES_PATH.DS."paginate.php");

/*

require_once("config.php");


require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("comment.php");
require_once("session.php");
require_once("paginate.php");
*/

 ?>