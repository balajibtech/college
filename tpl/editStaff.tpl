{if $loginTypeId=='1'}
<div class="heading">EDIT STAFF PROFILE</div>

<form name="editStaffProfile" method="POST" enctype="multipart/form-data" action="php/editStaff.php?userTypeName=staff&operation=edit" onsubmit="return editStaffProfileDetails()">

<table align="center">
	<tr>
		<td colspan="2" class="tableStyle">&nbsp;
		{if $message=="invalidPassword"}
			<div class="errorMessage">Enter the Correct Password</div>
		{/if}
		{if $message=="invalidEmail"}
			<div class="errorMessage">Enter the Correct Email</div>
		{/if}
		{if $message=="StaffUpdated"}
			<div class="errorMessage">Staff Details Updated Successfully!</div>
		{/if}
		{if $message=="invalid"}
			<div class="errorMessage">No Changes Made On Admin Details!</div>
		{/if}
		{if $message=="nullValue"}
			<div class="errorMessage">Enter the Details Correctly</div>
		{/if}
		{if $message=="checkUpload"}
			<div class="errorMessage">Check The Uploaded File</div>
		{/if}
		{if $message=="userAlreadyExists"}
			<div class="errorMessage">User Name Already Exists</div>
		{/if}
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Name</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="firstName" id="firstName" onblur="nullValidate('firstName','Ur Name')" value='{$staff.first_name}'>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" ><div id="userExists" style="display:none"><label class="errorMessage">User Already Exist! Try Another User Name<label></div>
<div id="useIt" style="display:none"><label class="errorMessage">User Name is Available!<label></div></td>
	</tr>
	<tr>
		<td>
			<label class="labelText">User Name</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="userName" id="userName" onkeyup="whiteSpace(event,'userName')" onblur="checkAvailability('userName','staff')" value='{$staff.user_name}'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Change Your Password</label>
		</td>
		<td>
			<input type="radio" name="passwordSelect" id="Yes" onclick="show()" value='yes'><label class="labelText">Yes</label>
			<input type="radio" name="passwordSelect" id="No" onclick="hide()"
value='no' checked><label class="labelText">No</label>
		</td>
	</tr>

	<tr>
		<td>
			<div id="oldPasswordLabel" style="display:none"><label class="labelText">Old Password</label><label class="mandatoryStar">*</label></div>
		</td>

		<td>
			<div id="oldPasswordText" style="display:none"><input type="password" name="oldPassword" id="oldPassword" onkeyup="whiteSpace(event,'oldPassword')" onblur="lengthValidate('oldPassword','Old Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<div id="newPasswordLabel" style="display:none"><label class="labelText">New Password</label><label class="mandatoryStar">*</label></div>
		</td>

		<td>
			<div id="newPasswordText" style="display:none"><input type="password" name="newPassword" id="newPassword" onkeyup="whiteSpace(event,'newPassword')" onblur="lengthValidate('newPassword','New Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<div id="confirmPasswordLabel" style="display:none"><label class="labelText">Confirm Password</label><label class="mandatoryStar">*</label></div>
		</td>

		<td>
			<div id="confirmPasswordText" style="display:none"><input type="password" name="confirmPassword" id="confirmPassword" onkeyup="whiteSpace(event,'confirmPassword')" onblur="lengthValidate('confirmPassword','Confirm Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Question</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityQuestion" id="securityQuestion" onblur="lengthValidate('securityQuestion','Security Question')" value='{$staff.security_question}'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Answer</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityAnswer" id="securityAnswer" onblur="lengthValidate('securityAnswer','Security Answer')" value='{$staff.security_answer}'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Designation</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="designation" id="designation" onblur="nullValidate('designation','Ur Designation')" value='{$staff.user_designation}'>
		</td>
	</tr>

	<tr>

		<td>
			<label class="labelText">Date Of Birth</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" readonly name="dob" id="dob" value='{$staff.dob}'> <input type="button" value="Cal" onclick="displayCalendar(document.forms[0].dob,'yyyy-mm-dd',this)">
		</td>
	</tr>

	<tr>
		<td><label class="labelText">Gender</label></td>
		<td><input type="radio" name="gender" id="male" value="Male" {if $staff.user_gender==Male}checked{/if}><label class="labelText">Male</label>
		<input type="radio" name="gender" id="female" value="Female" {if $staff.user_gender==Female}checked{/if}><label class="labelText">Female</label></td>
	</tr>
	<tr>
		<td><label class="labelText">Select Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<select name="qualification" id="qualification" onchange="selectOption(this.value,'view','degree')">
			{html_options values="" output=Select}
			{html_options values=UG selected=$staff.qualification output=UG}
			{html_options values=PG selected=$staff.qualification output=PG}
			</select>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Select Degree</label><label class="mandatoryStar">*</label>
		</td>
		<td>
		
		<div id="selectdegree"><select name="degree" id="degree">{html_options values=$staff.degree selected=$staff.degree output=$staff.degree}</select></div>
		
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Select Department</label><label class="mandatoryStar">*</label>
		</td>
		<td>
		
		<div id="selectDepartment"><select name="department" id="department">{html_options values=$staff.department_id selected=$staff.department_code output=$staff.department_code}</select></div>
		
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Salary</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="salary" id="salary" onkeyup="numberValidate(event,'salary')" value='{$staff.salary}' maxlength="6">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Mobile Number</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="mobileNumber" id="mobileNumber" onkeyup="numberValidate(event,'mobileNumber')" value='{$staff.mobile_number}' maxlength='10'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Email Id</label>
		</td>

		<td>
			<input type="text" name="emailId" id="emailId" onblur="emailValidate('emailId','Ur Email Id')" value='{$staff.email_id}'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Contact Address</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<textarea cols="26" name="contactAddress" id="contactAddress" onblur="lengthValidate('contactAddress','Ur Address')">{$staff.address}</textarea>
		</td>
	</tr>

	<tr>
		<td><label class="labelText">Resume Upload</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="file" name="resume" id="resume" onblur="lengthValidate('resume',' Staff Resume')"> <br><label class="errorMessage">(Doc, Docx, PDF, txt, Max FileSize 300kb)</label>
		</td>
	</tr>

	<tr>
		<td align="right">
			<input type="submit" id="checkAvailableButton" style="display:block" value="Create Staff Account" name="createStaffAccount">
		</td>
		<td>&nbsp;
			<input type="reset" value="clear" name="clear">
			
		</td>
	</tr>


</table>
<input type="hidden" name="staffId" value='{$staff.user_id}'>
<div id="viewStaffTable" style="display:none"></div>
<div id="oneStaffTable" style="display:none"></div>
</form>
{/if}
