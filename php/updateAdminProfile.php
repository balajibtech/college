<?php

require_once "../config/config.php";

if($firstName!="" && $securityQuestion!="" && $securityAnswer!="" && $gender!="" && $designation!="" && $dob!="" && $mobileNumber!=""  && $contactAddress!="" && $passwordSelect=='yes' && $newPassword!="" && $confirmPassword!="" && $newPassword==$confirmPassword && $oldPassword!="")
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
	$commonClass->selectDetails("user_id","user_details","user_password='".$oldPassword."' and user_name='".$loginUser."' and user_id='".$loginId."' limit 1");

	if($commonClass->dataExist!=0)
	{
		$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', user_password='".$confirmPassword."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."',user_designation='".$designation."', dob='".$dob."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_name='".$loginUser."' and user_id='".$loginId."' and user_password='".$oldPassword."' limit 1";
		$result=mysql_query($sqlEdit,$conn);
		if($result)
		{
			header("location:../index.php?page=".$loginTypeName."EditProfile&message=AdminUpdated");
		}
		else
		{
			echo "Error:".mysql_error();
		}
	}
	else
	{
		header("location:../index.php?page=".$loginTypeName."EditProfile&message=invalidPassword");
	}

}
else if($firstName!="" && $securityQuestion!="" && $securityAnswer!="" && $gender!="" && $designation!="" && $dob!="" && $mobileNumber!="" && $contactAddress!="" && $passwordSelect=='no')
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
	$commonClass->selectDetails("user_id","user_details","first_name='".$firstName."' and user_name='".$userName."' and security_question='".$securityQuestion."' and security_answer='".$securityAnswer."' and user_gender='".$gender."'and user_designation='".$designation."' and dob='".$dob."' and mobile_number='".$mobileNumber."' and email_id='".$emailId."' and address='".$contactAddress."' and user_name='".$loginUser."' and user_id='".$loginId."' limit 1");

	if($commonClass->dataExist=="0")
	{
		$commonClass->selectDetails("user_id","user_details","first_name='".$firstName."' and user_name='".$userName."' and user_password='".$confirmPassword."' and security_question='".$securityQuestion."' and security_answer='".$securityAnswer."' and user_gender='".$gender."' and user_designation='".$designation."' and dob='".$dob."' and mobile_number='".$mobileNumber."' and email_id='".$emailId."' and address='".$contactAddress."'  and user_name='".$loginUser."' and user_id='".$loginId." ' limit 1");

		if($commonClass->dataExist=="0")
		{
			$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."',user_designation='".$designation."', dob='".$dob."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_name='".$loginUser."' and user_id='".$loginId."' limit 1";

			$result=mysql_query($sqlEdit,$conn);
			if($result)
			{
				header("location:../index.php?page=".$loginTypeName."EditProfile&message=AdminUpdated");
			}
			else
			{
				echo "Error:".mysql_error();
			}
		}
		else
		{
			header("location:../index.php?page=".$loginTypeName."EditProfile&message=invalid");
		}
	}
	else
	{
		header("location:../index.php?page=".$loginTypeName."EditProfile&message=invalid");
	}
}
else
{
	header("location:../index.php?page=".$loginTypeName."EditProfile&message=nullValue");
}
?>
