<html><head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Track Results</title>
</head>

<body>
<?php
$tableheader = "<tbody><tr>
						<td align=center width=169><b>
						<font size=2 face=Verdana>Tracking Number</font></b></td>
						<td align=center width=232><b>
						<font size=2 face=Verdana>Tracking Details</font></b></td>
						<td align=center width=189><b>
						<font size=2 face=Verdana>Sender</font></b></td>
						<td align=center width=251><b>
						<font size=2 face=Verdana>Receiver</font></b></td>
						<td align=center width=138><b>
						<font size=2 face=Verdana>Status</font></b></td>
						<td align=center><b><font size=2 face=Verdana>Date</font></b></td>
					</tr>";


?>

<div align="center">
	<table width="88%" border="0">
		<tbody><tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
			<img src="Track%20Results_files/8cAbkgbMi.jpg" width="86" height="82">
			<b><font size="6" face="Verdana">Star Logistics and Security</font></b></td>
		</tr>
		<tr>
			<td><hr size="4" color="#FF0000"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp; <b><font face="Verdana">Tracking Results</font></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="_derived/nortbots.htm" onsubmit="location.href='_derived/nortbots.htm';return false;" webbot-onsubmit="" webbot-action="--WEBBOT-SELF--">
				<!--webbot bot="SaveResults" U-File="_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" startspan --><input name="VTI-GROUP" value="0" type="hidden"><!--webbot bot="SaveResults" i-checksum="43374" endspan -->
				<fieldset style="border: 1px solid #FF0000; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px">
				<legend><font size="2" face="Arial" color="#808080">Information</font></legend>
				<table width="100%" border="0">
				<?php echo $tableheader;?>
				<?php
				error_reporting(0);
				require_once('config/config.php');
				$con = mysqli_connect($host,$user,$pass,$db) or die('Cannot connect'.mysqli_error());
				$tracknum = mysqli_real_escape_string($con,$_GET['tracknum']);
				$sql = "SELECT * FROM track_details WHERE tracknum = '$tracknum'";
				$result = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));
					//$info ="<b><font size=2 face=Arial color=#FF0000>IN TRANSIT</font></b></p>";
					//$info2 = "<b><font face=Arial size=2 color=#008000>&nbsp;COMPLETE</font></b></p>";
				while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ){
						$notify = $row['status'];
						switch($notify){
						case "IN TRANSIT":
						echo $info;
						break;
						case "STOPPED":
						echo $info2;
						break;
						case "DELIVERY COMPLETE":
						echo $info3;
						break;
						default:
						echo "NIL";
						}

					echo "
						
					
						<tr>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center width=169>
						".$row['tracknum']."</td>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center width=232>
						".$row['track_details']."</td>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center width=189>
						".$row['sender']."</td>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center width=251>
						".$row['receiver']."</td>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center width=138>
						".$notify."</td>
						<td style=font-family: Arial; font-size: 10pt; font-weight: bold align=center>
						".$row['date']."</td>
					</tr>
					
					";
					
				}
				
				?>
				</tbody></table>
				</fieldset></form>
			</td>
		</tr>
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




</body></html>