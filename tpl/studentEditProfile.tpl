{if $loginTypeId=='3'}
<div class="heading">EDIT STUDENT PROFILE</div>

<form name="adminEditProfile" method="POST" action="php/updateAdminProfile.php" onsubmit="return editStudentProfileDetails()">

<table align="center">
	<tr>
		<td colspan="2" class="tableStyle">&nbsp;
		{if $message=="nullValue"}
			<div class="errorMessage">Enter the Details Correctly</div>
		{/if}
		{if $message=="invalidPassword"}
			<div class="errorMessage">Enter the Correct Password</div>
		{/if}
		{if $message=="invalidEmail"}
			<div class="errorMessage">Enter the Correct Email</div>
		{/if}
		{if $message=="AdminUpdated"}
			<div class="errorMessage">Student Details Updated Successfully!</div>
		{/if}
		{if $message=="invalid"}
			<div class="errorMessage">No Changes Made On Student Details!</div>
		{/if}
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Name</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="firstName" id="firstName" onblur="lengthValidate('firstName','Ur Name')" value='{$user.first_name}' readonly>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">User Name</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="userName" id="userName" onblur="lengthValidate('userName','User Name')" value='{$user.user_name}' readonly>
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
			<div id="oldPasswordText" style="display:none"><input type="password" name="oldPassword" id="oldPassword" onblur="lengthValidate('oldPassword','Old Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<div id="newPasswordLabel" style="display:none"><label class="labelText">New Password</label><label class="mandatoryStar">*</label></div>
		</td>

		<td>
			<div id="newPasswordText" style="display:none"><input type="password" name="newPassword" id="newPassword" onblur="lengthValidate('newPassword','New Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<div id="confirmPasswordLabel" style="display:none"><label class="labelText">Confirm Password</label><label class="mandatoryStar">*</label></div>
		</td>

		<td>
			<div id="confirmPasswordText" style="display:none"><input type="password" name="confirmPassword" id="confirmPassword" onblur="lengthValidate('confirmPassword','Confirm Password')"></div>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Question</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityQuestion" id="securityQuestion" onblur="lengthValidate('securityQuestion','Security Question')" value='{$user.security_question}' readonly>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Answer</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityAnswer" id="securityAnswer" onblur="lengthValidate('securityAnswer','Security Answer')" value='{$user.security_answer}' readonly>
		</td>
	</tr>

	<tr>
		<td><label class="labelText">Gender</label><label class="mandatoryStar">*</label></td>
		<td><input type="radio" name="gender" id="male" value="Male" {if $user.user_gender==Male}checked{/if} readonly>Male
		<input type="radio" name="gender" id="female" value="Female" {if $user.user_gender==Female}checked{/if} readonly>Female</td>
	</tr>
	<tr>
		<td>
			<label class="labelText">Batch</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="batch" id="batch" onkeyup="numberValidate(event,'Ur Batch')" value='{$user.student_batch}' readonly>
		</td>
	</tr>

	<tr>

		<td>
			<label class="labelText">Date Of Birth</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" value='{$user.dob}' id='dob' readonly name="dob"><input type="button" value="Cal" onclick="displayCalendar(document.forms[0].dob,'yyyy-mm-dd',this)">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Mobile Number</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="mobileNumber" id="mobileNumber" onkeyup="numberValidate(event,'Ur Mobile Number')" value='{$user.mobile_number}' readonly maxlength='10'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Email Id</label>
		</td>

		<td>
			<input type="text" name="emailId" id="emailId" onblur="emailValidate('emailId','Ur Email Id')" value='{$user.email_id}' readonly>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Contact Address</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<textarea cols="26" name="contactAddress" id="contactAddress" onblur="lengthValidate('contactAddress','Ur Address')" readonly>{$user.address}</textarea>
		</td>
	</tr>

	<tr>
		<td colspan="2" class="tableStyle">
			<input type="submit" value="Save Changes" name="updateAdminProfile">&nbsp;
			<input type="reset" value="clear" name="clear">
			
			
		</td>
	</tr>


</table>
<input type="hidden" value="student" name="designation">
</form>
{/if}
