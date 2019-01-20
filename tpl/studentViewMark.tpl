{if $loginTypeId=='3'}
<div class="heading">VIEW STUDENT MARK</div>

<table align='center'>
	<tr><td>&nbsp;</td>
	</tr>
	<tr>
		<td><label class='labelText'>NAME</label></td>
		<td><label >{$staff.first_name}</label></td>
		<td><label class='labelText'>REGISTER NUMBER</label></td>
		<td><label id="user_name">{$loginUser}</label></td>
	</tr>

	<tr>

	<tr>
		<td><label class='labelText'>DEPARTMENT NAME</label></td>
		<td><label id="departmentCode">{$staff.department_name}</label></td>
		<td><label class='labelText'>PHOTO</label></td>
		<td><label id="photo"><img src='{$realPath}{$staff.photo_path}' width="110" height="125"></label></td></tr><tr><td>&nbsp;</td>
	</tr>

	<tr>
		<td></td>
		
		<td>
			<label class="labelText">Select Semester</label><label class="mandatoryStar">*</label>
		</td>
		<td>
			<select id="semester" name="semester">
			{html_options values="" selected="" output=Select}
			{html_options values=$semesterId output=$semester}
		</select>
		</td>
		<td></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td></td>
		<td align='right'><input type='button' name='viewMarkDetails' value='View Mark' onclick="viewSubjectMarkInfo()"></td>
		<td></td>
		<td></td>
	</tr>
<input type="hidden" name="firstName" id="firstName" value='{$staff.first_name}'>
<input type="hidden" name="userName" id="userName" value='{$staff.user_name}'>
<input type="hidden" name="departmentId" id="departmentId" value='{$staff.department_id}'>
<input type="hidden" name="userId" id="userId" value='{$staff.user_id}'>
</table>
<div id="viewStudentMarkDetails"></div>
<center><label class="labelText">ALL THE BEST!</label></center>
{/if}
