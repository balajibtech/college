<?php

require_once "../config/config.php";				//config,session,smarty files

$loginUserType=$_POST['userType'];
$loginUserName=$_POST['userName'];
$loginPassword=$_POST['userPassword'];


if($loginUserType!="" && $loginUserName!="" && $loginPassword!="")
{
	$loginFormClass->viewDetails('ud.*, ut.user_type_name','user_details ud, user_types ut','ud.user_name="'.$loginUserName.'" and ud.user_password="'.$loginPassword.'" and ud.user_type_id="'.$loginUserType.'" and ud.user_type_id=ut.user_type_id');
}
else
{
	header("location:../index.php?message=nullValue");
}

?>
