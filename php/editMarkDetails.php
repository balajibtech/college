<?php
require_once "../config/config.php";
$semesterId=$_GET['semesterId'];
$tempDepartmentId=$_GET['tempDepartmentId'];
$studentBatch=$_GET['studentBatch'];
$operation=$_GET['operation'];
if($semesterId!="" && $tempDepartmentId!="" && $studentBatch!="" && $operation=="editDelete")
{
	$tableDisplay="";
	$tableDisplay=$tableDisplay."<table align='center' border='1' width='75%'>";
	$sqlSubject="select sd.subject_name from subject_details sd, mapping_table mt where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and mt.subject_id=sd.subject_id";
	$resSubject=mysql_query($sqlSubject,$conn);
	$tableDisplay=$tableDisplay."<tr><th>EDIT</th><th>DELETE</th><th>REGETER NUMBER</td>";
	while($rowSubject=mysql_fetch_array($resSubject))
	{
		$tableDisplay=$tableDisplay."<th>".strtoupper($rowSubject['subject_name'])."</th>";
	}
	$tableDisplay=$tableDisplay."</tr>";
	$sqlMark="select ud.user_name, md.mark,ud.user_id from user_details ud, mark_details md, subject_details sd, mapping_table mt where mt.semester_id='".$semesterId."' and mt.department_id='".$tempDepartmentId."' and mt.subject_id=sd.subject_id and mt.mapping_id=md.mapping_id and ud.student_batch='".$studentBatch."' and ud.user_id=md.user_id";
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
			$tableDisplay.="<tr><td><a href='index.php?page=editMark&userId=".$rowMark['user_id']."&semesterId=".$semesterId."&departmentId=".$tempDepartmentId."'>Edit</a></td><td><a href='php/editDeleteMark.php?userId=".$rowMark['user_id']."&semesterId=".$semesterId."&departmentId=".$tempDepartmentId."' onclick='return confirmDelete()'>Delete</a></td><td>".$rowMark['user_name']."</td>";		
		if($rowMark['user_name']!=$tempName  && $tempName!='')
			$tableDisplay.="</tr><tr><td><a href='index.php?page=editMark&userId=".$rowMark['user_id']."&semesterId=".$semesterId."&departmentId=".$tempDepartmentId."'>Edit</a></td><td><a href='php/editDeleteMark.php?userId=".$rowMark['user_id']."&semesterId=".$semesterId."&departmentId=".$tempDepartmentId."' onclick='return confirmDelete()'>Delete</a></td><td>".$rowMark['user_name']."</td>";

		//$tableDisplay.="<td>".$rowMark['user_name']."</td>";
		$tableDisplay.="<td>".$rowMark['mark']."</td>";

		$tempName=$rowMark['user_name'];
	}
	$tableDisplay.="</tr>";
	$tableDisplay.="</table>";
	echo $tableDisplay;
}
else
{
	echo "<center><label class='errorMessage'>Select The Details!</label></center>";
}
?>
