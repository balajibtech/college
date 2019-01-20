<html>
<head>
	<link href="css/default.css" rel="stylesheet"></link>
	
		<script src="js/common.js"></script>
		<script src="js/student.js"></script>
		<script src="js/admin.js"></script>
		<script src="js/mark.js"></script>
		<script src="js/staff.js"></script>
		<script src="js/ajax.js"></script>
		<script src="js/validation.js"></script>
	{literal}<script> var realPath={/literal}'{$realPath}'{literal};</script>
	{/literal}
		<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
		<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
</head>
<body>
{if $loginUser}
<div class="labelText">Welcome {$loginUser}!</div>
{/if}
<div class="heading">COLLEGE MANAGEMENT SYSTEM</div><br/>
<body class="bodyStyles">
