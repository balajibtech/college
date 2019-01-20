{if $loginTypeId=='2'}
<div class='heading'>UPDATE THE MARKS</div>
<form name="updateMark" method="POST" action="php/editDeleteMark.php">
<table align='center'>
{section name=subject loop=$subjectName}
	<tr>
		<td><label class="labelText">{$subjectName[subject].subject_name}</label>
		</td>
		<td><input type="text" name="subject_{$subjectName[subject].subject_id}" id="subject_{$subjectName[subject].subject_id}" value='{$subjectName[subject].mark}' onblur='markValidate("subject_{$subjectName[subject].subject_id}","{$subjectName[subject].subject_name}")'>
		</td>
	</tr>
{/section}
	<tr>
		<td colspan='2' class="tableStyle"><input type="submit" value="Update Mark"><input type="reset" value="Clear"></td>
	</tr>
</table>
<input type="hidden" name="getUserId" value='{$getUserId}'>
<input type="hidden" name="getDepartmentId" value='{$getDepartmentId}'>
<input type="hidden" name="getSemesterId" value='{$getSemesterId}'>
<input type="hidden" name="subjectNumber" value='{$subjectNumber}'>
</form>
{/if}
