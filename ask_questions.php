
<!DOCTYPE html>
<html>
	<head>
	    
		<title>Ask a Question</title>
		
		<meta name="keywords" content="" />
        <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css1\stylesheet.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<!-- Scripts -->
		<script src="javas1/javaS.js"></script>
		
		
	</head>
	
	<body onload="truelogin();">
	
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
				<a id="index" href="Tinkers$FixersHP.php"><i class="fa fa-home"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>	
		
			<div class="clr"></div>
			
			<div id="content">
				<div id="content-inner">
					<main id="contentbar">
					     
			            <img id="icon2" src="imag\question_icon.png">
                        <h2 class="font2">Ask a Question</h2>
						<div class="clr"></div> 
                  	    <hr>
						<div class="clr"></div> 
						
						
						<div class="question_form">
						   
                            <form action="questions_forum.php" enctype="multipart/form-data" method="post" >
						  
						        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" required >
								<p>Browse image to upload:<br />
						        <input type="file" name="image" id="image" style=" width: 100%;
       padding: 12px 20px;
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       border-radius: 1px;
       box-sizing: border-box;" accept="image/x-png,image/jpeg" required /><br /><br />
                                 Choose the device company:<br /> <br />
								   <input type = "radio" name = "shape" value="DELL" onclick = "selectdevis(DELL)"  />DELL
								   <input type = "radio" name = "shape" value ="TOSHIBA" onclick = "selectdevis(TOSHIBA)"  />TOSHIBA
								   <input type = "radio" name = "shape" value ="Mac" onclick = "selectdevis(Mac)"  />MAC
								   <input type = "radio" name = "shape" value ="HP" onclick = "selectdevis(HP)"  />HP
								   <input type = "radio" name = "shape" value ="OTHER" onclick = "selectdevis(OTHER)" />OTHER
                                  <p id= "devicename" style="display:none; ">
                								  
								  Choose the device name:</p>
								  <select name="TOSHIBA" id="TOSHIBA" style="display:none; width:10cm;height:1cm;  ">
		                             <option value="1">Tecra</option>
		                             <option value="2">Satllite</option>
									 <option value="4">Portege</option>
									  <option value="5">other</option>
	                              </select>
								  <select name="DELL" id="DELL" style="display:none; width:10cm;height:1cm;  ">
		                             <option value="7">Studio</option>
		                             <option value="8">Vostro</option>
									 <option value="9">Inspiron</option>
									  <option value="10">other</option>
	                              </select>
								  <select name="HP" id="HP" style="display:none; width:10cm;height:1cm; ">
		                             <option value="11">Zbook</option>
		                             <option value="12">TouchSmart</option>
									 <option value="13">Split 2x</option>
									  <option value="14">other</option>
	                              </select>
								  <select name="Mac" id="Mac" style="display:none; width:10cm;height:1cm;  ">
		                             <option value="15">Book</option>
		                             <option value="16">Book Air</option>
									 <option value="17">Book Pro</option>
									 <option value="35">other</option>
	                              </select>
								  <p id= "OTHERdevicename" style="display:none;" >
                								  
								  Enter the device name:</p>
								   <input type="text" name="OTHER" id="OTHER" value=""  style="display:none; width:10cm;height:1cm;  "/>
	                              
							   <br />
	                            Question Title:<br />
			                    <input type="text" name="title" size="20" required ><br /><br />
	                            Question Description:<br />
					            <textarea name="description" placeholder="Write your problem here.." rows="4" cols="50" required ></textarea><br/><br />
	                            
						
	                        <input type="submit" name="submit" value="Add a Question" style="width: 100%;
    background-color: #079CCE;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: px;
    cursor: pointer;
    font-size:16px;" /></p> 
                            </form>
						</div>
				    
			        </main>
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
			
		
	    
		<!--------login  https://www.youtube.com/watch?v=yafNKsqZ4cA ---------->
	    <div id="modal-wrapper" class="modal">
        <form class="modal-content animate" action="usrelogin.php" method="post" name="from1" value=<?=$_SERVER['PHP_SELF'];?>>
            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="imag/login.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center"></h1>
            </div>

            <div class="container">
                <input type="email" placeholder="Enter Email" name="email1" id="emaillogin"> 
                <input type="password" placeholder="Enter Password" name="psw" id="passwordlogin">        
                <button type="submit">Login</button>
                <input type="checkbox" style="margin:26px 30px;"> Remember me      
                <a href="#"  onclick="document.getElementById('modal-wrapper2').style.display='block'" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
            </div>
    
        </form>
        </div>
        <!-------Forgot Password ?---------->
        <div id="modal-wrapper2" class="modal2">
            <form class="modal-content animate" action="/password.php">
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
		
		
		<!------Join us --------->
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
                    <input type="password" placeholder="Enter Password" name="psw1" id="psw1"required>  
                    <input type="password" placeholder="Enter Password" name="psw2" id="psw2"required>
	                <div class="popup" >
                        <span  class="popuptext2" id="myPopuppas"> Password not compatible</span>
	                </div>
                   <button type="submit" >Join us</button>    
                </div>
    
            </form>
		
        </div>
		
		<!------ Scripts ------->
		<script src="javas1/javaS.js"></script>

  
    
        
	</body>
</html>
	
	

