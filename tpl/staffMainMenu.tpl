{if $loginTypeId=='2'}
<div class="heading">Staff Main Menu</div>

	<table>
		<tr>
			<td>
				<input type="button" value="Edit Profile" onclick="pageRedirect('staffEditProfile')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td align="center">
				<label class="labelText">Subject Details</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Add Subject" onclick="pageRedirect('addSubject')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="View Subject" onclick="pageRedirect('viewSubject')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Edit/Delete Subject" onclick="pageRedirect('editDeleteSubject')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td align="center">
				<label class="labelText">View Account</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Department" onclick="pageRedirect('viewDepartmentAccount')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Staff" onclick="pageRedirect('viewStaffAccount')" class="buttonSize">	
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Student" onclick="pageRedirect('viewStudentAccount')" class="buttonSize">	
			</td>
		</tr>

		<tr>
			<td align="center">
				<label class="labelText">Marks</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Add Mark" onclick="pageRedirect('addMark')"  class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="View Mark" onclick="pageRedirect('viewMark')" class="buttonSize">	
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Edit/Delete Mark" onclick="pageRedirect('editDeleteMark')" class="buttonSize">	
			</td>
		</tr>

		<tr>
			<td align="center">
				<label class="labelText">Logout</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Logout" onclick="logout()" class="buttonSize">	
			</td>
		</tr>

	</table>
{/if}
