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
$_SESSION['Trueentry']=true;
    unset ($_SESSION);
    session_destroy();

if($_SERVER['HTTP_REFERER']=="http://localhost/Tinikers&fixers/my-account.php"){
header("Location:Tinkers\$FixersHP.php");
}
else
header("Location: {$_SERVER['HTTP_REFERER']}");
			exit();

?>

</body>
</html>
