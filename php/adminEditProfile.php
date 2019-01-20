<?php
	$sqlUser="select * from user_details where user_id='".$loginId."'and user_name='".$loginUser."' and user_type_id='".$loginTypeId."' limit 1";
	$result=mysql_query($sqlUser,$conn);
	
	while($row=mysql_fetch_assoc($result))
	{
		$user=$row;	
	}

$smarty->assign('user',$user);
?>
