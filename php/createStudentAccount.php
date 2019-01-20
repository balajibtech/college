<?php
require_once "../config/config.php";

if($firstName!="" && $userName!="" && $userPassword!="" && $confirmPassword!="" && $securityQuestion!="" && $securityAnswer!="" && $dob!="" && date("Y-m-d")>$dob && $gender!="" && $qualification!="" && $degree!="" && $department!="" && $batch!="" && $contactAddress!="" && $confirmPassword==$userPassword)
{
if($emailId!="")
{
	if(!eregi("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$",$emailId))
	{
		echo "email Error";
		header("location:../index.php?page=".$loginTypeName."EditProfile&message=invalidEmail");
		exit();
	}
}
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$accountUserTypeId."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	$commonClass->selectDetails("user_id","user_details","user_name='".$userName."' and  user_type_id=".$currentUserTypeId);

	if($commonClass->dataExist=="0")
	{
		if(($photoType=="image/jpeg" || $photoType=="image/gif " || $photoType=="image/png") && $photoSize<307200 && $photoError==0)
		{
			move_uploaded_file($photoTempPath,$photoLocationName);
			
			$sqlInsert="insert into user_details values('', '".$currentUserTypeId."', '".$department."', '".$firstName."', '".$userName."', '".$confirmPassword."', '".$designation."', '".$securityQuestion."', '".$securityAnswer."', '".$gender."','".$batch."', '".$dob."', '', '".$photoPathName."', '".$photoName."','','', '".$mobileNumber."', '".$emailId."', '".$contactAddress."')";

			$resultInsert=mysql_query($sqlInsert,$conn) or die(mysql_error());
		header("location:../index.php?page=createStudentAccount&message=createStudentSuccess");
		
		}
		else
		{
		header("location:../index.php?page=createStudentAccount&message=checkUpload");
		}
	}
	else
	{
	header("location:../index.php?page=createStudentAccount&message=userAlreadyExists");
	}
}
else
{
header("location:../index.php?page=createStudentAccount&message=nullValue");
}
?>
