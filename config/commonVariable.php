<?php
$firstName=trim($_POST['firstName']);
$userName=trim($_POST['userName']);

$accountUserTypeId=trim($_GET['userTypeName']);
$studentBatch=trim($_GET['studentBatch']);
$whichUser=trim($_GET['whichUser']);
$department=$_GET['department'];
$operation=trim($_GET['operation']);

$semester=trim($_GET['semester']);
$semesterId=trim($_GET['semesterId']);
$tempUserId=trim($_GET['tempUserId']);
$tempDepartmentId=trim($_GET['tempDepartmentId']);
$tempSemester=trim($_GET['tempSemester']);

$passwordSelect=trim($_POST['passwordSelect']);
$userPassword=trim($_POST['userPassword']);
$oldPassword=trim($_POST['oldPassword']);
$newPassword=trim($_POST['newPassword']);
$confirmPassword=trim($_POST['confirmPassword']);

$securityQuestion=trim($_POST['securityQuestion']);
$securityAnswer=trim($_POST['securityAnswer']);

$gender=trim($_POST['gender']);
$dob=trim($_POST['dob']);
$designation=trim($_POST['designation']);

$qualification=trim($_POST['qualification']);
$degree=trim($_POST['degree']);
$department=trim($_POST['department']);

$year=trim($_POST['year']);
$semester=trim($_POST['semester']);
$numberOfSubject=trim($_POST['numberOfSubject']);

$salary=trim($_POST['salary']);
$batch=trim($_POST['batch']);

$mobileNumber=trim($_POST['mobileNumber']);
$emailId=trim($_POST['emailId']);
$contactAddress=trim($_POST['contactAddress']);

$resumeName=$_FILES['resume']['name'];
$resumeTempPath=$_FILES['resume']['tmp_name'];
$resumeType=$_FILES['resume']['type']; 
$resumeSize=$_FILES['resume']['size'];
$resumeError=$_FILES['resume']['error'];

$photoName=$_FILES['photo']['name'];
$photoTempPath=$_FILES['photo']['tmp_name'];
$photoType=$_FILES['photo']['type']; 
$photoSize=$_FILES['photo']['size'];
$photoError=$_FILES['photo']['error'];

$resumePathName='Resume/'.time().$resumeName;
$photoPathName='Photo/'.time().$photoName;

$resumeLocationName=$basePath.'Resume/'.time().$resumeName;
$photoLocationName=$basePath.'Photo/'.time().$photoName;
?>
