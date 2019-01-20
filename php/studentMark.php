<?php
require_once "../config/config.php";
$semesterId=$_GET['semesterId'];
$tempDepartmentId=$_GET['tempDepartmentId'];
$studentBatch=$_GET['studentBatch'];
$batch=$_GET['batch'];
if($semesterId!="" && $tempDepartmentId!="" && $studentBatch!="")
{
	$tableDisplay="";
	$tableDisplay=$tableDisplay."<table align='center' border='1'>";
	$sqlSubject="select sd.subject_name from subject_details sd, mapping_table mt where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and mt.subject_id=sd.subject_id";
	$resSubject=mysql_query($sqlSubject,$conn);
	$tableDisplay=$tableDisplay."<tr><td>RESIGETER NUMBER</td>";
	while($rowSubject=mysql_fetch_array($resSubject))
	{
		$tableDisplay=$tableDisplay."<td>".strtoupper($rowSubject['subject_name'])."</td>";
	}
	$tableDisplay=$tableDisplay."</tr>";
	$sqlMark="select ud.user_name, md.mark from user_details ud, mark_details md, subject_details sd, mapping_table mt where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and mt.subject_id=sd.subject_id and mt.mapping_id=md.mapping_id and ud.student_batch='".$studentBatch."' and ud.user_id=md.user_id";
	$resMark=mysql_query($sqlMark,$conn);
	if(mysql_num_rows($resMark)==0)
	{
		echo "<center><label class='errorMessage'>No Records Found!</label></center>";exit;
	}
	$tempName="";
		
	while($rowMark=mysql_fetch_array($resMark))
	{
		//print_r($rowMark);
		if($tempName=='' )
			$tableDisplay.="<tr><td>".$rowMark['user_name']."</td>";		
		if($rowMark['user_name']!=$tempName  && $tempName!='')
			$tableDisplay.="</tr><tr><td>".$rowMark['user_name']."</td>";

		//$tableDisplay.="<td>".$rowMark['user_name']."</td>";
		$tableDisplay.="<td>".$rowMark['mark']."</td>";

		$tempName=$rowMark['user_name'];
	}
	$tableDisplay.="</tr>";
	$tableDisplay.="</table>";
	echo $tableDisplay;
}
else if($semesterId!="" && $tempDepartmentId!="" && $batch!="")
{
	$sqlSubject="select sd.subject_name, sd.subject_id, mt.mapping_id from mapping_table mt, subject_details sd where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and mt.subject_id=sd.subject_id and sd.batch='".$batch."'";
	$results=mysql_query($sqlSubject,$conn);
	if(mysql_num_rows($results)==0)
	{
	echo "<center><label class='errorMessage'>NO RECORDS FOUND!</label></center>";exit;
	}
	$table="";
	$table=$table."<table border='1' align='center'>";
	$table.="<tr><th>SUBJECT NAME</th><th>EDIT</th><th>DELETE</th></tr>";
	while($rowSubject=mysql_fetch_assoc($results))
	{
		$table=$table."<tr><td><ul><li>".$rowSubject['subject_name']."</ul></td><td><a href='index.php?page=editSubject&subjectId=".$rowSubject['subject_id']."'>EDIT</a></td><td><a href='php/updateSubject.php?subjectId=".$rowSubject['subject_id']."&mappingId=".$rowSubject['mapping_id']."&departmentId=".$tempDepartmentId."&semesterId=".$semesterId."&operation=delete' onclick='return confirmDelete()'>DELETE</a></td></tr>";
	}
	$table=$table."</table>";
	echo $table;
}
else
{
	echo "<center><label class='errorMessage'>No Records Found!</label></center>";
}
?>

