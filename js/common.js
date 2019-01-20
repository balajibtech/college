function lengthValidate(lengthCheckId,lengthErrorMessage)
{
	if(document.getElementById(lengthCheckId).value.trim()!="")
	{
		if(document.getElementById(lengthCheckId).value.length<6)
		{
			alert(lengthErrorMessage+" minimum 6 character");
			document.getElementById(lengthCheckId).focus();
			document.getElementById(lengthCheckId).value="";
			return false;
		}
	}
	/*else
	{
		alert("Enter "+errorMessage+" value");
		document.getElementById(textBoxId).focus();
	}*/
}

function nullValidate(nullCheckId,nullErrorMessage)
{
	if(document.getElementById(nullCheckId).value!="")
	{
		if(document.getElementById(nullCheckId).value=="")
		{
			alert("Enter "+nullErrorMessage+" value");
			document.getElementById(nullCheckId).focus();
			document.getElementById(nullCheckId).value="";
			return false;
		}
	}
}

function pageRedirect(url)
{
	window.location="index.php?page="+url;
}

function logout()
{
	window.location="php/logout.php";
}

function emailValidate(textBoxEmailId,emailErrorMessage)
{
	if(document.getElementById(textBoxEmailId).value.trim()!="")
	{
		var emailId=document.getElementById(textBoxEmailId).value;
		var check=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(check.test(emailId)==false)
		{
			alert("Check "+emailErrorMessage);
			document.getElementById(textBoxEmailId).focus();
			document.getElementById(textBoxEmailId).value="";
			return false;
		}
		else
		{
			return true;
		}
	}
}

function numberValidate(eventId,NumberCheckId)
{
	if((eventId.which>=48 && eventId.which<=57) ||(eventId.which>=96 && eventId.which<=105) || (eventId.which>=37 && eventId.which<=40) || (eventId.which==8) || (eventId.which==0) || (eventId.which==20) || (eventId.which==13)  || (eventId.which==46)|| (eventId.which==17)|| (eventId.which==9))
	{
		return true;
	}
	else
	{
		alert("Enter Number Only");
		document.getElementById(NumberCheckId).focus();
		document.getElementById(NumberCheckId).value="";
		return false;
	}

}

function characterValidate(getEventId,charCheckId)
{
	if((getEventId.which>=65 && getEventId.which<=90) || (getEventId.which>=37 && getEventId.which<=40) || (getEventId.which==0) || (getEventId.which==8) || (getEventId.which==9) || (getEventId.which==16) || (getEventId.which==20) || (getEventId.which==13)  || (getEventId.which==46)|| (getEventId.which==17))
	{
		return true;
	}
	else
	{
		alert("Enter Charater Only");
		document.getElementById(charCheckId).focus();
		document.getElementById(charCheckId).value="";
		return false;
	}

}

function whiteSpace(getEvent,spaceCheckId)
{
	if(getEvent.which==32)
	{
		alert("Space Not Allowed");	
		document.getElementById(spaceCheckId).focus();
		document.getElementById(spaceCheckId).value="";
		return false;
	}
	else
	{
		return true;
	}

}


function checkAvailability(getCheckId,getUserTypeName)
{
	var getUserName=document.getElementById(getCheckId).value.trim();
	if(getUserName!="")
	{
		if(window.XMLHttpRequest)
		{
			var checkUser=new XMLHttpRequest();
		}
		else
		{
			var checkUser=new ActiveXObject("Microsoft.XMLHTTP");
		}
		checkUser.onreadystatechange=function()
		{
			if(checkUser.readyState==4 && checkUser.status==200)
			{
				if(checkUser.responseText==1)
				{
				document.getElementById('userExists').style.display="block";
				document.getElementById('useIt').style.display="none";
				document.getElementById('checkAvailableButton').disabled=true;
				}
				else if(checkUser.responseText==0)
				{
				document.getElementById('userExists').style.display="none";
				document.getElementById('useIt').style.display="block";
				document.getElementById('checkAvailableButton').disabled=false;
				}
			}
		}
		url=realPath+"php/checkAvailable.php?getUserName="+getUserName+"&getUserTypeName="+getUserTypeName;
		checkUser.open("GET",url,true);
		checkUser.send();
	}
	else
	{document.getElementById('useIt').style.display="none";
	document.getElementById('userExists').style.display="none";
	document.getElementById('checkAvailableButton').disabled=true;
	}
}
