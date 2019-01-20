<?php
require_once "../config/config.php";

$staffId=$_POST['staffId'];
$userTypeName=$_GET['userTypeName'];

if($_GET['operation']=="edit")
{
	if($firstName!="" && $userName!="" && $passwordSelect=='yes'  && $newPassword!="" && $confirmPassword!="" && $oldPassword!="" && $newPassword==$confirmPassword && $securityQuestion!="" && $securityAnswer!="" && $designation!="" && $gender!="" && $dob!="" && $qualification!="" && $degree!="" && $salary!="" && $department!="" && $mobileNumber!="" && $contactAddress!="")
	{
if($emailId!="")
{
	if(!eregi("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$",$emailId))
	{
		echo "email Error";
		header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=invalidEmail");
		exit();
	}
}
		$commonClass->selectDetails("user_id","user_details","user_password='".$oldPassword."' and user_id='".$staffId."' limit 1");

		if($commonClass->dataExist!=0)
		{
			if($resumeName!="") 
			{
				if(($resumeType=="application/msword" || $resumeType=="text/plain" || $resumeType=="application/pdf" || $resumeType=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") && $resumeSize<307200 && $resumeError==0)
				{	
					$sqlUpload="select resume_path from user_details where user_password='".$oldPassword."' and user_id='".$staffId."' limit 1";
					$resultUpload=mysql_query($sqlUpload,$conn);
					while($row=mysql_fetch_array($resultUpload))
					{
						$resumeUploadedPath=$row['resume_path'];
					}
					unlink($basePath.$resumeUploadedPath);

					move_uploaded_file($resumeTempPath,$resumeLocationName);

					$sqlEdit="update user_details set first_name='".$firstName."', resume_path='".$resumePathName."', resume_name='".$resumeName."', user_name='".$userName."', department_id='".$department."', user_password='".$confirmPassword."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."',user_designation='".$designation."', dob='".$dob."', salary='".$salary."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$staffId."' and user_password='".$oldPassword."' limit 1";
					$result=mysql_query($sqlEdit,$conn);
					header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=staffUpdated");
				}
				else
				{
					header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=checkUpload");
				}
			}
			
			$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', department_id='".$department."', user_password='".$confirmPassword."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."',user_designation='".$designation."', dob='".$dob."', salary='".$salary."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$staffId."' and user_password='".$oldPassword."' limit 1";
			$result=mysql_query($sqlEdit,$conn);
			if($result)
			{
				header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=StaffUpdated");
			}
			else
			{
				echo "Error:".mysql_error();
			}
		}
		else
		{
			header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=invalidPassword");
		}

	}
	else if($firstName!="" && $userName!="" && $passwordSelect=='no' && $securityQuestion!="" && $securityAnswer!="" && $designation!="" && $gender!="" && $dob!="" && $salary!="" && $mobileNumber!="" && $qualification!="" && $degree!="" && $department!="" && $contactAddress!="")
	{
if($emailId!="")
{
	if(!eregi("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$",$emailId))
	{
		echo "email Error";
		header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=invalidEmail");
		exit();
	}
}
		
		$commonClass->selectDetails("user_id","user_details","first_name='".$firstName."' and user_name='".$userName."' and department_id='".$department."' and security_question='".$securityQuestion."' and security_answer='".$securityAnswer."' and user_gender='".$gender."'and user_designation='".$designation."' and dob='".$dob."' and mobile_number='".$mobileNumber."' and email_id='".$emailId."' and address='".$contactAddress."' and user_name='".$userName."' and user_id='".$staffId."' and resume_path='".$resumeTempPath."' limit 1");

		if($commonClass->dataExist=="0")
		{
			if($resumeName!="")
			{
				if(($resumeType=="application/msword" || $resumeType=="text/plain" || $resumeType=="application/pdf" || $resumeType=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") && $resumeSize<307200 && $resumeError==0)
				{	
					$sqlUpload="select resume_path from user_details where user_id='".$staffId."' limit 1";
					$resultUpload=mysql_query($sqlUpload,$conn);
					while($rows=mysql_fetch_array($resultUpload))
					{
						$resumeUploadedPath=$rows['resume_path'];
					}
					unlink($basePath.$resumeUploadedPath);

					move_uploaded_file($resumeTempPath,$resumeLocationName);

					$sqlEdit="update user_details set first_name='".$firstName."', resume_path='".$resumePathName."', resume_name='".$resumeName."', user_name='".$userName."', department_id='".$department."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."',user_designation='".$designation."', dob='".$dob."', salary='".$salary."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$staffId."' limit 1";
					$result=mysql_query($sqlEdit,$conn);
					header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=staffUpdated");
				}
				else
				{
				header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=checkUpload");
				}
			}
			else
			{
			$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', department_id='".$department."', salary='".$salary."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."', user_designation='".$designation."', dob='".$dob."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$staffId."' limit 1";

			$result=mysql_query($sqlEdit,$conn);
			}
			if($result)
			{
				header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=StaffUpdated");
			}
			else
			{
				echo "Error:".mysql_error();
			}
			
		}
		else
		{
			header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=invalid");
		}

	}
	else
	{
	header("location:../index.php?page=editStaff&userId=".$staffId."&operation=edit&message=nullValue");
	}
}
?>
