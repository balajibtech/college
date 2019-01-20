{if $loginTypeId=='3'}<div class="heading">Student Main Menu</div>
<table>
	<tr>
		<td>
			<input type="button" value="Edit Profile" onclick="pageRedirect('studentEditProfile')" class="buttonSize">
		</td>
	</tr>
	<tr>
		<td>
			<input type="button" value="View Mark" onclick="pageRedirect('studentViewMark')" class="buttonSize">	
		</td>
	</tr>

	<tr>
		<td>
			<input type="button" value="Logout" onclick="logout()" class="buttonSize">	
		</td>
	</tr>

</table>
{/if}
