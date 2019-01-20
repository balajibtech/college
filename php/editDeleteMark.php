<?php
require_once "../config/config.php";
$userId=$_GET['userId'];
$semesterId=$_GET['semesterId'];
$departmentId=$_GET['departmentId'];

if($userId!="" && $semesterId!="" && $departmentId!="")
{
	$sqlMapping="select mapping_id from mapping_table where department_id='".$departmentId."' and semester_id='".$semesterId."'";
	$result=mysql_query($sqlMapping,$conn);
	while($rows=mysql_fetch_array($result))
	{
		$sqlDelete="delete from mark_details where user_id='".$userId."' and mapping_id='".$rows['mapping_id']."'";
		$resultDelete=mysql_query($sqlDelete,$conn);
	}
	header("location:../index.php?page=editDeleteMark&message=deletedSuccess");
}
else if($_POST['subjectNumber']!="")
{
	$getUserId=$_POST['getUserId'];
	$getSemesterId=$_POST['getSemesterId'];
	$getDepartmentId=$_POST['getDepartmentId'];
	$subjectNumber=$_POST['subjectNumber'];

	$sqlSubject="select mt.subject_id, md.mark_id from mapping_table mt, mark_details md where mt.semester_id='".$getSemesterId."' and mt.department_id='".$getDepartmentId."' and md.user_id='".$getUserId."' and mt.mapping_id=md.mapping_id";

	$resSubject=mysql_query($sqlSubject,$conn);

	while($rowSubject=mysql_fetch_array($resSubject))
	{
		$tempName='subject_'.$rowSubject['subject_id'];
		$sqlUpdate="update mark_details set mark='".$_POST[$tempName]."' where mark_id='".$rowSubject['mark_id']."'";
		$resUpdate=mysql_query($sqlUpdate,$conn);
		header("location:../index.php?page=editDeleteMark&message=UpdateSuccess");
	}
}
else
{
	header("location:../index.php?page=editDeleteMark&message=nullValue");
}
?>
