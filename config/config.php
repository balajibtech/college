<?php
$realPath="http://localhost/college/";		//ABSOLUTE path

$basePath="/var/www/html/college/";		//BASE path

require_once $basePath.'libs/Smarty.class.php';	//smarty class

require_once $basePath.'config/session.php';		//session

require_once $basePath.'config/dataBaseConnection.php';	//database connection

require_once $basePath.'class/loginFormClass.php';		//login class

require_once $basePath.'class/commonClass.php';

require_once $basePath.'config/commonVariable.php';

$smarty=new Smarty();			//smarty declare

$smarty->template_dir='tpl/';		//tpl directory

?>
