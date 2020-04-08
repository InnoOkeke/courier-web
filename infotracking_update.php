<?php
require_once('config/config.php');

$con = mysqli_connect($host,$user,$pass,$db) or die ('Cannot connect: '.mysqli_error());

$tracknum = mysqli_real_escape_string($con,$_POST['tracknum']);
$track_details = mysqli_real_escape_string($con,$_POST['track_details']);
$sender = mysqli_real_escape_string($con,$_POST['sender']);
$receiver = mysqli_real_escape_string($con,$_POST['receiver']);
$status = mysqli_real_escape_string($con,$_POST['status']);
$date = mysqli_real_escape_string($con,$_POST['date']);

$sql = "INSERT INTO track_details (tracknum, track_details, sender, receiver, status, date) VALUES ('".$tracknum."', '".$track_details."', '".$sender."', '".$receiver."', '".$status."','".$date."')";
mysqli_query($con,$sql) or die ('Failed Query : '.mysqli_error($con));

mysqli_close($con);

        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registeration Complete')
    window.location.href='Admin_dashboard.php';
    </SCRIPT>");  

?>