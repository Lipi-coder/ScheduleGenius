<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "lipi"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc

// included main class
require_once 'app/Main.php';
require_once 'app/Controller.php';
require_once 'app/Admin.php';
// /**
//  * @param $class
//  */
// function __autoload($class) {
//     require_once 'app/' . $class.'.php';
// }