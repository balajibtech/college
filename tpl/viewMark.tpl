{if $loginTypeId=='2'}
<div class="heading">VIEW STUDENT MARK</div>

<table align='center'>
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
		<td>
			<label class="labelText">Select Semester</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<select id="semester" name="semester">
			{html_options values="" selected="" output=Select}
			{html_options values=$semesterId output=$semester}
			</select>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type="button" value="VIEW STUDENT MARKS" onclick="viewStudentMark()">
		</td>
</table>
<div id="displayStudentMark"></div>
<div id='oneStaffTable' style="display:none"></div>
<div id='viewStaffTable' style="display:none"></div>
{/if}
