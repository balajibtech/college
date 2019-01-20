<?php
require_once "../config/config.php";

$studentId=$_POST['studentId'];
$userTypeName=$_GET['userTypeName'];

if($_GET['operation']=="edit")
{
	if($firstName!="" && $userName!="" && $passwordSelect=='yes'  && $newPassword!="" && $confirmPassword!="" && $oldPassword!="" && $newPassword==$confirmPassword && $securityQuestion!="" && $securityAnswer!="" && $gender!="" && $dob!="" && $qualification!="" && $degree!="" && $batch!="" && $department!="" && $mobileNumber!="" && $contactAddress!="")
	{
	if($emailId!="")
	{
		if(!eregi("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$",$emailId))
		{
			echo "email Error";
			header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=invalidEmail");
			exit();
		}
	}
	$commonClass->selectDetails("user_id","user_details","user_password='".$oldPassword."' and user_id='".$studentId."' limit 1");
		if($commonClass->dataExist!=0)
		{
			if($photoTempPath!="") 
			{
				if(($photoType=="image/jpeg" || $photoType=="image/png" || $photoType=="image/gif") && $photoSize<307200 && $photoError==0)
				{
					$sqlUpload="select photo_path from user_details where user_password='".$oldPassword."' and user_id='".$studentId."' limit 1";
					$resultUpload=mysql_query($sqlUpload,$conn);
					while($row=mysql_fetch_array($resultUpload))
					{
						$photoUploadedPath=$row['photo_path'];
					}
					unlink($basePath.$photoUploadedPath);

					move_uploaded_file($photoTempPath,$photoLocationName);

					$sqlEdit="update user_details set first_name='".$firstName."', photo_path='".$photoPathName."', photo_name='".$photoName."', user_name='".$userName."', department_id='".$department."', user_password='".$confirmPassword."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."', dob='".$dob."', student_batch='".$batch."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$studentId."' and user_password='".$oldPassword."' limit 1";
					$result=mysql_query($sqlEdit,$conn);
					header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=StudentUpdated");
				}
				else
				{
					header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=checkUpload");
				}
			}
			$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', department_id='".$department."', user_password='".$confirmPassword."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."', dob='".$dob."', student_batch='".$batch."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$studentId."' and user_password='".$oldPassword."' limit 1";
			$result=mysql_query($sqlEdit,$conn);
			if($result)
			{
				header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=StudentUpdated");
			}
			else
			{
				echo "Error:".mysql_error();
			}
		}
		else
		{
			header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=invalidPassword");
		}

	}
	else if($firstName!="" && $userName!="" && $passwordSelect=='no' && $securityQuestion!="" && $securityAnswer!="" && $gender!="" && $dob!="" && $batch!="" && $mobileNumber!="" && $qualification!="" && $degree!="" && $department!="" && $contactAddress!="")
	{
	if($emailId!="")
	{
		if(!eregi("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$",$emailId))
		{
			echo "email Error";
			header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=invalidEmail");
			exit();
		}
	}
		
		$commonClass->selectDetails("user_id","user_details","first_name='".$firstName."' and user_name='".$userName."' and department_id='".$department."' and security_question='".$securityQuestion."' and security_answer='".$securityAnswer."' and user_gender='".$gender."' and dob='".$dob."' and mobile_number='".$mobileNumber."' and email_id='".$emailId."' and address='".$contactAddress."' and user_name='".$userName."' and user_id='".$studentId."' and photo_path='".$photoTempPath."' limit 1");

		if($commonClass->dataExist=="0")
		{
			if($photoName!="")
			{
				if(($photoType=="image/jpeg" || $photoType=="image/png" || $photoType=="image/gif") && $photoSize<307200 && $photoError==0)
				{
					$sqlUpload="select photo_path from user_details where user_id='".$studentId."' limit 1";
					$resultUpload=mysql_query($sqlUpload,$conn);
					while($rows=mysql_fetch_array($resultUpload))
					{
						$photoUploadedPath=$rows['photo_path'];
					}
					unlink($basePath.$photoUploadedPath);

					move_uploaded_file($photoTempPath,$photoLocationName);

					$sqlEdit="update user_details set first_name='".$firstName."', photo_path='".$photoPathName."', photo_name='".$photoName."', user_name='".$userName."', department_id='".$department."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."', dob='".$dob."', student_batch='".$batch."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$studentId."' limit 1";
					$result=mysql_query($sqlEdit,$conn);
					header("location:../index.php?page=editStudent&message=studentUpdated");
				}
				else
				{
					header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=checkUpload");
				}	
			}
			else
			{
				$sqlEdit="update user_details set first_name='".$firstName."', user_name='".$userName."', department_id='".$department."', student_batch='".$batch."', security_question='".$securityQuestion."', security_answer='".$securityAnswer."', user_gender='".$gender."', dob='".$dob."', mobile_number='".$mobileNumber."', email_id='".$emailId."', address='".$contactAddress."' where user_id='".$studentId."' limit 1";

				$result=mysql_query($sqlEdit,$conn);
			}
			if($result)
			{
				header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=StudentUpdated");
			}
			else
			{
				echo "Error:".mysql_error();
			}
		}
		else
		{
			header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=invalid");
		}

	}
	else
	{
	header("location:../index.php?page=editStudent&userId=".$studentId."&operation=edit&message=nullValue");
	}
}
?>
