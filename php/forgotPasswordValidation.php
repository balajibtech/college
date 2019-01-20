<?php

require_once "../config/config.php";

$userType=$_POST['userType'];

if($userType!="" && $userName!="" && $securityQuestion!="" && $securityAnswer!="" && $dob!="")
{
	$sqlGetPassword="select user_password from user_details where user_name='".$userName."' and security_question='".$securityQuestion."' and security_answer='".$securityAnswer."' and dob='".$dob."' and user_type_id='".$userType."'";
	
	$resultGetPassword=mysql_query($sqlGetPassword,$conn);
	if(mysql_num_rows($resultGetPassword))
	{
		while($row=mysql_fetch_array($resultGetPassword))
		{
			header("location:../index.php?page=forgotPassword&password=".$row['user_password']);
		}
		//Using SendMail() function, Send Password to User Email Id...
	}
	else
	{
		header("location:../index.php?page=forgotPassword&message=invalid");
	}
}
else
{
header("location:../index.php?page=forgotPassword&message=forgotNull");
}
?>
