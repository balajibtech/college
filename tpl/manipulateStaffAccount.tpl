{if $loginTypeId=='1'}
<div class="heading">EDIT/DELETE STAFF DETAILS</div>

<table align="center">
	<tr>
		<td colspan="2" class="tableStyle">
		{if $message=="staffDeleted"}
			<div class="errorMessage">Staff Details Deleted Successfully!</div>
		{/if}
		{if $message=="staffUpdated"}
			<div class="errorMessage">Staff Details Updated Successfully!</div>
		{/if}
		{if $message=="alreadyExists"}
		<div class="errorMessage">Staff Details Already Exists!</div>
		{/if}
		<td>
	</tr>
	<tr>
		<td><label class="labelText">Select Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<select name="qualification" id="qualification" onchange="selectOption(this.value,'view','degree')" onchange="staffHide()">
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
		
		<div id="selectdegree"><select>{html_options values="" output=Select}</select></div>
		
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
		<td colspan="2" align="center">
			<input type="button" value="Search" onclick="staffEditDelete('staff','view')">
		</td>
	</tr>	
	
</table>
<div id="editStaffTable"></div>
<div id="viewStaffTable" style="display:none"></div>
<div id="oneStaffTable" style="display:none"></div>
{/if}
