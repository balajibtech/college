<?php

require_once "../config/config.php";

$departmentId=$_GET['departmentId'];	//delete
$operation=$_GET['operation'];
$page=$_GET['page'];

$qualification=$_POST['qualification'];
$degree=$_POST['degree'];
$departmentCode=$_POST['departmentCode'];
$departmentName=$_POST['departmentName'];
$fees=$_POST['fees'];

//ADD DETAILS

if($degree!="" && $departmentCode!="" && $departmentName!="" && $fees!="" && $operation=="" && $departmentId=="")
{
	$commonClass->selectDetails("department_id","department_details","qualification='".$qualification."' and degree='".$degree."' and department_code='".$departmentCode."' and department_name='".$departmentName."' and fees_details='".$fees."'");
	
	if($commonClass->dataExist=="0")
	{
		$sql='insert into department_details values("","'.$qualification.'","'.$degree.'","'.$departmentCode.'","'.$departmentName.'","'.$fees.'")';
		$res=mysql_query($sql,$conn);
		if($res)
		{
			header("location:../index.php?page=createDepartment&message=departmentAdded");
		}
		else
		{
			echo "Error:".mysql_error();
		}
	}
	else
	{
		header("location:../index.php?page=createDepartment&message=alreadyExists");
	}
}

//DELETE DETAILS
else if($departmentId!="" && $operation=="delete")
{
	$commonClass->selectDetails("ud.department_id","department_details dd, user_details ud","ud.department_id=dd.department_id and dd.department_id='".$departmentId."'");
	if($commonClass->dataExist=="0")
	{
		$sqlDelete="delete from department_details where department_id='".$departmentId."' limit 1";
		$result=mysql_query($sqlDelete,$conn);
		if($result)
		{
		header("location:../index.php?page=manipulateDepartmentAccount&message=departmentDeleted");
		}
		else
		{
			echo "Error:".mysql_error();
		}
	}
	else
	{
		header("location:../index.php?page=manipulateDepartmentAccount&message=notDeleted");
	}
}

//EDIT DETAILS
else if($degree!="" && $departmentCode!="" && $departmentName!="" && $fees!="" && $departmentId!="" && $operation=="edit")
{
	$commonClass->selectDetails("department_id","department_details","qualification='".$qualification."' and degree='".$degree."' and department_code='".$departmentCode."' and department_name='".$departmentName."' and fees_details='".$fees."'");
	
	if($commonClass->dataExist=="0")
	{
		$sqlEdit="update department_details set qualification='".$qualification."', degree='".$degree."', department_code='".$departmentCode."', department_name='".$departmentName."', fees_details='".$fees."' where department_id='".$departmentId."' limit 1";

		$result=mysql_query($sqlEdit,$conn);
		if($result)
		{
			header("location:../index.php?page=manipulateDepartmentAccount&message=departmentUpdated");
		}
		else
		{
			echo "Error:".mysql_error();
		}
	}
	else
	{
		header("location:../index.php?page=manipulateDepartmentAccount&message=alreadyExists");
	}
}
else
{
	header("location:../index.php?page=".$page."&message=nullValue");
}

?>
