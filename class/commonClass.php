<?php

class commonClass
{
	var $dobDay=array();
	var $dobMonth=array();
	var $dobYear=array();
	var $conn;
	var $dataExist=0;

	function getDate()				//dob Function
	{
		for($i=0,$j=1;$j<=31;$i++,$j++)		//day
		{
			$this->dobDay[$i]=$j;
		}
		for($i=0,$j=1;$j<=12;$i++,$j++)		//month
		{
			$this->dobMonth[$i]=$j;
		}
		for($i=0,$j=2000;$j<=date("Y");$i++,$j++)	//year
		{
			$this->dobYear[$i]=$j;
		}
	}

	function selectDetails($field,$tableName,$condition)		//select table function
	{
		$sqlSelect='select '.$field.' from '.$tableName.' where '.$condition;

		$resSelect=mysql_query($sqlSelect,$this->conn);
		if($this->dataExist=mysql_num_rows($resSelect))
		{
			return $this->dataExist;
		}
		else
		{
			return $this->dataExist;
		}
			
	}
}

$commonClass=new commonClass();

$commonClass->getDate();

$commonClass->conn=$dataBaseConnection->con;

?>
