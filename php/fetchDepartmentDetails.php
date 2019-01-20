<?php
$sqlDepartmentFetch="select department_code, department_id from department_details group by degree order by department_code";
$resultDepartment=mysql_query($sqlDepartmentFetch,$conn);

while($rowDept=mysql_fetch_assoc($resultDepartment))
{
$departmentCode[]=$rowDept['department_code'];
$fetchDepartmentId[]=$rowDept['department_id'];
}
$smarty->assign('departmentCode',$departmentCode);
$smarty->assign('departmentId',$fetchDepartmentId);

$sqlSem="select * from semester_details";
$resSem=mysql_query($sqlSem,$conn);

while($rowSem=mysql_fetch_assoc($resSem))
{
$semester[]=$rowSem['semester'];
$fetchSemesterId[]=$rowSem['semester_id'];
}

$smarty->assign('semester',$semester);
$smarty->assign('semesterId',$fetchSemesterId);
?>
