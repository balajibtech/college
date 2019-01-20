function StaffAccount()
{
var getDob=document.getElementById('dob').value;
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
	
	if(document.getElementById('firstName').value.trim()=="")
	{
		alert("Enter the Name correctly");
		document.getElementById('firstName').focus();
		return false;
	}
	if(document.getElementById('userName').value.trim()=="" ||  document.getElementById('userName').value.length<6)
	{
		alert("Enter the User Name Minimum 6 Character ");
		document.getElementById('userName').focus();
		return false;
	}
	if(document.getElementById('userPassword').value.trim()=="" ||  document.getElementById('userPassword').value.length<6)
	{
		alert("Enter the Password Minimum 6 Character");
		document.getElementById('userPassword').focus();
		return false;
	}
	if(document.getElementById('confirmPassword').value.trim()=="" ||  document.getElementById('confirmPassword').value.length<6)
	{
		alert("Enter the Confirm Password Minimum 6 Character");
		document.getElementById('confirmPassword').focus();
		return false;
	}
	if(document.getElementById('confirmPassword').value!=document.getElementById('userPassword').value)
	{
		alert("Password Mismatch");
		document.getElementById('confirmPassword').focus();
		return false;
	}
	if(document.getElementById('securityQuestion').value.trim()=="" ||  document.getElementById('securityQuestion').value.length<6)
	{
		alert("Enter the Security Question Minimum 6 Character");
		document.getElementById('securityQuestion').focus();
		return false;
	}
	if(document.getElementById('securityAnswer').value.trim()=="" ||  document.getElementById('securityAnswer').value.length<6)
	{
		alert("Enter the Security Answer Minimum 6 Character");
		document.getElementById('securityAnswer').focus();
		return false;
	}
	if(document.getElementById('designation').value.trim()=="")
	{
		alert("Enter the Designation Correctly");
		document.getElementById('designation').focus();
		return false;
	}
	if(document.getElementById('dob').value.trim()=="")
	{
		alert("Enter the Dob Correctly");
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
	if(document.getElementById('qualification').value=="")
	{
		alert("Select the Qualification");
		document.getElementById('qualification').focus();
		return false;
	}
	if(document.getElementById('degree').value=="")
	{
		alert("Select the Degree");
		document.getElementById('degree').focus();
		return false;
	}
	if(document.getElementById('department').value=="")
	{
		alert("Select the Department");
		document.getElementById('department').focus();
		return false;
	}
	if(document.getElementById('salary').value.trim()=="")
	{
		alert("Enter the Salary Correctly");
		document.getElementById('salary').focus();
		return false;
	}
	if(document.getElementById('salary').value.trim()!="" && isNaN(document.getElementById('salary').value))
	{
		alert("Enter the Salary Only Number");
		document.getElementById('salary').focus();
		return false;
	}
	if(document.getElementById('mobileNumber').value.trim()=="")
	{
		alert("Enter the Mobile Number Correctly");
		document.getElementById('mobileNumber').focus();
		return false;
	}
	if(document.getElementById('mobileNumber').value.trim()!="" && isNaN(document.getElementById('mobileNumber').value))
	{
		alert("Enter the Mobile Number Only Number Will Allowed");
		document.getElementById('mobileNumber').focus();
		return false;
	}
	if(document.getElementById('emailId').value!="")
	{
		var email_Id=document.getElementById('emailId').value;
		var check=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(check.test(email_Id)==false)
		{
			alert("Check Email Format");
			document.getElementById('emailId').focus();
			return false;
		}
	}
	if(document.getElementById('contactAddress').value.trim()=="")
	{
		alert("Enter the Contact Address Correctly");
		document.getElementById('contactAddress').focus();
		return false;
	}
	if(document.getElementById('resume').value.trim()=="")
	{
		alert("Upload the Resume");
		document.getElementById('resume').focus();
		return false;
	}	
	return true;
}

function StudentAccount()
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
	if(document.getElementById('firstName').value.trim()=="")
	{
		alert("Enter the Name correctly");
		document.getElementById('firstName').focus();
		return false;
	}
	if(document.getElementById('userName').value.trim()=="" ||  document.getElementById('userName').value.length<6 || isNaN(document.getElementById('userName').value))
	{
		alert("Enter the User Name Minimum 6 Character");
		document.getElementById('userName').focus();
		return false;
	}
	if(document.getElementById('userPassword').value.trim()=="" ||  document.getElementById('userPassword').value.length<6)
	{
		alert("Enter the Password Minimum 6 Character");
		document.getElementById('userPassword').focus();
		return false;
	}
	if(document.getElementById('confirmPassword').value.trim()=="" ||  document.getElementById('confirmPassword').value.length<6)
	{
		alert("Enter the Confirm Password Minimum 6 Character");
		document.getElementById('confirmPassword').focus();
		return false;
	}
	if(document.getElementById('confirmPassword').value!=document.getElementById('userPassword').value)
	{
		alert("Password Mismatch");
		document.getElementById('confirmPassword').focus();
		return false;
	}
	if(document.getElementById('securityQuestion').value.trim()=="" ||  document.getElementById('securityQuestion').value.length<6)
	{
		alert("Enter the Security Question Minimum 6 Character");
		document.getElementById('securityQuestion').focus();
		return false;
	}
	if(document.getElementById('securityAnswer').value.trim()=="" ||  document.getElementById('securityAnswer').value.length<6)
	{
		alert("Enter the Security Answer Minimum 6 Character");
		document.getElementById('securityAnswer').focus();
		return false;
	}
	if(document.getElementById('dob').value.trim()=="")
	{
		alert("Enter the Dob Correctly");
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
	if(document.getElementById('qualification').value=="")
	{
		alert("Select the Qualification");
		document.getElementById('qualification').focus();
		return false;
	}
	if(document.getElementById('degree').value=="")
	{
		alert("Select the Degree");
		document.getElementById('degree').focus();
		return false;
	}
	if(document.getElementById('department').value=="")
	{
		alert("Select the Department");
		document.getElementById('department').focus();
		return false;
	}
	if(document.getElementById('batch').value.trim()=="")
	{
		alert("Select the Batch");
		document.getElementById('batch').focus();
		return false;
	}
	if(document.getElementById('mobileNumber').value.trim()!="" && isNaN(document.getElementById('mobileNumber').value))
	{
		alert("Enter the Mobile Number Only Number Will Allowed");
		document.getElementById('mobileNumber').focus();
		return false;
	}
	if(document.getElementById('emailId').value!="")
	{
		var email_Id=document.getElementById('emailId').value;
		var check=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(check.test(email_Id)==false)
		{
			alert("Check Email Format");
			document.getElementById('emailId').focus();
			return false;
		}
	}
	if(document.getElementById('contactAddress').value.trim()=="")
	{
		alert("Enter the Contact Address Correctly");
		document.getElementById('contactAddress').focus();
		return false;
	}
	if(document.getElementById('photo').value.trim()=="")
	{
		alert("Upload the Photo");
		document.getElementById('photo').focus();
		return false;
	}	
	return true;
}
