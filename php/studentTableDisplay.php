<?php 
require_once "../config/config.php";
$department=$_GET['department'];
if($whichUser=="student" && $operation!="viewAll")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$whichUser."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	$sqlDisplay="select ud.*, dd.* from user_details ud, department_details dd where ud.user_type_id='".$currentUserTypeId."' and ud.student_batch='".$studentBatch."'  and ud.department_id='".$department."' and ud.department_id=dd.department_id order by ud.first_name";
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th><th>Name</th> <th>Register Number</th><th>Mobile Number</th><th>Address</th></tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td><a href='javascript:;' onclick=studentTable('".$row['user_id']."')>".$row['user_name']."</a></td><td>".$row['mobile_number']."</td><td>".$row['address']."</td></tr>";
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
if($whichUser!="student" && $operation!="viewAll")
{
$sqlStudent="select ud.*, dd.* from user_details ud, department_details dd where ud.user_id='".$whichUser."' and ud.department_id=dd.department_id";
$resDisplay=mysql_query($sqlStudent,$conn);
$tableHeader="";
$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
while($row=mysql_fetch_array($resDisplay))
{
	$tableHeader=$tableHeader."<tr><td>Name</td><td>".$row['first_name']."</td></tr>
	<tr><td>Register Number</td><td>".$row['user_name']."</td></tr>
	<tr><td>Password</td><td>".$row['user_password']."</td></tr>
	<tr><td>Photo</td><td><img src='".$realPath.$row['photo_path']."' height='100px' width='150px'></td></tr>
	<tr><td>Gender</td><td>".$row['user_gender']."</td></tr>
	<tr><td>Date Of Birth</td><td>".$row['dob']."</td></tr>
	<tr><td>Qualification</td><td>".$row['qualification']."</td></tr>
	<tr><td>Degree</td><td>".$row['degree']."</td></tr>
	<tr><td>Department</td><td>".$row['department_code']."</td></tr>
	<tr><td>Batch</td><td>".$row['student_batch']."</td></tr>
	<tr><td>Mobile Number</td><td>".$row['mobile_number']."</td></tr>
	<tr><td>Email Id</td><td>".$row['email_id']."</td></tr>
	<tr><td>Address</td><td>".$row['address']."</td></tr>
	<tr><td>Photo Download</td><td><a href='".$realPath.$row['photo_path']."'>".$row['photo_name']."</a></td></tr>";

	}
	$tableHeader=$tableHeader."</table>";
	echo $tableHeader;	
}
if($operation=="viewAll")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$whichUser."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	$sqlDisplay="select ud.*, dd.department_code from user_details ud, department_details dd  where ud.user_type_id='".$currentUserTypeId."' and ud.department_id=dd.department_id order by dd.department_code";
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th><th>Name</th><th>Register Number</th><th>Batch</th><th>Department</th><th>Mobile Number</th><th>Address</th></tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td><a href='javascript:;' onclick=studentTable('".$row['user_id']."')>".$row['user_name']."</a></td><td>".$row['student_batch']."</td><td>".$row['department_code']."</td><td>".$row['mobile_number']."</td><td>".$row['address']."</td></tr>";
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
?>
