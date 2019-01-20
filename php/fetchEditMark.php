<?php
$userId=$_GET['userId'];
$semesterId=$_GET['semesterId'];
$departmentId=$_GET['departmentId'];
$sqlFetchSubject="select sd.subject_name, sd.subject_id , md.mark from subject_details sd, mark_details md, mapping_table mt where mt.department_id='".$departmentId."' and mt.semester_id='".$semesterId."' and md.user_id='".$userId."' and mt.subject_id=sd.subject_id and mt.mapping_id=md.mapping_id order by sd.subject_id";

$resFetchSubject=mysql_query($sqlFetchSubject,$conn);
$subjectNumber=mysql_num_rows($resFetchSubject);

while($rowSubject=mysql_fetch_assoc($resFetchSubject))
{
	$subjectName[]=$rowSubject;
}
$smarty->assign("subjectName",$subjectName);
$smarty->assign("getUserId",$userId);
$smarty->assign("getDepartmentId",$departmentId);
$smarty->assign("getSemesterId",$semesterId);
$smarty->assign("subjectNumber",$subjectNumber);
?>
