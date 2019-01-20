<?php
	$sqlEdit="select * from department_details where department_id='".$_GET['departmentId']."' limit 1";
	$result=mysql_query($sqlEdit,$conn);
	
	while($row=mysql_fetch_assoc($result))
	{
		$department=$row;
		
	}
$smarty->assign('department',$department);
?>
