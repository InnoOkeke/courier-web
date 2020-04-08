<?php
$username = $_POST['username'];
#password = $_POST['password'];

if($username =="Admin" || $password=="admin")
{
	header('Location: Admin_dashboard.php');
}
else{

	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Failed')
    window.location.href='Admin%20Login.htm';
    </SCRIPT>");  
}
?>