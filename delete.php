<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>login</title>
</head><body>
<?php
session_start(); 
// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {	
if (@mysqli_select_db ($dbc,'tinkers_fixers')){
$query="select * FROM members WHERE email='{$_POST['email1']}' AND pasw='{$_POST['psw']}'";
$r=mysqli_query ($dbc, $query);
$row = mysqli_fetch_array ($r);
if($row){
	
$query = "DELETE  FROM members  WHERE user_id='{$_SESSION['id']}'";
 $r=mysqli_query ($dbc,$query);

$_SESSION['Trueentry']=true;
    unset ($_SESSION);
    session_destroy();
setcookie('username',"", time() - (86400 * 30), "/"); // 86400 = 1 day
setcookie('email1', "", time() - (86400 * 30), "/"); // 86400 = 1 day
setcookie('password',"", time() -(86400 * 30), "/"); // 86400 = 1 day
setcookie('truelogin','',  time() -(86400 * 30), "/");
header("Location:Tinkers\$FixersHP.php");
exit();
} $_SESSION['delete']=false;
header("Location:{$_SERVER['HTTP_REFERER']}");}}
else
{$_SESSION['delete']=false;
header("Location:{$_SERVER['HTTP_REFERER']}");	}		

?>

</body>
</html>