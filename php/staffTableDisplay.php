<?php 
require_once "../config/config.php";

$staffDetails=$_GET['staffDetails'];
$whichUser=$_GET['whichUser'];
$operation=$_GET['operation'];

if($operation!="viewAll" && $operation!="staffView")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$whichUser."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}

	
	$sqlDisplay="select * from user_details where department_id='".$staffDetails."' and user_type_id='".$currentUserTypeId."'";
	
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th>
						<th>Name</th> <th>User Name</th> <th>Designation</th> <th>salary</th> <th>Mobile Number</th> <th>Email Id</th> <th>Address</th> </tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td><a href='javascript:;' onclick=staffTable('".$row['user_id']."','staff','staffView')>".$row['user_name']."</a></td><td>".$row['user_designation']."</td><td>".$row['salary']."</td><td>".$row['mobile_number']."</td><td>".$row['email_id']."</td><td>".$row['address']."</td></tr>";
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
elseif($operation=="viewAll" && $operation!="staffView")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$whichUser."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}
	$sqlDisplay="select ud.*,dd.department_code from user_details ud, department_details dd where ud.user_type_id='".$currentUserTypeId."' and ud.department_id=dd.department_id order by dd.department_code";
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr><th>S.No</th> <th>Name</th> <th>User Name</th> <th>Designation</th> <th>Department</th></tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td> <td>".$row['first_name']."</td> <td><a href='javascript:;' onclick=staffTable('".$row['user_id']."','staff','staffView')>".$row['user_name']."</a></td> <td>".$row['user_designation']."</td>  <td>".$row['department_code']."</td></tr>";
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
elseif($operation!="viewAll" && $operation=="staffView")
{
	$sqlUserTypeId="select user_type_id from user_types where user_type_name='".$whichUser."'";
	$result=mysql_query($sqlUserTypeId,$conn);

	while($row=mysql_fetch_array($result))
	{
		$currentUserTypeId=$row['user_type_id'];
	}
	$sqlDisplay="select ud.*,dd.* from user_details ud, department_details dd where ud.user_type_id='".$currentUserTypeId."' and ud.department_id=dd.department_id and user_id='".$staffDetails."'";
	$resDisplay=mysql_query($sqlDisplay,$conn);
	$userPresent=mysql_num_rows($resDisplay);

	if($userPresent!=0)
	{
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		
		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>Name</td><td>".$row['first_name']."</td></tr>
<tr><td>Staff Name</td><td>".$row['user_name']."</td></tr>
<tr><td>Password</td><td>".$row['user_password']."</td></tr>
<tr><td>Designation</td><td>".$row['user_designation']."</td></tr>
<tr><td>Gender</td><td>".$row['user_gender']."</td></tr>
<tr><td>Date Of Birth</td><td>".$row['dob']."</td></tr>
<tr><td>Qualification</td><td>".$row['qualification']."</td></tr>
<tr><td>Degree</td><td>".$row['degree']."</td></tr>
<tr><td>Department</td><td>".$row['department_code']."</td></tr>
<tr><td>Salary</td><td>".$row['salary']."</td></tr>
<tr><td>Mobile Number</td><td>".$row['mobile_number']."</td></tr>
<tr><td>Email Id</td><td>".$row['email_id']."</td></tr>
<tr><td>Address</td><td>".$row['address']."</td></tr>
<tr><td>Resume Download</td><td><a href='".$realPath.$row['resume_path']."'>".$row['resume_name']."</a></td></tr>";

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
