{if $loginTypeId=='2' || $loginTypeId=='1'}<div class="heading">VIEW DEPARTMENT DETAILS</div>

<table align="center">
	<tr>
		<td><label class="labelText">Select Qualifiction</label><label class="mandatoryStar">*</label></td>

		<td>
			<select name="qualification" id="qualification" onchange="fetchTable(this.value,'create')">
			{html_options values="" output=Select}
			{html_options values=UGPG output=All}
			{html_options values=UG output=UG}
			{html_options values=PG output=PG}
			</select>
		</td>
	</tr>
	
</table>
<div id="tableDisplay"></div>
{/if}
