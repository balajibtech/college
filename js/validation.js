function loginValidate()
{
	if(document.getElementById('userType').value.trim()=="")
	{
		alert("Select The User Type");
		document.getElementById('userType').focus();
		return false;
	}
	if(document.getElementById('userName').value.trim()=="" ||  document.getElementById('userName').value.length<6)
	{
		alert("Enter the User Name correctly");
		document.getElementById('userName').focus();
		return false;
	}
	if(document.getElementById('userPassword').value.trim()=="" ||  document.getElementById('userPassword').value.length<6)
	{
		alert("Enter the User Password correctly");
		document.getElementById('userPassword').focus();
		return false;
	}
		return true;
}

function forgotPasswordValidate()
{
	var current=new Date();
	var month=current.getMonth();
	var year=current.getFullYear();
	var date=current.getDate();
	month=month+1;
	if(month<10)
	{month="0"+month;}
	if(date<10)
	{date="0"+date;}
	var currentDate=year+"-"+month+"-"+date;
	var getDob=document.getElementById('dob').value;

	if(document.getElementById('userType').value.trim()=="")
	{
		alert("Select The User Type");
		document.getElementById('userType').focus();
		return false;
	}
	if(document.getElementById('userName').value.trim()=="" ||  document.getElementById('userName').value.length<6)
	{
		alert("Enter the User Name correctly");
		document.getElementById('userName').focus();
		return false;
	}
	if(document.getElementById('securityQuestion').value.trim()=="" ||  document.getElementById('securityQuestion').value.length<6)
	{
		alert("Enter the Security Question correctly");
		document.getElementById('securityQuestion').focus();
		return false;
	}
	if(document.getElementById('securityAnswer').value.trim()=="" ||  document.getElementById('securityAnswer').value.length<6)
	{
		alert("Enter the Security Answer correctly");
		document.getElementById('securityAnswer').focus();
		return false;
	}
	if(document.getElementById('dob').value.trim()=="")
	{
		alert("Select Date Of Birth");
		document.getElementById('dob').focus();
		return false;
	}
	if(document.getElementById('dob').value.trim()!="")
	{
		if(getDob>=currentDate)
		{
			alert("Enter the Date Invalid");
			document.getElementById('dob').focus();
			return false;
		}
	}
		return true;
}

function departmentValidation()
{
	if(document.getElementById('degree').value.trim()=="" ||  document.getElementById('degree').value.length<2)
	{
		alert("Enter the Degree correctly");
		document.getElementById('degree').focus();
		return false;
	}
	if(document.getElementById('departmentCode').value.trim()=="" ||  document.getElementById('departmentCode').value.length<2)
	{
		alert("Enter the Department Code correctly");
		document.getElementById('departmentCode').focus();
		return false;
	}
	if(document.getElementById('departmentName').value.trim()=="" ||  document.getElementById('departmentName').value.length<5)
	{
		alert("Enter the Department Name correctly");
		document.getElementById('departmentName').focus();
		return false;
	}
	if(document.getElementById('fees').value.trim()=="" ||  document.getElementById('departmentName').value.length<4 || isNaN(document.getElementById('fees').value))
	{
		alert("Enter the Fees Per Sem correctly");
		document.getElementById('fees').focus();
		return false;
	}	
		return true;
}

function confirmDelete()
{
	var tempConfirm=confirm("Are You Sure delete this record?");
	if(tempConfirm==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function studentHide()
{
document.getElementById('viewStudentTable').innerHTML="";
document.getElementById('oneStudentTable').innerHTML="";
}

function staffHide()
{
document.getElementById('viewStaffTable').innerHTML="";
}

function show()
{
document.getElementById('oldPasswordLabel').style.display="block";
document.getElementById('oldPasswordText').style.display="block";
document.getElementById('newPasswordLabel').style.display="block";
document.getElementById('newPasswordText').style.display="block";
document.getElementById('confirmPasswordLabel').style.display="block";
document.getElementById('confirmPasswordText').style.display="block";
}

function hide()
{
document.getElementById('oldPassword').value="";
document.getElementById('newPassword').value="";
document.getElementById('confirmPassword').value="";
document.getElementById('oldPasswordLabel').style.display="none";
document.getElementById('oldPasswordText').style.display="none";
document.getElementById('newPasswordLabel').style.display="none";
document.getElementById('newPasswordText').style.display="none";
document.getElementById('confirmPasswordLabel').style.display="none";
document.getElementById('confirmPasswordText').style.display="none";
}

function addSubjectName()
{
	if(document.getElementById('qualification').value=="")
	{
		alert("Select the qualification");
		return false;
	}
	if(document.getElementById('degree').value=="")
	{
		alert("Select the degree");
		return false;
	}
	if(document.getElementById('department').value=="")
	{
		alert("Select the department");
		return false;
	}
	if(document.getElementById('batch').value=="")
	{
		alert("Select the batch");
		return false;
	}
	if(document.getElementById('semester').value=="")
	{
		alert("Select the semester");
		return false;
	}
	if(document.getElementById('numberOfSubject').value=="")
	{
		alert("Select the Number Of Subject");
		return false;
	}
	if(document.getElementById('numberOfSubject').value!="")
	{
		var numberOfSubject=parseInt(document.getElementById('numberOfSubject').value.trim());
		if(numberOfSubject<11)
		{	
			for(var i=0;i<numberOfSubject;i++)
			{
				if(document.getElementById('subjectName'+i).value=="")
				{
					alert("Enter the Subject Name"+(i+1));
					return false;
				}
			}
		}
		else
		{
			alert("Enter the Number of subject Correctly(Max 10)!");
			return 	false;
		}
	}
	return true;
}
