



<html>
<head>
	<title>
		WimdowsPage
	</title>

	    <meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css1\stylesheet.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<!-- Scripts -->
		<script src="javas1/javaS.js"></script>
	
</head>
<body>

	 <div id="page">
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
                session_start();
				if(!empty($_SESSION['username'])){
					print"<label class='action-dropdown'>";
				
                    print"<div class='dd-button'>".$_SESSION['username']."</div>";
                    print"<input type='checkbox' class='dd-input' id='test'>";
					print"<ul class='dd-menu'>";
					print'<li><a href="my-account.php">my Account</a></li>';
				    print"<li><a  onclick=\"send\" name=\"Logout\"  value=\"Logout\" href=\"logout.php\">Logout</a></li>";
					print"</ul>";
				
				    print"</label>";
				    
				}
				else {
					print"<div class='action-btn2' align='right'>"; 
				    print"<a id='meta' id=\"logoytbr\" href=\"#\" onclick=\"document.getElementById('modal-wrapper').style.display='block'\" style=\"width:auto;\"><i class='fa fa-sign-in'></i>Log in</a>";
					print"</div >";
					print"<div class='action-btn' align='right'>";
				    print"<a id=\"logoytbr\" href=\"#\" onclick=\"document.getElementById('modal-wrapper3').style.display='block'\">Join us</a>";
				    print"</div >";	
			 	   
					unset($_SESSION);
                    session_destroy(); 
				}
                				
				?>

				</div>
			</header>
			
			<div class="topnav">
				<a id="index" href="laptop-repair.php"><i class="fa fa-home"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>	
		
			<div class="clr"></div>
				
			
			<div id="content7">
			<div id="image">
			   <img class="main-laptop" src="imag/windows.jpg" alt="Dell">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">WINDOWS</h1>
                 <h3 style="transform:translate(-20px,-60px); color:white;">Repair guides for many Windows versions. </h3>	         
			    </div>
            
			</div>
	 
	<div class="tab0" align = "center">
		<button class="tablinks" onclick="openPc(event, 'Windows 10')"> <img src="imag/win10.jpg" alt="Windows 10" style="width:200px;height:200px;">
		<br/>Windows 10</button>
		<button class="tablinks" onclick="openPc(event, 'Windows 8')"><img src="imag/win8.jpg" alt="Windows 8" style="width:200px;height:200px;">
		<br/>Windows 8</button>
		<button class="tablinks" onclick="openPc(event, 'Windows 7')"><img src="imag/Microsoft-Windows-7-sticker-logo26454.jpg" alt="Windows 7" style="width:200px;height:200px;">
		<br/>Windows 7</button>
	</div>

	<!-- Tab content --> 
	
	<!-- Windows 10 issues-->

	
	<div id="Windows 10" class="tabcontent">
		<h3>Windows 10 Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Reset1')">Reset</button>
			<button class="tablinks" onclick="openPcCat(event, 'Start Up1')">Start Up</button>
			<button class="tablinks" onclick="openPcCat(event, 'Wifi1')">WiFi</button>
		</div>
		
	</div>
	
	<div id = "Reset1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win10.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong>More than 3 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> This video shows how to reset your PC. </strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/Windows 10 - How to Reset Windows to Factory Settings without installation disc.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>
	</div>
	
	
	<div id = "Start Up1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win10.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate to Hard</div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> more than 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This video shows how solve startup issues in your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/How To Fix Windows 10 Startup Problems [Complete Tutorial].mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>                  
	</div>
	
	<div id = "Wifi1" class = "tabcontent tabcontent1">
		<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win10.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5-10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This shows how to fix wifi issues on your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/Fix Windows 10 WiFi Problems [3 Solutions].mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>	
	</div>
	
	<!-- Windows 8 issues-->
		
	<div id="Windows 8" class="tabcontent">
		<h3>Windows 8 Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Reset2')">Reset</button>
			<button class="tablinks" onclick="openPcCat(event, 'Start Up2')">Start Up</button>
			<button class="tablinks" onclick="openPcCat(event, 'Wifi2')">WiFi</button>
		</div>
	</div>
	
	<div id = "Reset2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win8.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong>More than 3 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> This video shows how to reset your PC. </strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/Windows 8 Factory Reset Tutorial.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>
	</div>
	
	<div id = "Start Up2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win8.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate to Hard</div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> more than 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This video shows how solve startup issues in your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/How To Fix Common Windows 8 Start UpBoot Up Problems.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>                  
	</div>
	
	<div id = "Wifi2" class = "tabcontent tabcontent1">
		<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/win8.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5-10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This shows how to fix wifi issues on your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/How to Fix a Wireless Internet Connection in Windows 8.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>	
	</div>
	
	
	<!-- Windows 7 issues-->
	
	<div id="Windows 7" class="tabcontent">
		<h3>Windows 7 Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Reset3')">Reset</button>
			<button class="tablinks" onclick="openPcCat(event, 'Start Up3')">Start Up</button>
			<button class="tablinks" onclick="openPcCat(event, 'Wifi3')">WiFi</button>
		</div>
	</div>
	
	<div id = "Reset3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag//Microsoft-Windows-7-sticker-logo26454.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong>More than 3 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> This video shows how to reset your PC. </strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/how to Factory Reset Windows 7  (2017) Reset Windows 7 To Factory Settings Without CD.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>
	</div>
	
	<div id = "Start Up3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag//Microsoft-Windows-7-sticker-logo26454.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate to Hard</div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> more than 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This video shows how solve startup issues in your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/Fixing Windows 7 Start-up Problems.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>                  
	</div>
	
	<div id = "Wifi3" class = "tabcontent tabcontent1">
		<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag//Microsoft-Windows-7-sticker-logo26454.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> Video </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5-10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This shows how to fix wifi issues on your PC.</strong></p>
							<div id="box0" align="center">
							 <video align = "center" width="900" height="800" controls>
								<source src="Video/Windows 7 WIFI FIX!.mp4" type="video/mp4">
  
								Your browser does not support the video tag.
								</video>
							</div>	
	</div>
	
	
	
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
		
	
<!--login  https://www.youtube.com/watch?v=yafNKsqZ4cA --->
		
	<div id="modal-wrapper" class="modal">
        <form  name="loginform" class="modal-content animate" action="usrelogin.php" method="post" onsubmit="return validateForm()">
        
            <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="imag/login.png" alt="Avatar" class="avatar">
            <h1 style="text-align:center"></h1>
            </div>
    <div class="container">
	<?php
     

	  
	  if (isset ($_COOKIE['username'])){
	  print"<h1 class='username' >welcome back {$_COOKIE['username']} </h1> ";
	  } 
      print "<input type=\"email\" placeholder=\"Enter Email\" name=\"email1\" value={$_COOKIE['email1']} required>"; 
      print"<input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" value={$_COOKIE['password']} required>";
      print "<span class=\"glyphicon glyphicon-eye-open\"></span> "; 
      ?>	  
      <button type="submit">Login</button>
      <input  name="checkbox" type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#"  onclick="document.getElementById('modal-wrapper2').style.display='block'" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
   
	</div>
    
  </form>
  </div>
  <!--Forgot Password ?-->
   <div id="modal-wrapper2" class="modal2">
  
  <form class="modal-content animate" action="password.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imag/login.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"></h1>
    </div>

    <div class="container">
      <input type="email" placeholder="Enter Email" name="email">     
      <button type="submit">send new Password </button>
     
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>
		
		
		<!--Join us --->
	<div id="modal-wrapper3" class="modal3">
  
  <form class="modal-content animate" action="join.php" method="post">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imag/login.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"></h1>
    </div>

    <div class="container3">
	   <input type="text" placeholder="Enter userName" name="userName"> 
       <input type="email" placeholder="Enter Email"    name="email1"> 
       <input type="password" placeholder="Enter Password" name="psw">  
       <input type="password" placeholder="Enter Password" name="psw">       
      <button type="submit">Join us</button>    
    </div>
    
  </form>
		
</div>

</body>
</html>

