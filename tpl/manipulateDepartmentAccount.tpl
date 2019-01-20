{if $loginTypeId=='1'}
<div class="heading">EDIT DELETE DEPARTMENT DETAILS</div>

<table align="center">
	<tr>
		<td colspan="2">&nbsp;

		{if $message=="departmentDeleted"}
			<div class="errorMessage">Department Details Deleted Successfully!</div>
		{/if}
		{if $message=="departmentUpdated"}
			<div class="errorMessage">Department Details Updated Successfully!</div>
		{/if}
		{if $message=="alreadyExists"}
		<div class="errorMessage">Department Details Already Exists!</div>
		{/if}
		{if $message=="notDeleted"}
		<div class="errorMessage">Sorry!Department Cannot Deleted,Department Contain Students!</div>
		{/if}
</td>
	</tr>
	<tr>
		<td><label class="labelText">Select Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<select name="qualification" id="qualification" onchange="fetchTable(this.value,'editDelete')">
			{html_options values="" output=Select}
			{html_options values=UGPG output=All}
			</select>
		</td>
	</tr>
	
</table>
<div id="tableDisplay"></div>
{/if}
