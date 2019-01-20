<?php
require_once "../config/config.php";

$userId=$_GET['userId'];
$batch=$_GET['batch'];
$getUser=$_GET['getUser'];
$operation=$_GET['operation'];
$department=$_GET['department'];
$uploadPath=$_GET['uploadPath'];


if($operation=="view")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$getUser."'";

	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	$sqlDisplay="select * from user_details where department_id='".$department."' and user_type_id='".$currentUserTypeId."'";
	
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th>
						<th>Name</th> <th>User Name</th> <th>Designation</th> <th>Mobile Number</th><th>Edit</th>  <th>Delete</th> </tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td>".$row['user_name']."</td><td>".$row['user_designation']."</td><td>".$row['mobile_number']."</td><td><a href='index.php?page=editStaff&userId=".$row['user_id']."&operation=edit'>Edit</a></td>
			<td><a href='php/editDeleteAccount.php?userId=".$row['user_id']."&operation=delete&uploadPath=".$row['resume_path']."' onclick='return confirmDelete();'>Delete</a></tr>";
			$i++;
		}
			$tableHeader=$tableHeader."</table>";
			echo $tableHeader;
	}
	else
	{
		echo "<center><label class='errorMessage'>No Records Found!</label></center>";
	}
}

if($operation=="delete")
{
	$sqlDelete="delete from user_details where user_id='".$userId."' limit 1";
	unlink($basePath.$uploadPath);
	$result=mysql_query($sqlDelete,$conn);
	if($result)
	{
	header("location:../index.php?page=manipulateStaffAccount&message=staffDeleted");
	}
	else
	{
		echo "Error:".mysql_error();
	}
}


//student edit delete

if($operation=="viewStudent")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$getUser."'";

	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	

	$sqlDisplay="select * from user_details where department_id='".$department."' and user_type_id='".$currentUserTypeId."' and student_batch='".$batch."'";
	
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th>
						<th>Name</th> <th>User Name</th> <th>Batch</th> <th>Mobile Number</th><th>Edit</th>  <th>Delete</th> </tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td>".$row['user_name']."</td><td>".$row['student_batch']."</td><td>".$row['mobile_number']."</td><td><a href='index.php?page=editStudent&userId=".$row['user_id']."&operation=edit'>Edit</a></td>
			<td><a href='php/editDeleteAccount.php?userId=".$row['user_id']."&operation=deleteStudent&uploadPath=".$row['photo_path']."' onclick='return confirmDelete();'>Delete</a></tr>";
			$i++;
		}
			$tableHeader=$tableHeader."</table>";
			echo $tableHeader;
	}
	else
	{
		echo "<center><label class='errorMessage'>No Records Found!</label></center>";
	}
}

if($operation=="deleteStudent")
{
	$sqlDelete="delete from user_details where user_id='".$userId."' limit 1";
	unlink($basePath.$uploadPath);
	$result=mysql_query($sqlDelete,$conn);
	if($result)
	{
	header("location:../index.php?page=manipulateStudentAccount&message=studentDeleted");
	}
	else
	{
		echo "Error:".mysql_error();
	}
}
?>
