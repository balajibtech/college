<?php
require_once "../config/config.php";

$getUserName=$_GET['getUserName'];
$getUserTypeName=$_GET['getUserTypeName'];

$sqlUserType="select user_type_id from user_types where user_type_name='".$getUserTypeName."'";
$resUserType=mysql_query($sqlUserType,$conn);
while($row=mysql_fetch_array($resUserType))
{
$currentUserId=$row['user_type_id'];
}

$sqlCheck="select user_id from user_details where user_name='".$getUserName."' and user_type_id='".$currentUserId."'";
$resCheck=mysql_query($sqlCheck,$conn);
$userAlreadyExists=mysql_num_rows($resCheck);

if($userAlreadyExists==0)
{
	echo 0;
}
else
{
	echo 1;
}
?>
