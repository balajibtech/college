<?php
require_once "../config/config.php";
mysql_close($conn);						//close the mysql connection
session_destroy();						//Clear The Session
header("location:../index.php");
?>
