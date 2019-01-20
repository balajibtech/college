<div class="heading">LOGIN FORM</div>
<div class="loginWindow">
<form name="loginForm" method="POST" action ="php/loginValidation.php"  onsubmit="return loginValidate();">

<table align="center">

	<tr>
		<td colspan="2">&nbsp;{if $message=="invalid"}
<div class="errorMessage">Enter the correct Details</div>
{/if}{if $message=="nullValue"}
<div class="errorMessage">Enter the Details</div>
{/if}</td>
	</tr>

	<tr>
		<td><label class="labelText">Select User Types</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<select name="userType" id="userType">
			{html_options values="" output=Select}
			{html_options values=$userId output=$userNameTypes}
			</select>
		</td>
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
			<label class="labelText">Password</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="password" name="userPassword" id="userPassword" onblur="lengthValidate('userPassword','Password')" onkeyup="whiteSpace(event,'userName')">
		</td>
	</tr>

	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td colspan="2" class="tableStyle">
			<input type="submit" value="Login" name="loginIn">&nbsp;
			<input type="reset" value="clear" name="clear">&nbsp;
			<input type="button" value="Forgot Password" onclick="pageRedirect('forgotPassword')">
		</td>
	</tr>

</table>

</form>
</div>
