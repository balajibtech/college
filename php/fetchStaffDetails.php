<?php
	$sqlStaff="select ud.*, dd.* from user_details ud, department_details dd where ud.user_id='".$_GET['userId']."' and ud.department_id=dd.department_id limit 1";
	$result=mysql_query($sqlStaff,$conn);
	
	while($row=mysql_fetch_assoc($result))
	{
		$staff=$row;	
	}

$smarty->assign('staff',$staff);
?>
