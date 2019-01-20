{if $loginTypeId!='3'}<div class="heading">VIEW STAFF DETAILS</div>

<table align="center">
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
			<label class="labelText">View All Staff</label><label class="mandatoryStar">*</label>
		</td>
		<td>
		
		<input type="button" value="View All" onclick="staffTable('all','staff','viewAll')"
		
		</td>
	</tr>	
</table>
<div id="viewStaffTable"></div>
<br>
<div id="oneStaffTable"></div>
{/if}
