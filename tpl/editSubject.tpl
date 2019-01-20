{if $loginTypeId=='2'}
<div class="heading">EDIT SUBJECT DETAILS</div>

<form name="editSubject" method="POST" action="php/updateSubject.php?operation=edit" onsubmit="return checkEditSubject()">
<table align='center'>
	<tr>
		<td colspan='2' class='tableStyle'>&nbsp;
		{if $message=="userAlreadyExists"}
			<div class="errorMessage">Subject Name Already Exists</div>
		{/if}
		{if $message=="updatedSuccess"}
			<div class="errorMessage">Subject Updated Successfully!</div>
		{/if}
		</td>
	</tr>
	<tr>
		<td><label class="labelText">Change the Subject Name</label><label class="mandatoryStar">*</label>
		</td>
		<td><input type="text" name="subjectName" id="subjectName" value='{$subject.subject_name}'>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'><input type="submit" value="Update Subject">
<input type="reset" value="Clear">
		</td>
	</tr>
</table>
<input type="hidden" name="subjectId" value='{$subject.subject_id}'>
<input type="hidden" name="batch" value='{$subject.batch}'>
</form>
{/if}
