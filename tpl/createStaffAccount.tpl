{if $loginTypeId=='1'}
<div class="heading">ADD STAFF PROFILE</div>

<form name="createStaffProfile" method="POST" enctype="multipart/form-data" action="php/createStaffAccount.php?userTypeName=staff" onsubmit="return StaffAccount();">

<table align="center">
	<tr>
		<td colspan="2" class="tableStyle">&nbsp;
		{if $message=="createStaffSuccess"}
			<div class="errorMessage">Staff Account Created Successfully!</div>
		{/if}
		{if $message=="nullValue"}
			<div class="errorMessage">Enter the Details Correctly</div>
		{/if}
		{if $message=="invalidEmail"}
			<div class="errorMessage">Enter the Correct Email</div>
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
			<input type="text" name="firstName" id="firstName" onblur="nullValidate('firstName','First Name')">
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
			<input type="text" name="userName" id="userName" onkeyup="whiteSpace(event,'userName')" onblur="checkAvailability('userName','staff')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Password</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="password" name="userPassword" id="userPassword" onkeyup="whiteSpace(event,'userPassword')" onblur="lengthValidate('userPassword','Password')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Confirm Password</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="password" name="confirmPassword" id="confirmPassword" onblur="lengthValidate('confirmPassword','Confirm Password')"  onkeyup="whiteSpace(event,'confirmPassword')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Question</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityQuestion" id="securityQuestion" onblur="lengthValidate('securityQuestion','Security Question')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Security Answer</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="securityAnswer" id="securityAnswer" onblur="lengthValidate('securityAnswer','Security Answer')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Designation</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="designation" id="designation" onblur="nullValidate('designation','Ur Designation')">
		</td>
	</tr>

	<tr>

		<td>
			<label class="labelText">Date Of Birth</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" readonly name="dob" id="dob"><input type="button" value="Cal" onclick="displayCalendar(document.forms[0].dob,'yyyy-mm-dd',this)">
		</td>
	</tr>

	<tr>
		<td><label class="labelText">Gender</label></td>
		<td><input type="radio" name="gender" id="male" value="Male" checked><label class="labelText">Male</label>
		<input type="radio" name="gender" id="female" value="Female"><label class="labelText">Female</label></td>
	</tr>
	<tr>
		<td><label class="labelText">Select Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<select name="qualification" id="qualification" onchange="selectOption(this.value,'view','degree')">
			{html_options values="" output=Select}
			{html_options values=UG output=UG}
			{html_options values=PG output=PG}
			</select>
			
			
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Select Degree</label><label class="mandatoryStar">*</label>
		</td>
		<td>
		
		<div id="selectdegree"><select id="degree">{html_options values="" output=Select}</select></div>
		
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Select Department</label><label class="mandatoryStar">*</label>
		</td>
		<td>
		
		<div id="selectDepartment"><select id="department">{html_options values="" output=Select}</select></div>
		
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Salary</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="salary" id="salary" onkeyup="numberValidate(event,'salary')" maxlength="6">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Mobile Number</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="mobileNumber" id="mobileNumber" onkeyup="numberValidate(event,'mobileNumber')" maxlength='10'>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Email Id</label>
		</td>

		<td>
			<input type="text" name="emailId" id="emailId" onblur="emailValidate('emailId','Ur Email Id')">
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Contact Address</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<textarea cols="26" name="contactAddress" id="contactAddress" onblur="lengthValidate('contactAddress','Ur Address')"></textarea>
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
		<td colspan="2" class="tableStyle">
			<input type="submit" id="checkAvailableButton" value="Create Staff Account" name="createStaffAccount" disabled>&nbsp;
			<input type="reset" value="clear" name="clear">
			
		</td>
	</tr>


</table>
<div id="viewStaffTable" style="display:none"></div>
<div id="oneStaffTable" style="display:none"></div>
</form>
{/if}
