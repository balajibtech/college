<?php

class dataBaseConnection
{
	var $con;

	function getConnection()
	{
		$this->con=mysql_connect("localhost","root","balaji") or die("Error:".mysql_error());

		$db=mysql_select_db("college",$this->con) or die("Error:".mysql_error());
	
	}
}
$dataBaseConnection=new dataBaseConnection();
$dataBaseConnection->getConnection();
$conn=$dataBaseConnection->con;
?>