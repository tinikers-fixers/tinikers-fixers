<?php
session_start();
	// Connect and select the database
	$dbc = mysqli_connect ('localhost', 'root', '2181894805');
    mysqli_select_db ($dbc, 'tinkers_fixers');
	
	/*------ Upload image and save to database -----*/
		
	if (isset ($_POST['myAnswer'])){
	
	    if($_SESSION['id']) {
		
		  if(($_POST['newAnswer'])&&$_POST['newAnswer']!=" Type your answer or comment "){
			
			$query = "INSERT INTO answers 
		VALUES ('{$_SESSION['id']}','{$_GET['id']}', '0', '{$_POST['newAnswer']}','0')";
		  $r=mysqli_query ($dbc, $query) ;
		 
		}	}	
	}
	/*------ Upload image and save to database -----*/
	header("Location: {$_SERVER['HTTP_REFERER']}");exit();
?>