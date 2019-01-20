<?php

session_start();

if(isset($_SESSION['loginType']))
{
	$loginId=$_SESSION['loginId'];
	$loginUser=$_SESSION['loginUser'];
	$loginTypeId=$_SESSION['loginType'];
	$loginTypeName=$_SESSION['loginTypeName'];	
}
?>
