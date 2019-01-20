{if $loginTypeId=='2'}
<div class="heading">ADD SUBJECT DETAILS</div>
<form name="addSubject" method="POST" action="php/addSubject.php" onsubmit="return addSubjectName();">
<table align="center">
		<tr>&nbsp;
		{if $message=="nullValue"}
			<div class="errorMessage">Enter the Details Correctly</div>
		{/if}
		{if $message=="alreadyExists"}
			<div class="errorMessage">Subject Already Exists</div>
		{/if}
		{if $message=="addSuccess"}
			<div class="errorMessage">Subject Details Added Successfully!</div>
		{/if}
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
		<td>
			<label class="labelText">Select Batch</label><label class="mandatoryStar">*</label>
		</td>

		<td>
			<select name="batch" id="batch">{html_options values="" output=Select}
			{html_options values=$dobYear output=$dobYear}</select>
		</td>
	</tr>
	<tr>
		<td>
			<label class="labelText">Select Semester</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<select id="semester" name="semester">
			{html_options values="" selected="" output=Select}
			{html_options values=$semester output=$semester}
		</select>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label class="labelText">Enter the Number Of Subjects</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<input type="text" id="numberOfSubject" name="numberOfSubject" onblur="subjectAdd()">
		</td>
	</tr>	

</table>
<div id="subjectNameTable"></div>

<table align="center">
	<tr>
	<td colspan='2'><input type="submit" Value="Add Subject"><input type="reset" value="Clear" onclick="subjectAdd()">
	</td>
	</tr>
</table>

</form>
<div id="viewStaffTable" style="display:none"></div>
<br>
<div id="oneStaffTable" style="display:none"></div>
{/if}
