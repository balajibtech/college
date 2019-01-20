{if $loginTypeId=='1'}
<div class="heading">CREATE DEPARTMENT DETAILS</div>

<form name="createDepartment" method="POST" action="php/departmentValidation.php?page=createDepartment" onsubmit="return departmentValidation();">

<table align="center">
	<tr>
		<td colspan="2">&nbsp;
{if $message=="alreadyExists"}
<div class="errorMessage">Department Details Already Exists!</div>
{/if}
{if $message=="departmentAdded"}
<div class="errorMessage">Department Details Added Successfully!</div>
{/if}{if $message=="nullValue"}
<div class="errorMessage">Enter the Details</div>
{/if}</td>
	</tr>

	<tr>
		<td><label class="labelText">Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<input type="radio" name="qualification" id="ug" value="UG" checked><label class="labelText">UG</label>
			<input type="radio" name="qualification" id="pg" value="PG"><label class="labelText">PG</label>
			
		<td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Enter Degree</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="degree" id="degree"  onkeyup="characterValidate(event,'degree')"><label class="labelText" title="Enter the Degree">(BE, BTech,..)</label>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Enter Department Code</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="departmentCode" id="departmentCode"  onkeyup="characterValidate(event,'departmentCode')"><label class="labelText">(ECE,IT,..)</label>
		</td>
	</tr>

<tr>
		<td>
			<label class="labelText">Enter Department</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="departmentName" id="departmentName"  onkeyup="characterValidate(event,'departmentName')"  onblur="lengthValidate('departmentName','Department Name')"><label class="labelText">(Information Technology,..)</label>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Fees per sem</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="fees" id="fees" onkeyup="numberValidate(event,'fees')" maxlength='6'>
		</td>
	</tr>

	<tr>
		<td colspan="2" class="tableStyle">
			<input type="submit" value="Create Department" name="createDepartment">&nbsp;
			<input type="reset" value="clear" name="clear">
			
		</td>
	</tr>

</table>
</form>
{/if}
