<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Star Logistics and Security</title>
</head>

<body>



<div align="center">
	<table width="88%" border="0">
		<tbody><tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
			<img src="Admin_dashboard_files/8cAbkgbMi.jpg" width="86" height="82">
			<b><font size="6" face="Verdana">Star Logistics and Security</font></b></td>
		</tr>
		<tr>
			<td><hr size="4" color="#FF0000"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td> <b><font face="Verdana">&nbsp;&nbsp; Admin Dashboard</font></b></td>
		</tr>
		<tr>
		<form name="loginform" id="loginform" method="post" action="Admin_dashboard.php">
			<td>
				<input value="Update Tracking" name="update" type="submit">
				<input value="Logout" name="logout" type="submit"></td>
			<?php

			if(isset($_POST['update']))
			{
				header('Location: Update_Tracking.htm');
			}	
			?>

			<?php
			if(isset($_POST['logout']))
			{
				header('Location: Admin%20Login.htm');
			}


			?>

		<tr>
		<tr>
			<td>&nbsp;
			</td>
		</tr>
</form>
		<tr>
			<td><hr size="1" color="#FF0000"></td>
		</tr>
		<tr>
			<td><font size="1" face="Arial">Star Logistics and Security © 2017 
			All Rights Reserved<br>
			<br>
			<a style="text-decoration:none" href="https://www.starlogisticsandsecurity.com/">Home</a> | 
			<a style="text-decoration:none" href="https://www.starlogisticsandsecurity.com/terms">Terms of Service</a> | 
			<a style="text-decoration:none" href="https://www.starlogisticsandsecurity.com/logistics">Logistics
			</a> </font></td>
		</tr>
	</tbody></table>
</div>

<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




</p>




</body></html>