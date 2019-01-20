<?php
$subjectId=$_GET['subjectId'];
$sqlSubjectName="select * from subject_details where subject_id='".$subjectId."'";
$results=mysql_query($sqlSubjectName,$conn);
while($rowSubject=mysql_fetch_array($results))
{
	$subject=$rowSubject;
}
$smarty->assign("subject",$subject);
?>
