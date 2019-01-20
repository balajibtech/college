<div class="heading">Admin Main Menu</div>

	<table>
		<tr>
			<td>
				<input type="button" value="Edit Profile" onclick="pageRedirect('adminEditProfile')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td align="center">
				<label class="labelText">Create Account</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Department" onclick="pageRedirect('createDepartment')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Staff" onclick="pageRedirect('createStaffAccount')" class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Student" onclick="pageRedirect('createStudentAccount')" class="buttonSize">
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
				<label class="labelText">Edit/Delete Account</label>
			<td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Department" onclick="pageRedirect('manipulateDepartmentAccount')"  class="buttonSize">
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Staff" onclick="pageRedirect('manipulateStaffAccount')" class="buttonSize">	
			</td>
		</tr>

		<tr>
			<td>
				<input type="button" value="Student" onclick="pageRedirect('manipulateStudentAccount')" class="buttonSize">	
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
