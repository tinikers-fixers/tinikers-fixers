<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css1\stylesheet.css" />
		<!-- Scripts -->
		<script src="javas1/javaS.js"></script>

<title>join us</title>
</head><body>
<?php 
// Address error handling.
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
session_start(); 
$name=$_POST['userName'];
$_SESSION['id']=$row['user_id'] ;
$emali=$_POST['email1'];
$pw=$_POST['psw1'];
$phone=0;
// Connect and select.	
if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {				
if (!@mysqli_select_db ($dbc, 'tinkers_fixers')) {
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}		
} 
else {		
die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

// التحقق من وجود الايميل 
$query = "SELECT user_id FROM members  WHERE (email = '{$_POST['email1']}')";	
$r = mysqli_query ($dbc, $query);
$row = mysqli_fetch_array ($r);
if(!$row &&$_POST['email1']){
// Define the query.	
$query = "INSERT INTO members 
VALUES (0, '{$_POST['userName']}', '{$_POST['email1']}',' {$_POST['psw1']}', '$phone','imag/login.png')";		

// Execute the query.	
if (@mysqli_query ($dbc, $query)) {		
print "<p>The $name has been added.</p>";

    $_SESSION['username'] =$_POST['userName'] ;
    $_SESSION['loggedin'] = time();
	$_SESSION['Trueentry']=false;
	
	
setcookie('truelogin','Successful login', time() + (86400 * 30), "/");
if($_SERVER['HTTP_REFERER']=="/join.php"){header("Location:Tinkers\$FixersHP.php");}
else header("Location: {$_SERVER['HTTP_REFERER']}");
			exit();
}
} 	

	


mysqli_close($dbc);
 
// Display the form.
?>
<div id="page">
<header id="header">

			<header id="header">
				<div id="header-inner">
				<div id="logo">
				   <a href="Tinkers$FixersHP.php"><img src="imag/Tinkers$FixersLogo.png" width="299" height="90" alt="Logo of Tinkers&Fixers Website" /></a>
				</div>
                <form action="questions_forum.php" method="get"> 
					<div class="box">
					<div class="container-1">
						<span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" name="query" spellcheck="false" autocomplete="off" placeholder="Search..">
                    </div>
					</div>
			    </form>
				
				<?php
               
					print"<div class='action-btn2' align='right'>"; 
				    print"<a id='meta' id=\"logoytbr\" href=\"usrelogin.php\" style=\"width:auto;\"><i class='fa fa-sign-in'></i>Log in</a>";
					print"</div >";
					print"<div class='action-btn' align='right'>";
				    print"<a id=\"logoytbr\" href=\"#\"style=\"width:auto;\">Join us</a>";
				    print"</div >";	
			 	   
					
                				
				?>

				</div>
			</header>
			
			<div class="topnav">
				<a id="index" href="Tinkers$FixersHP.php"><i class="fa fa-home"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>
		
			<div class="clr"></div>
	<!--Join us --->
	<div id="modal-wrapper4" >
  
    <form class="modal-content animate" action="join.php" method="post" onsubmit="return chackpasword();" name= "Join-us">
        
    <div class="imgcontainer">

      <img src="imag/login.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"></h1>
    </div>
    
    <div class="container3">
	<?php
	   if ($row){
		 print "<h2 class=\"password1\">This email is  exists. Please go to the login page</h2>";}?>
	   <input type="text" placeholder="Enter userName" name="userName" required  > 
       <input type="email" placeholder="Enter Email"    name="email1"  required> 
       <input type="password" placeholder="Enter Password" name="psw1" id="psw1" required>  
       <input type="password" placeholder="Enter Password" name="psw2" id="psw2"required >
	   <div class="popup" >
       <span  class="popuptext2" id="myPopuppas"> Password not compatible</span>
	   </div>
      <button type="submit" >Join us</button>    
    </div>
    
  </form>
	</div>
	<!-------------footer------------->
			
			<div id="footer-main">
			<div id="footer-in">
			<div id="footer-left">
			<div id="footer-box">
			<h6> Tinkers & Fixers </h6>
            <ul>
                <li><a href="Tinkers$FixersHP.php">Home</a></li>
                <li><a href="laptop-repair.php">PC Laptop Repair</a></li>
			    <li><a href="questions_forum.php">Questions Forum</a></li>
			    <li><a href="Tinkers$FixersHP.php #about">About us</a></li>
				<li><a href="Tinkers$FixersHP.php #contact2">Contact us</a></li>
            </ul>
			</div>
			</div>
			<div id="footer-left">
			<div id="footer-box">
			<h6> PC Laptop Repair </h6>
            <ul>
                <li><a href="#">MAC</a></li>
                <li><a href="#">TOSHIBA</a></li>
			    <li><a href="#">DELL</a></li>
			    <li><a href="#">HP</a></li>
				<li><a href="#">WINDOWS</a></li>
				<li><a href="#">MAC OS</a></li>
            </ul>
			</div>
			<div id="footer-box">
			<h6> Questions Forum </h6>
            <ul>
                <li><a href="#">Ask a Question</a></li>
            </ul>
			</div>
			</div>
			<div id="footer-left">
			<div id="footer-box">
			<h6> Team Developers </h6>
            <ul>
                <li><a href="#"><i class="fa fa-laptop"></i>Amina Duramae</a></li>
                <li><a href="#"><i class="fa fa-laptop"></i>Basmah Bashrahil</a></li>
				<li><a href="#"><i class="fa fa-laptop"></i>Seham Khan</a></li>
				<li><a href="#"><i class="fa fa-laptop"></i>Asal Almaimani</a></li>
				<li><a href="#"><i class="fa fa-laptop"></i>Fayza Sikander</a></li>
				<li><a href="#"><i class="fa fa-laptop"></i>Amani Darmawi</a></li>
            </ul>
			</div>
			
			</div>
			<div id="footer-right">
			<div id="footer-box">
			<h6> Sitemap </h6>
			<img src="imag/sitemap.jpg" alt="Sitemap of Tinkers&Fixers Website" />
			<h6> Languages used </h6>
			<p> HTML/CSS/PHP/JAVASCRIPT </p>
			</div>
			</div>
			
			<div class="clr"></div>
			
			</div>
			</div>

			
			<footer id="footer">
			<div id="footer-inner">
				<p>&copy; 2018 <a href="#">Tinkers & Fixers</a> &#124; <a href="#">All Rights Reserved</a> &#124; <a href="#">Privacy Policy</a></p>
				<div class="clr"></div>
			</div>
			</footer>
				
		</div>
			
</div>
</body>
</html>
