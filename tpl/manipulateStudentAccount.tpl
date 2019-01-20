{if $loginTypeId=='1'}
<div class="heading">EDIT/DELETE STUDENT DETAILS</div>

<table align="center">
	<tr>
		<td colspan="2" class="tableStyle">
		{if $message=="studentDeleted"}
			<div class="errorMessage">Student Details Deleted Successfully!</div>
		{/if}
		{if $message=="studentUpdated"}
			<div class="errorMessage">Student Details Updated Successfully!</div>
		{/if}
		{if $message=="alreadyExists"}
		<div class="errorMessage">Student Details Already Exists!</div>
		{/if}
		<td>
	</tr>

	<tr>
		<td>
			<label class="labelText">Select Batch</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<select name="batch" id="batch">{html_options values="" output=Select}
			{html_options values=$dobYear output=$dobYear}</select>
		</td>
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
			<input type="button" value="Search" onclick="studentEditDelete('student','viewStudent')">
		</td>
	</tr>	
	
</table>
<div id="editDeleteStudentTable"></div>
<div id="viewStaffTable" style="display:none"></div>
<div id="oneStaffTable" style="display:none"></div>
{/if}
