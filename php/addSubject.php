<?php
require_once "../config/config.php";

if($qualification!="" && $degree!="" && $department!="" && $batch!="" && $semester!="" && $numberOfSubject!="" && $numberOfSubject<11)
{
	$sqlSemester="select semester_id from semester_details where semester='".$semester."'";
	$resSemester=mysql_query($sqlSemester,$conn);
	while($row=mysql_fetch_array($resSemester))
	{
		$currentSemesterId=$row['semester_id'];
	}
	for($i=0;$i<$numberOfSubject;$i++)
	{
		$subjectName[]=trim($_POST['subjectName'.$i]);
		$commonClass->selectDetails("subject_id","subject_details","subject_name='".$subjectName[$i]."' and batch='".$batch."'");
		if($commonClass->dataExist=="0")
		{
			$sqlSubject="insert into subject_details values('','".$subjectName[$i]."','".$batch."')";
			$resSubject=mysql_query($sqlSubject,$conn);
		}
		else
		{
			header("location:../index.php?page=addSubject&message=alreadyExists");
		}
	} 
	
	for($i=0;$i<$numberOfSubject;$i++)
	{
		$subjectName[]=$_POST['subjectName'.$i];
		$sqlSubjectId="select subject_id from subject_details where subject_name='".$subjectName[$i]."' and batch='".$batch."'";
		$resSubjectId=mysql_query($sqlSubjectId,$conn);
		while($rowSubjectId=mysql_fetch_array($resSubjectId))
		{
			$commonClass->selectDetails("mapping_id","mapping_table","subject_id='".$rowSubjectId['subject_id']."' and department_id='".$department."'");
	
			if($commonClass->dataExist=="0")
			{
				$sqlMapping="insert into mapping_table values('','".$rowSubjectId['subject_id']."','".$currentSemesterId."','".$department."')";
				$resMapping=mysql_query($sqlMapping,$conn);
				header("location:../index.php?page=addSubject&message=addSuccess");
			}
			else
			{
				header("location:../index.php?page=addSubject&message=alreadyExists");
			}
		}
	}
}
else
{
header("location:../index.php?page=addSubject&message=nullValue");
}
?>
