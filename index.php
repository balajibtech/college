<?php
require_once "config/config.php";				//config,session,smarty files
$smarty->assign("userId",$userId);

$smarty->assign("realPath",$realPath);				//path assign to tpl

$smarty->assign("userNameTypes",$userNameTypes);

$smarty->assign("departmentId",$_GET['departmentId']);

$smarty->assign("message",$_REQUEST['message']);		//login error message

$smarty->assign("password",$_REQUEST['password']);

$smarty->assign("pageRedirect",$_REQUEST['page'].'.tpl');	//page redirect

$smarty->assign("menuFile",$loginTypeName.'MainMenu.tpl');		//mainmenu redirect

$smarty->assign("loginTypeId",$loginTypeId);			//login user type validate

$smarty->assign("loginUser",$loginUser);

if($_GET['departmentId']!="" && $_GET['operation']=="edit")
{
require_once $basePath."php/editDepartment.php";
}

if($_REQUEST['page']==$loginTypeName."EditProfile")
{
require_once $basePath."php/adminEditProfile.php";
}

if($_REQUEST['page']=="editStaff" || $_REQUEST['page']=="editStudent")
{
require_once $basePath."php/fetchStaffDetails.php";
}
if($_REQUEST['page']=="studentViewMark")
{
require_once $basePath."php/fetchMarkDetails.php";
}
if($_REQUEST['page']=="editSubject")
{
require_once $basePath."php/editDeleteSubject.php";
}
if($_REQUEST['page']=="editMark")
{
require_once $basePath."php/fetchEditMark.php";
}
require_once $basePath."php/fetchDepartmentDetails.php";
$smarty->assign("dobDay",$commonClass->dobDay);

$smarty->assign("dobMonth",$commonClass->dobMonth);

$smarty->assign("dobYear",$commonClass->dobYear);

$smarty->display("index.tpl");
?>
