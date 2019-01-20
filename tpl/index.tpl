<div>
	{include file='header.tpl'}
</div>

{if $loginTypeId=='' && $pageRedirect!='forgotPassword.tpl'}

<div>
	{include file='loginForm.tpl'}
</div>

{elseif $pageRedirect!='forgotPassword.tpl'}

	<div class="menu">{include file=$menuFile}</div>
	
	<div class="content">{include file=$pageRedirect}</div>

{else}
	<div>{include file=$pageRedirect}</div>	
{/if}

<div>
	{include file='footer.tpl'}
</div>
