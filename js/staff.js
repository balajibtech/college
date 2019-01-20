function staffEditDelete(getUser,operation)
{
	var department=document.getElementById('department').value;
	if(department!="")
	{
		if(window.XMLHttpRequest)
		{
			var staffData=new XMLHttpRequest();
		}
		else
		{
			var staffData=new ActiveXObject("Microsoft.XMLHTTP");
		}
		staffData.onreadystatechange=function()
		{
			if(staffData.readyState==4 && staffData.status==200)
			{
				document.getElementById('editStaffTable').innerHTML=staffData.responseText;
			}
		}
		url=realPath+"php/editDeleteAccount.php?getUser="+getUser+"&operation="+operation+"&department="+department;
		staffData.open("GET",url,true);
		staffData.send();
	}
	else
	{
		document.getElementById('editStaffTable').innerHTML="<center><label class='errorMessage'>Select The Department!</label></center>";
	}
}

function studentEditDelete(getUser,operation)
{
	var batch=document.getElementById('batch').value;
	var department=document.getElementById('department').value;
	if(department!="" && batch!="")
	{
		if(window.XMLHttpRequest)
		{
			var studentData=new XMLHttpRequest();
		}
		else
		{
			var studentData=new ActiveXObject("Microsoft.XMLHTTP");
		}
		studentData.onreadystatechange=function()
		{
			if(studentData.readyState==4 && studentData.status==200)
			{
				document.getElementById('editDeleteStudentTable').innerHTML=studentData.responseText;
			}
		}
		url=realPath+"php/editDeleteAccount.php?getUser="+getUser+"&operation="+operation+"&department="+department+"&batch="+batch;
		studentData.open("GET",url,true);
		studentData.send();
	}
	else
	{
		document.getElementById('editDeleteStudentTable').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}
}
