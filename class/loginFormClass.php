<?php

session_start();

class loginFormClass
{
	var $connect;
	function viewDetails($field,$tableName,$condition)
	{
		$sqlFunc='select '.$field.' from '.$tableName.' where '.$condition;
		$resultFunc=mysql_query($sqlFunc,$this->connect);
		if(mysql_num_rows($resultFunc))
		{
			while($row=mysql_fetch_array($resultFunc))
			{
				$_SESSION['loginId']=$row['user_id'];
				$_SESSION['loginUser']=$row['user_name'];
				$_SESSION['loginType']=$row['user_type_id'];
				$_SESSION['loginTypeName']=$row['user_type_name'];
			}
			header("location:../index.php?page=home");
		}
		else
		{
			header("location:../index.php?message=invalid");
		}
			
	}
}

$loginFormClass=new loginFormClass();

$loginFormClass->connect=$conn;

$sqlType='select * from user_types';

$resultType=mysql_query($sqlType,$conn);

$i=0;
while($row=mysql_fetch_array($resultType))
{
	$userId[$i]=$row['user_type_id'];
	$userNameTypes[$i]=$row['user_type_name'];
	$i++;
}

?>
