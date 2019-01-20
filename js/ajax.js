function fetchTable(getValue,getName)					//fetch the table using ajax
{
	if(window.XMLHttpRequest)
	{
		var fetchData=new XMLHttpRequest();
	}
	else
	{
		var fetchData=new ActiveXObject("Microsoft.XMLHTTP");
	}
	fetchData.onreadystatechange=function()
	{
		if(fetchData.readyState==4 && fetchData.status==200)
		{
			document.getElementById('tableDisplay').innerHTML=fetchData.responseText;
		}
	}
	url=realPath+"php/commonAjax.php?fetchData="+getValue+"&tableName="+getName;
	fetchData.open("GET",url,true);
	fetchData.send();
}


function selectOption(getValue,getName,fieldName)			//fetch the table using ajax
{
	if(getValue!="")
	{
		if(window.XMLHttpRequest)
		{
			var fetchData=new XMLHttpRequest();
		}
		else
		{
			var fetchData=new ActiveXObject("Microsoft.XMLHTTP");
		}
		fetchData.onreadystatechange=function()
		{
		   if(fetchData.readyState==4 && fetchData.status==200)
		   {
			if(fieldName=="degree")
			{
				document.getElementById('selectdegree').innerHTML=fetchData.responseText;
				document.getElementById('selectDepartment').innerHTML="<select id='department'><option value=''>Select</option></select>";
			}
			if(fieldName=="department_code")
			{
				document.getElementById('selectDepartment').innerHTML=fetchData.responseText;
			}
		    }
		}
		url=realPath+"php/commonAjax.php?fetchData="+getValue+"&tableName="+getName+"&fieldName="+fieldName;
		fetchData.open("GET",url,true);
		fetchData.send();
	}
	else
	{
		document.getElementById('viewStaffTable').innerHTML="<center><label class='errorMessage'>Select The Details</label></center>";
		if(fieldName=="degree")
		{
			document.getElementById('selectdegree').innerHTML="<select><option value=''>Select</option></select>";
			document.getElementById('selectDepartment').innerHTML="<select id='department'><option value=''>Select</option></select>";
		}
		if(fieldName=="department_code")
		{
			document.getElementById('selectDepartment').innerHTML="<select id='department'><option value=''>Select</option></select>";
		}
	}	
}

function staffTable(getValue,getUser,operation)			//fetch the table using ajax
{
	if(getValue!="")
	{document.getElementById('oneStaffTable').innerHTML="";
		if(window.XMLHttpRequest)
		{
			var staffDetails=new XMLHttpRequest();
		}
		else
		{
			var staffDetails=new ActiveXObject("Microsoft.XMLHTTP");
		}
		staffDetails.onreadystatechange=function()
		{
		   if(staffDetails.readyState==4 && staffDetails.status==200)
		   {
			if(operation!="staffView")
			{document.getElementById('viewStaffTable').innerHTML=staffDetails.responseText;}
			else if(operation=="staffView")
			{document.getElementById('oneStaffTable').innerHTML=staffDetails.responseText;}
			
		    }
		}
		url=realPath+"php/staffTableDisplay.php?staffDetails="+getValue+"&whichUser="+getUser+"&operation="+operation;
		staffDetails.open("GET",url,true);
		staffDetails.send();
	}
	else
	{
		document.getElementById('viewStaffTable').innerHTML="<center><label class='errorMessage'>Select The Details</label></center>";
	}	
}

function studentTable(getUser)			//fetch the table using ajax
{
var department=document.getElementById('department').value;
var studentBatch=document.getElementById('batch').value;
	if(department!="" || studentBatch!="" || getUser!="student")
	{
		if(window.XMLHttpRequest)
		{
			var studentDetails=new XMLHttpRequest();
		}
		else
		{
			var studentDetails=new ActiveXObject("Microsoft.XMLHTTP");
		}
		studentDetails.onreadystatechange=function()
		{
		   if(studentDetails.readyState==4 && studentDetails.status==200)
		   {
			if(getUser=="student"){document.getElementById('viewStudentTable').innerHTML=studentDetails.responseText;}
			if(getUser!="student"){document.getElementById('oneStudentTable').innerHTML=studentDetails.responseText;}
		    }
		}
		url=realPath+"php/studentTableDisplay.php?studentBatch="+studentBatch+"&whichUser="+getUser+"&department="+department;
		studentDetails.open("GET",url,true);
		studentDetails.send();
	}
	else
	{
		document.getElementById('viewStudentTable').innerHTML="<center><label class='errorMessage'>Select The Details</label></center>";
	}	
}

function studentViewAll(getUser)			//fetch the table using ajax
{
	document.getElementById('viewStudentTable').innerHTML="";
	document.getElementById('oneStudentTable').innerHTML="";
	if(getUser!="")
	{
		if(window.XMLHttpRequest)
		{
			var studentDetails=new XMLHttpRequest();
		}
		else
		{
			var studentDetails=new ActiveXObject("Microsoft.XMLHTTP");
		}
		studentDetails.onreadystatechange=function()
		{
		   if(studentDetails.readyState==4 && studentDetails.status==200)
		   {
			document.getElementById('viewStudentTable').innerHTML=studentDetails.responseText;
		    }
		}
		url=realPath+"php/studentTableDisplay.php?whichUser="+getUser+"&operation=viewAll";
		studentDetails.open("GET",url,true);
		studentDetails.send();
	}
	else
	{
		document.getElementById('viewStudentTable').innerHTML="<center><label class='errorMessage'>Select The Details</label></center>";
	}	
}
