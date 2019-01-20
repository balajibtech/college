<div class="heading">FORGOT PASSWORD FORM</div>
<div class="loginWindow">
<form name="forgotPasswordForm" method="POST" action ="php/forgotPasswordValidation.php"  onsubmit="return forgotPasswordValidate();">

<table align="center">

	<tr>
		<td colspan="2">&nbsp;
			{if $password}
			<div class="errorMessage">Your password is {$password}</div>
			{/if}
			{if $message=="invalid"}
			<div class="errorMessage">Enter the correct Details</div>
			{/if}
			{if $message=="forgotNull"}
			<div class="errorMessage">Enter the Details</div>
			{/if}
		</td>
	</tr>

	<tr>
		<td><label class="labelText">Select User Types</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<select name="userType" id="userType">
			{html_options values="" output=Select}
			{html_options values=$userId output=$userNameTypes}
			</select>
		<td>
	</tr>

	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">User Name</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="userName" id="userName" onblur="lengthValidate('userName','User Name')" onkeyup="whiteSpace(event,'userName')">
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
			<label class="labelText">Date Of Birth</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<input type="text" readonly name="dob" id="dob"><input type="button" value="Cal" onclick="displayCalendar(document.forms[0].dob,'yyyy-mm-dd',this)">

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td colspan="2" class="tableStyle">
			<input type="submit" value="Get Password" name="forgotPassword">&nbsp;
			<input type="reset" value="clear" name="clear">&nbsp;
			<input type="button" value="Back" name="close" onclick="pageRedirect('')">
			
		</td>
	</tr>

</table>

</form>
</div>
