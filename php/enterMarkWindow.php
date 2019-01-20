<head>
<link href="../css/default.css" rel="stylesheet"></link>
<script src="../js/common.js"></script>
<script src="../js/mark.js"></script>
</head>
<?php
require_once "../config/config.php";
//ini_set('display_errors',1);
$userId=$_REQUEST['userId'];
$departmentId=$_REQUEST['departmentId'];
$semesterId=$_REQUEST['semesterId'];
$tempBatch=$_REQUEST['batch'];
if(isset($loginId))
{
	if($_POST['addMarkDetails']!="Add Mark")
	{
		echo "<label class='labelText'>Welcome ".$loginUser."!</label>";
		echo "<div class='heading'>ENTER THE MARKS</div>";

		$sqlSubject="select subject_id from mapping_table where semester_id='".$semesterId."' and department_id='".$departmentId."'";
		$resSubject=mysql_query($sqlSubject,$conn);
		$numSubject=mysql_num_rows($resSubject);
		
		while($rowSubject=mysql_fetch_array($resSubject))
		{
			$subjectId[]=$rowSubject['subject_id'];
		}

		$sql2="select ud.first_name, ud.user_name, dd.department_name from user_details ud, department_details dd where ud.user_id='".$userId."' and ud.department_id=dd.department_id";
		$res2=mysql_query($sql2,$conn);

		while($row2=mysql_fetch_array($res2))
		{
			$firstName=$row2['first_name'];
			$userName=$row2['user_name'];
			$departmentName=$row2['department_name'];
		}
		$table="";
		$table=$table."<form name='enterMark' method='POST' action='".$_SERVER['PHP_SELF']."' onsubmit='return addMark();'>";
		$table=$table."<table align='center'><tr><td>&nbsp;</td></tr>";
		$table=$table."<tr><td><label class='labelText'>NAME</label></td><td><label>".$firstName."</label></td>" ;
		$table=$table."<td><label class='labelText'>REGISTER NUMBER</label></td><td><label>".$userName."</label></td></tr>" ;
		$table=$table."<tr><td><label class='labelText'>DEPARTMENT NAME</label></td><td><label>".$departmentName."</label></td>" ;
		$table=$table."<td><label class='labelText'>SEMESTER</label></td><td><label>".$semesterId."</label></td></tr><tr><td>&nbsp;</td></tr>" ;
		if($numSubject==0)
		{
			$table=$table."</table>";
			echo $table."<br/><center><label class='errorMessage'>Subject Details does not Exists!</label></center>";exit;
		}
		foreach($subjectId as $subjectName)
		{
			$sql1="select * from subject_details where subject_id='".$subjectName."' and batch='".$tempBatch."' order by subject_id";
			$res1=mysql_query($sql1,$conn);
	
			while($row1=mysql_fetch_array($res1))
			{
				$table=$table."<tr><td></td><td><label class='labelText'>".strtoupper($row1['subject_name'])."</label><label class='mandatoryStar'>*</label></td><td><input type='text' name='subject_".$row1['subject_id']."' id='subject_".$row1['subject_id']."' onblur=\"markValidate('subject_".$row1['subject_id']."','".$row1['subject_name']."')\" ></td><td></td></tr>" ;
			}
		}

		$table=$table."<tr><td>&nbsp;</td></tr><tr><td></td><td align='right'><input type='submit' name='addMarkDetails' value='Add Mark'></td><td><input type='reset' value='Clear'></td><td></td></tr>";
		$table=$table."</table><input type='hidden' name='userId' value='".$userId."'><input type='hidden' name='departmentId' value='".$departmentId."'><input type='hidden' name='semesterId' value='".$semesterId."'>";
		$table=$table."</form>";
		echo $table;
	}

	if($_POST['addMarkDetails']=="Add Mark")
	{
		$sqlInsert="select sd.subject_name, mt.subject_id, mt.mapping_id from mapping_table mt, subject_details sd where mt.subject_id=sd.subject_id and mt.semester_id='".$semesterId."' and mt.department_id='".$departmentId."' order by mt.subject_id";

		$resInsert=mysql_query($sqlInsert,$conn);
		while($rowInsert=mysql_fetch_array($resInsert))
		{
			$fetchSubjectName='';
			$temp='subject_'.$rowInsert['subject_id'];		
			$fetchSubjectName[]=trim($_POST[$temp]);
			foreach($fetchSubjectName as $storeMark)
			{
				$commonClass->selectDetails("mark_id","mark_details","user_id='".$userId."' and mapping_id='".$rowInsert['mapping_id']."'");
				if($commonClass->dataExist=="0" && $storeMark!="")
				{
					$sqlMarkInsert="insert into mark_details values('', '".$userId."', '".$rowInsert['mapping_id']."', '".$storeMark."')";
					$resMarkInsert=mysql_query($sqlMarkInsert,$conn) or die(mysql_error);
					echo "Mark Details Inserted Successfully"; 
?><script> alert("Mark Details Inserted Successfully"); window.close(); </script>
<?php		}
				else
				{
					echo "Mark Details Already Inserted"; 
?><script> alert("Mark Details Already Inserted/Null Value Not Inserted"); window.close(); </script>
<?php		}
			}
		}
	}
}
else
{
	header("location:../index.php");
}
?>
