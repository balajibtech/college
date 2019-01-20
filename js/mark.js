function markTable(getUser)			//fetch the table using ajax
{
var department=document.getElementById('department').value;
var studentBatch=document.getElementById('batch').value;
var semester=document.getElementById('semester').value;
	if(department!="" && studentBatch!="" && getUser=="student" && semester!="")
	{
		if(window.XMLHttpRequest)
		{
			var markDetails=new XMLHttpRequest();
		}
		else
		{
			var markDetails=new ActiveXObject("Microsoft.XMLHTTP");
		}
		markDetails.onreadystatechange=function()
		{
		   if(markDetails.readyState==4 && markDetails.status==200)
		   {
			document.getElementById('viewStudentTable').innerHTML=markDetails.responseText;
			if(markDetails.responseText!="<center><label class='errorMessage'>No Records Found!</label></center>")
			{document.getElementById('batch').disabled="true";
			document.getElementById('department').disabled="true";
			document.getElementById('semester').disabled="true";
			document.getElementById('qualification').disabled="true";
			document.getElementById('degree').disabled="true";
			}
		    }
		}
		url=realPath+"php/addMark.php?studentBatch="+studentBatch+"&whichUser="+getUser+"&department="+department+"&semester="+semester;
		markDetails.open("GET",url,true);
		markDetails.send();
	}
	else
	{
		document.getElementById('viewStudentTable').innerHTML="<center><label class='errorMessage'>Select The Details</label></center>";
	}	
}

function viewStudentMark()
{
var tempFirstName=document.getElementById('firstName').value;
var tempUserName=document.getElementById('userName').value;
var tempUserId=document.getElementById('userId').value;
var tempDepartmentId=document.getElementById('department').value;
var tempSemester=document.getElementById('semester').value;
	if(tempSemester!="")
	{
		if(window.XMLHttpRequest)
		{
			var viewMark=new XMLHttpRequest();
		}
		else
		{
			var viewMark=new ActiveXObject("Microsoft.XMLHTTP");
		}
		viewMark.onreadystatechange=function()
		{
		   if(viewMark.readyState==4 && viewMark.status==200)
		   {
			document.getElementById('viewStudentMarkDetails').innerHTML=viewMark.responseText;
		   }
		}
		url=realPath+"php/addMark.php?tempUserId="+tempUserId+"&tempDepartmentId="+tempDepartmentId+"&tempSemester="+tempSemester;
		viewMark.open("GET",url,true);
		viewMark.send();
	}
	else
	{
document.getElementById('viewStudentMarkDetails').innerHTML="<center><label class='errorMessage'>Select The Semester!</label></center>";
	}	
}

function viewSubjectDetails()
{
var semesterId=document.getElementById('semester').value;
var department=document.getElementById('department').value;
var tempStudentBatch=document.getElementById('batch').value;
	if(semesterId!="" && department!="" && tempStudentBatch!="")
	{
		if(window.XMLHttpRequest)
		{
			var viewSubject=new XMLHttpRequest();
		}
		else
		{
			var viewSubject=new ActiveXObject("Microsoft.XMLHTTP");
		}
		viewSubject.onreadystatechange=function()
		{
		   if(viewSubject.readyState==4 && viewSubject.status==200)
		   {
			document.getElementById('viewSubjectDetails').innerHTML=viewSubject.responseText;
		   }
		}
		url=realPath+"php/addMark.php?semesterId="+semesterId+"&tempDepartmentId="+department+"&tempStudentBatch="+tempStudentBatch;
		viewSubject.open("GET",url,true);
		viewSubject.send();
	}
	else
	{
document.getElementById('viewSubjectDetails').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}	
}

function viewStudentMark()
{
var semesterId=document.getElementById('semester').value;
var department=document.getElementById('department').value;
var studentBatch=document.getElementById('batch').value;

	if(semesterId!="" && department!="" && studentBatch!="")
	{
		if(window.XMLHttpRequest)
		{
			var viewStudent=new XMLHttpRequest();
		}
		else
		{
			var viewStudent=new ActiveXObject("Microsoft.XMLHTTP");
		}
		viewStudent.onreadystatechange=function()
		{
		   if(viewStudent.readyState==4 && viewStudent.status==200)
		   {
			document.getElementById('displayStudentMark').innerHTML=viewStudent.responseText;
		   }
		}
		url=realPath+"php/studentMark.php?semesterId="+semesterId+"&tempDepartmentId="+department+"&studentBatch="+studentBatch;
		viewStudent.open("GET",url,true);
		viewStudent.send();
	}
	else
	{
		document.getElementById('displayStudentMark').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}	
}

function editDeleteSubjectDetails()
{
var semesterId=document.getElementById('semester').value;
var department=document.getElementById('department').value;
var batch=document.getElementById('batch').value;
	if(semesterId!="" && department!="")
	{
		if(window.XMLHttpRequest)
		{
			var editSubject=new XMLHttpRequest();
		}
		else
		{
			var editSubject=new ActiveXObject("Microsoft.XMLHTTP");
		}
		editSubject.onreadystatechange=function()
		{
		   if(editSubject.readyState==4 && editSubject.status==200)
		   {
				document.getElementById('viewSubjectDetails').innerHTML=editSubject.responseText;
		   }
		}
		url=realPath+"php/studentMark.php?semesterId="+semesterId+"&tempDepartmentId="+department+"&batch="+batch;
		editSubject.open("GET",url,true);
		editSubject.send();
	}
	else
	{
		document.getElementById('viewSubjectDetails').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}	
}

function viewSubjectMarkInfo()
{
var tempSemester=document.getElementById('semester').value;
var tempDepartmentId=document.getElementById('departmentId').value;
var tempUserId=document.getElementById('userId').value;
	if(tempSemester!="" && tempDepartmentId!="")
	{
		if(window.XMLHttpRequest)
		{
			var viewSubject=new XMLHttpRequest();
		}
		else
		{
			var viewSubject=new ActiveXObject("Microsoft.XMLHTTP");
		}
		viewSubject.onreadystatechange=function()
		{
		   if(viewSubject.readyState==4 && viewSubject.status==200)
		   {
			document.getElementById('viewStudentMarkDetails').innerHTML=viewSubject.responseText;
		   }
		}
		url=realPath+"php/addMark.php?tempSemester="+tempSemester+"&tempDepartmentId="+tempDepartmentId+"&tempUserId="+tempUserId;
		viewSubject.open("GET",url,true);
		viewSubject.send();
	}
	else
	{
document.getElementById('viewStudentMarkDetails').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}	
}

function editDeleteMark()
{
var semesterId=document.getElementById('semester').value;
var department=document.getElementById('department').value;
var studentBatch=document.getElementById('batch').value;

	if(semesterId!="" && department!="" && studentBatch!="")
	{
		if(window.XMLHttpRequest)
		{
			var viewStudent=new XMLHttpRequest();
		}
		else
		{
			var viewStudent=new ActiveXObject("Microsoft.XMLHTTP");
		}
		viewStudent.onreadystatechange=function()
		{
		   if(viewStudent.readyState==4 && viewStudent.status==200)
		   {
			document.getElementById('displayStudentMark').innerHTML=viewStudent.responseText;
		   }
		}
		url=realPath+"php/editMarkDetails.php?semesterId="+semesterId+"&tempDepartmentId="+department+"&studentBatch="+studentBatch+"&operation=editDelete";
		viewStudent.open("GET",url,true);
		viewStudent.send();
	}
	else
	{
		document.getElementById('displayStudentMark').innerHTML="<center><label class='errorMessage'>Select The Details!</label></center>";
	}	
}

function subjectAdd()
{
	var numberOfSubject=parseInt(document.getElementById('numberOfSubject').value.trim());

	if(numberOfSubject!="" && !isNaN(document.getElementById('numberOfSubject').value) && numberOfSubject<11)
	{	
		var subjectTable="";
		subjectTable=subjectTable+"<table align='center'>";
		for(var i=0;i<numberOfSubject;i++)
		{
			subjectTable=subjectTable+"<tr><td><label class='labelText'>Enter Subject Name"+(i+1)+"</label><label class='mandatoryStar'>*</label></td><td><input type='text' id='subjectName"+i+"' name='subjectName"+i+"' onblur=nullValidate('subjectName"+i+"','SubjectName"+(i+1)+"')></td></tr>";
		}
		subjectTable=subjectTable+"</table>";
		document.getElementById('subjectNameTable').innerHTML=subjectTable;
	}
	else
	{
		document.getElementById('subjectNameTable').innerHTML="<center><label class='errorMessage'>Enter the Number of subject Correctly(Max 10)!</label></center>";
	}
}

function markValidate(checkMarkId,subjectName)
{
	if(document.getElementById(checkMarkId).value.trim()=="")
	{
		alert("Enter the "+subjectName+" value");
		document.getElementById(checkMarkId).value="";
		document.getElementById(checkMarkId).focus();
		return false;
	}
	if(document.getElementById(checkMarkId).value>100 || document.getElementById(checkMarkId).value<0)
	{
		alert("Enter the "+subjectName+" maximum mark 100 only");
		document.getElementById(checkMarkId).value="";
		document.getElementById(checkMarkId).focus();
		return false;
	}
	if(isNaN(document.getElementById(checkMarkId).value))
	{
		alert("Enter the "+subjectName+" only number");
		document.getElementById(checkMarkId).value="";
		document.getElementById(checkMarkId).focus();
		return false;
	}
	var markValid=/^([0-9]*)+\.([0-9]*)$/;
	if(markValid.test(document.getElementById(checkMarkId).value)==true)
	{
		alert("Enter the correct decimal value for "+subjectName);
		document.getElementById(checkMarkId).value="";
		document.getElementById(checkMarkId).focus();
		return false;
	}
	return true;
}

function addMark()
{
	var tempConfirm=window.confirm("Check all the marks entered correctlly");
	if(tempConfirm==true)
	{ return true;}
	else
	{ return false;}
}
