{if $loginTypeId!='3'}

<div class="heading">VIEW STUDENT DETAILS</div>

<table align="center">
	<tr>
		<td>
			<label class="labelText">Select Batch</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<select name="batch" id="batch" onchange="studentHide()">{html_options values="" output=Select}
			{html_options values=$dobYear output=$dobYear}</select>
		</td>
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
			<input type="button" value="Show Details" onclick="studentTable('student')">
		</td>
	</tr>	
	</tr>
		
	<tr>
		<td><label class="labelText">To View All Student Details</label><label class="mandatoryStar">*</label>
			<input type="button" value="Click Here" onclick="studentViewAll('student')">
		</td>
	</tr>	
</table>
<div id="viewStudentTable"></div>
<div id="oneStudentTable"></div>
<div id="viewStaffTable" style="display:none"></div>
<div id="oneStaffTable" style="display:none"></div>
{/if}
