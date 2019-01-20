<?php
require_once "../config/config.php";
$subjectName=$_POST['subjectName'];
$subjectId=$_POST['subjectId'];
$operation=$_GET['operation'];
$batch=$_POST['batch'];

if($operation=="edit")
{
	$commonClass->selectDetails("sd.subject_id","subject_details sd, mapping_table mt", "sd.subject_id='".$subjectId."' and sd.subject_name='".$subjectName."' and mt.subject_id=sd.subject_id and sd.batch='".$batch."'");

	if($commonClass->dataExist=="0" && $subjectName!="")
	{
		$sqlName="update subject_details set subject_name='".$subjectName."' where subject_id='".$subjectId."' and batch='".$batch."'";
		$result=mysql_query($sqlName,$conn);
		header("location:../index.php?page=editSubject&subjectId=".$subjectId."&message=updatedSuccess");
	}
	else
	{
		header("location:../index.php?page=editSubject&subjectId=".$subjectId."&message=userAlreadyExists");
	}
}
if($operation=="delete")
{
$subjectId=$_GET['subjectId'];
$departmentId=$_GET['departmentId'];
$mappingId=$_GET['mappingId'];

	$commonClass->selectDetails("md.mark_id","mark_details md, mapping_table mt, subject_details sd","mt.mapping_id='".$mappingId."' and mt.mapping_id=md.mapping_id and mt.department_id='".$departmentId."' and sd.subject_id='".$subjectId."' and sd.subject_id=mt.subject_id");

	if($commonClass->dataExist=="0")
	{
		$sqlMappingExists="select mapping_id from mapping_table where subject_id='".$subjectId."'";
		$resultMappingExists=mysql_query($sqlMappingExists,$conn);
		$mappingUsed=mysql_num_rows($resultMappingExists);
		if($mappingUsed=="1")
		{
			$sqlDelete="delete from subject_details where subject_id='".$subjectId."'";
			$result=mysql_query($sqlDelete,$conn);
		}
		$sqlMappingDelete="delete from mapping_table where mapping_id='".$mappingId."'";
		$mappingResult=mysql_query($sqlMappingDelete,$conn);
		header("location:../index.php?page=editDeleteSubject&message=deleteSucess");
	}
	else
	{
		header("location:../index.php?page=editDeleteSubject&message=notDeleted");
	}
}
?>
