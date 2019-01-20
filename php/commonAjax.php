<?php 
require_once "../config/config.php";

$displayTable=$_GET['fetchData'];

$tableName=$_GET['tableName'];

$fieldName=$_GET['fieldName'];

if($displayTable!="" && $tableName!="view" && $fieldName=="")
{
	$commonClass->selectDetails("department_id","department_details","qualification='".$displayTable."'");
	
	if($commonClass->dataExist!="0")
	{
		$sqlDisplay="select * from department_details where qualification='".$displayTable."'";
		
		$resDisplay=mysql_query($sqlDisplay,$conn);
		
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr>
			<th>S.No</th>
			<th>Degree</th>
			<th>Department Code</th>
			<th>Department Name</th>
			<th>Fees Details</th>
			</tr>";

		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
		$tableHeader=$tableHeader."<tr>
			<td>".$i."</td>
			<td>".$row['degree']."</td>
			<td>".$row['department_code']."</td>
			<td>".$row['department_name']."</td>
			<td>".$row['fees_details']."</td>
			</tr>";
		$i++;
		}
		$tableHeader=$tableHeader."</table>";
		echo $tableHeader;
	}
	else if($displayTable=="UGPG")
	{
		$sqlDisplay="select * from department_details";
		
		$resDisplay=mysql_query($sqlDisplay,$conn);
		
		$tableHeader="";
		$tableHeader=$tableHeader."<table border='1' align='center' class='tableStyle'>";
		$tableHeader=$tableHeader."<tr>
			<th>S.No</th>
			<th>Qualification</th>
			<th>Degree</th>
			<th>Department Code</th>
			<th>Department Name</th>
			<th>Fees Details</th>";
		if($tableName=="editDelete")
		{
			$tableHeader=$tableHeader."<th>Edit</th><th>Delete</th>";
		}
		$tableHeader=$tableHeader."</tr>";

		$i=1;

		while($row=mysql_fetch_array($resDisplay))
		{
		$tableHeader=$tableHeader."<tr>
			<td>".$i."</td>
			<td>".$row['qualification']."</td>
			<td>".$row['degree']."</td>
			<td>".$row['department_code']."</td>
			<td>".$row['department_name']."</td>
			<td>".$row['fees_details']."</td>";
		if($tableName=="editDelete")
		{
			$tableHeader=$tableHeader."<td><a href='index.php?page=editDepartment&departmentId=".$row['department_id']."&operation=edit'>Edit</a></td>
			<td><a href='php/departmentValidation.php?page=manipulateDepartmentAccount&departmentId=".$row['department_id']."&operation=delete' onclick='return confirmDelete();'>Delete</a></td>";
		}
		$tableHeader=$tableHeader."</tr>";

		$i++;
		}
		$tableHeader=$tableHeader."</table>";
		echo $tableHeader;
	}
	else
	{
		echo "<center>No Record Founds!</center>";
	}
}
if($tableName=="view" && $displayTable!="" && $fieldName=="degree")
{
	$commonClass->selectDetails("department_id","department_details","qualification='".$displayTable."'");
	
	if($commonClass->dataExist!="0")
	{
		
		$sqlDisplay="select ".$fieldName." from department_details where qualification='".$displayTable."' group by ".$fieldName;
		
		$resDisplay=mysql_query($sqlDisplay,$conn);
		
		$tableHeader="";
		$tableHeader=$tableHeader."<select name='".$fieldName."' id='".$fieldName."' onchange=selectOption(this.value,'view','department_code')>
		<option value='' selected>Select</option>";

		while($row=mysql_fetch_array($resDisplay))
		{			
			$tableHeader=$tableHeader."<option value='".$row[$fieldName]."'>".$row[$fieldName]."</option>";
		}
		$tableHeader=$tableHeader."</select>";
		echo $tableHeader;
	}	

}
if($tableName=="view" && $displayTable!="" && $fieldName=="department_code")
{
	$commonClass->selectDetails("department_code","department_details","degree='".$displayTable."'");

	if($commonClass->dataExist!="0")
	{
		$sqlDisplay="select ".$fieldName.",department_id from department_details where degree='".$displayTable."' group by ".$fieldName;
		
		$resDisplay=mysql_query($sqlDisplay,$conn);
		
		$tableHeader="";
		
		$tableHeader=$tableHeader."<select name='department' id='department' onchange=staffTable(this.value,'staff','edit')>
		<option value='' selected>Select</option>";

		while($row=mysql_fetch_array($resDisplay))
		{			
			$tableHeader=$tableHeader."<option value='".$row['department_id']."'>".$row[$fieldName]."</option>";
		}
		$tableHeader=$tableHeader."</select>";
		echo $tableHeader;
	}	
}
?>
