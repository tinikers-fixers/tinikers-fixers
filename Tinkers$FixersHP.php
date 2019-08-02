
<html>

	<head>

		<title> Tinkers $ Fixers </title>
		
		<meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css1\main.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		
    </head>
	<body>
		<div id="page">
		    <header id="header">
				<div id="header-inner">
				<?php
						session_start();
						if(empty($_SESSION['username'])){ 
						print"<div class='action-btn' align='left'>";
				        print"<a id=\"logoytbr\" href=\"#\" onclick=\"document.getElementById('modal-wrapper3').style.display='block'\">Join us</a>";
			            print"</div >";	
			 	        print"<div class='action-btn' align='left'>"; 
				        print"<a id='meta' id=\"logoytbr\" href=\"#\" onclick=\"document.getElementById('modal-wrapper').style.display='block'\" style=\"width:auto;\"><i class='fa fa-sign-in'></i>Log in</a>";
					    print"</div >";
						unset ($_SESSION);
                        session_destroy();
						}
								
						else { 
						print"<label class='action-dropdown' align='left'>";
                        print"<div class='dd-button'>".$_SESSION['username']."</</div>";
                        print"<input type='checkbox' class='dd-input' id='test'>";
					    print"<ul class='dd-menu'>";
					    print'<li><a href="my-account.php">my Account</a></li>';
				        print"<li><a  onclick=\"send\" name=\"Logout\"  value=\"Logout\" href=\"logout.php\">Logout</a></li>";
					    print"</ul>";
				        print"</label>";}
					    ?>
							
				</div>
			</header>
			<div id="content">
				<div id="content-inner">
					<main id="contentbar">
				    <div class="article">
				    <div class="searchHomPage">
					
					    
					
				    <div class="formsearchHomPage">
						<img src="imag/Tinkers$FixersLogo.png" width="345" height="99" alt="Logo of Tinkers&Fixers Website" />
	                    <form action="questions_forum.php" method="get"> 
							<div class="box">
							<div class="container-1">
							    <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" id="search" name="query" spellcheck="false" autocomplete="off" placeholder="What would you like to fix today?">
                            </div>
							</div>
						</form>
		            </div>
				    </div>
				
			
				    <div class="topnav">
				<a id="index" href="Tinkers$FixersHP.php"><i class="fa fa-home"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>
							
					<div class="clr"></div>
						
		            <div id="content1"> 
					<div id="about" style = "">
					<div class="slideshow-container" >
                    <div class="mySlides fade">
                        <img src="imag/laptop.jpg" style = "width:50%; height:35% ;border-style:solid; border-width:thin;" >
                        <div class="text">About us</div>
						<div class="text2">Software and hardware solutions!!</div>
					</div>
					<div class="mySlides fade">
                        <img src="imag/Imagelap.jpg" style = "width:50%; height:35%" >
						<div class="text1"><p > <br/><br/> Tinkers And Fixers is a <br/>site where  people can<br/> get their laptops<br/>  repaired and fixed <br />in a quick time</p></div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
		            </div>
					</div>
					<div id="contact2">
                        <h1>Contact us</h1>
					    <i class="material-icons" >&#xe0dd; </i> 
					    <i class="material-icons">&#xe0e1;</i>
						<div id="area">
                        <form action="Contactus.php" method="post" onsubmit="return checkemailpassword();">
						    <input type="text"   name="name" placeholder="Enter name " required /><br>
						    <input type="email" name="email" placeholder="Enter Email" id="email" style = "width:60%;"  /><br>
			                <div class="popup" >
                                <span  class="popuptext" id="myPopup"> +966XXXXXXXX</span>
			                    <span  class="popuptext1" id="myPopup1">Please enter your email or phone number</span>
                            </div>  
						    <input type="tel"  name="phone"  placeholder="Enter phone " id="phone"  style = "width:60%;" /><br>
						    <textarea name="contact_message" placeholder="Enter your message" rows="6"  required ></textarea><br>
                            <input style="background-color: #079CCE;" type="submit" value="Submit" />								
                        </form>	
                        </div>									
						</div>
						</div>
				    </div>  
					</main>
					
					<div class="clr"></div>
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
			
			
		</div>
		
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
  
  <form class="modal-content animate" action="/password.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imag/login.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"></h1>
    </div>

    <div class="container">
      <input type="email" placeholder="Enter Email" name="email" required>     
      <button type="submit">send new Password </button>
     
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>
		
		
		<!--Join us --->
	<div id="modal-wrapper3" class="modal3">
  
    <form class="modal-content animate" action="join.php" method="post" onsubmit="return chackpasword();" name= "Join-us">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="imag/login.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"></h1>
    </div>

    <div class="container3">
	   <input type="text" placeholder="Enter userName" name="userName" required> 
       <input type="email" placeholder="Enter Email"    name="email1"  required> 
       <input type="password" placeholder="Enter Password" name="psw1" id="psw1">  
       <input type="password" placeholder="Confirm Password" name="psw2" id="psw2">
	   <div class="popup" >
       <p class="popuptext2" id="myPopuppas"> Password not compatible</span>
	   </div>
      <button type="submit" >Join us</button>    
    </div>
    
  </form>
		
</div>
				<!-- Scripts -->
		<script src="javas1/javaS.js"></script>
		
	</body>

</html>