<?php
session_start();
ob_start();
if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1'){
	
		define('HOST_NAME','localhost');
		define('USER_NAME','root');
		define('PASSWORD','');
		define('DB_NAME','tav');
		
}else{
	
define('HOST_NAME','localhost');
define('USER_NAME','tavgroup');
define('PASSWORD','tavgroup1394');
define('DB_NAME','tav');	

}
$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die("Connection Lost!!!");