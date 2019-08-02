<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>join us</title>
</head><body>
<?php 
// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
// Connect and select.	
if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {				
if (!@mysqli_select_db ($dbc, 'tinkers_fixers')) {
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}		
} 
else {		
die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

// Define the query.	
$query = "INSERT INTO Contactus
VALUES ( '{$_POST['name']}', '{$_POST['email']}',' {$_POST['phone']}', '{$_POST['contact_message']}')";		

// Execute the query.	
if (@mysqli_query ($dbc, $query)) {		
print "<p>The {$_POST['name']} has been added.</p>";
header("Location: {$_SERVER['HTTP_REFERER']}");
			exit();	
} 
else {		
print "<p>Could not add the entry because: <b>" . mysqli_error($dbc) . "</b>. The query was $query.</p>";	
}	
mysqli_close($dbc);
 
// Display the form.
?>

</body>
</html>
