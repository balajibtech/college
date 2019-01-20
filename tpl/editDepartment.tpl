{if $loginTypeId=='1'}
<div class="heading">EDIT DEPARTMENT DETAILS</div>

<form name="editDepartment" method="POST" action="php/departmentValidation.php?page=editDepartment&operation=edit&departmentId={$department.department_id}" onsubmit="return departmentValidation();">

<table align="center">
	<tr>
		<td colspan="2">&nbsp;
		
		{if $message=="nullValue"}
		<div class="errorMessage">Enter the Details</div>
		{/if}</td>
	</tr>

	<tr>
		<td><label class="labelText">Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<input type="radio" name="qualification" id="ug" value="UG" {if $department.qualification==UG}checked{/if}><label class="labelText">UG</label>
			<input type="radio" name="qualification" id="pg" value="PG" {if $department.qualification==PG}checked{/if}><label class="labelText">PG</label>
			
		<td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Enter Degree</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="degree" id="degree"  onkeyup="characterValidate(event,'degree')" value='{$department.degree}'><label class="labelText">(BE, BTech,..)</label>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Enter Department Code</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="departmentCode" id="departmentCode" onkeyup="characterValidate(event,'departmentCode')" value='{$department.department_code}'><label class="labelText">(ECE,IT,..)</label>
		</td>
	</tr>

<tr>
		<td>
			<label class="labelText">Enter Department</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="departmentName" id="departmentName" value='{$department.department_name}' onkeyup="characterValidate(event,'departmentName')" onblur="lengthValidate('departmentName','Department Name')" ><label class="labelText">(Information Technology,..)</label>
		</td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Fees per sem</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<input type="text" name="fees" id="fees" onkeyup="numberValidate(event,'fees')" value='{$department.fees_details}' maxlength='6'>
		</td>
	</tr>

	<tr>
		<td colspan="2" class="tableStyle">
			<input type="submit" value="Save Changes" name="createDepartment">&nbsp;
			<input type="reset" value="clear" name="clear">
			
		</td>
	</tr>

</table>
</form>
{/if}
