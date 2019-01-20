<?php

require_once "../config/config.php";

$whichUser=$_GET['whichUser'];
$department=$_GET['department'];
$operation=$_GET['operation'];

$semester=$_GET['semester'];
$semesterId=$_GET['semesterId'];
$tempUserId=$_GET['tempUserId'];
$tempDepartmentId=$_GET['tempDepartmentId'];
$tempSemester=$_GET['tempSemester'];
$tempStudentBatch=$_GET['tempStudentBatch'];

if($whichUser=="student" && $semester!="" && $tempStudentBatch=="" && $department!="")
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
		$tableHeader=$tableHeader."<tr><th>S.No</th><th>Name</th> <th>Register Number</th><th>Mobile Number</th> <th>Email Id</th><th>Address</th></tr>";
		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
			$tableHeader=$tableHeader."<tr><td>".$i."</td><td>".$row['first_name']."</td><td><a href='javascript:;' onclick=window.open('php/enterMarkWindow.php?userId=".$row['user_id']."&semesterId=".$semester."&departmentId=".$department."&batch=".$row['student_batch']."','','width=800,height=400')>".$row['user_name']."</a></td><td>".$row['mobile_number']."</td><td>".$row['email_id']."</td><td>".$row['address']."</td></tr>";
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
else if($tempSemester!="" && $tempDepartmentId!="" && $tempUserId!="")
{
	$sqlSubject="select sd.subject_name, md.mark from mapping_table mt, mark_details md, subject_details sd where mt.department_id='".$tempDepartmentId."' and mt.semester_id='".$tempSemester."' and mt.mapping_id=md.mapping_id and sd.subject_id=mt.subject_id and md.user_id='".$tempUserId."'";

	$results=mysql_query($sqlSubject,$conn);
	if(mysql_num_rows($results)==0)
	{
		echo "<center><label class='errorMessage'>No Records Found!</label></center>";exit;
	}
	$totalMark=0;
	$status=0;
	$table="";
	$table=$table."<table border='1' align='center' class='tableStyle'><tr><th>SUBJECT NAME</th><th>MARK</th><th>RESULT</th></tr>";
	while($rowSubject=mysql_fetch_assoc($results))
	{
		$table=$table."<tr><td>".$rowSubject['subject_name']."</td><td>".$rowSubject['mark']."</td><td>";
		if($rowSubject['mark']<35)
		{
			$table=$table."FAIL";
			$status++;
		}
		else
		{
			$table=$table."PASS";
		}
		$table=$table."</td></tr>";
		$totalMark=$totalMark+$rowSubject['mark'];
	}
	$table=$table."<tr><th>TOTAL</th><th>".$totalMark."</th><th>";
	if($status==0)
	{
		$table=$table."PASS";
	}
	else
	{
		$table=$table."FAIL";
	}
	$table=$table."</th></tr></table>";
	echo $table;
}
else if($semesterId!="" && $tempDepartmentId!="" && $tempStudentBatch!="")
{
	$sqlSubject="select sd.subject_name from mapping_table mt, subject_details sd where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and sd.batch='".$tempStudentBatch."' and mt.subject_id=sd.subject_id";
	$results=mysql_query($sqlSubject,$conn);
	if(mysql_num_rows($results)==0)
	{
		echo "<center><label class='errorMessage'>No Records Found!</label></center>";exit;
	}
	$table="";
	$table=$table."<table border='1' align='center'>";
	$table.="<tr><th>SUBJECT NAME</th></tr>";
	while($rowSubject=mysql_fetch_assoc($results))
	{
		$table=$table."<tr><td><ul><li>".$rowSubject['subject_name']."</ul></td></tr>";
	}
	$table=$table."</table>";
	echo $table;
}
else
{
	echo "<center><label class='errorMessage'>Select the Details!</label></center>";
}
?>
