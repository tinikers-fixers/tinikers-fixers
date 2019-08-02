<!DOCTYPE html>
<html>
<head>
	<title> MacOSPage  </title>
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
				<a id="index" href="Tinkers$FixersHP.php"><i class="fa fa-home"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>	
		
			<div class="clr"></div>
					
		
			
			<div id="content7">
			<div id="image">
			   <img class="main-laptop" src="imag/mac-os-logo.gif" alt="Hp">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">MAC OS</h1>
                 <h3 style="transform:translate(-160px,-90px); color:white;">Repair guides for Mac OS. </h3>	         
			    </div>
            
			</div>
	
	<div class="tab0">
		<button class="tablinks" onclick="openPc(event, 'MACOS')"><img src="imag/MACOS.jpg" alt="MAC OS" style="width:300px;height:200px;">
		<br/>MAC OS</button>
	</div>

	<!-- Tab content -->
	
	<!-- MAC OS Software issues-->
	
	<div id="MACOS" class="tabcontent">
		<h3>MAC OS Software Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Faster')">Fix a slow Mac OS</button>
			<button class="tablinks" onclick="openPcCat(event, 'FirstAid')">Run First Aid on Disk</button>
			<button class="tablinks" onclick="openPcCat(event, 'verify')">Verify and repair Mac OS X Disk Permissions</button>
		</div>
	</div>
	
	<div id = "Faster" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MAC.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Moderate</strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 10 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 5 - 10 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> 10 best ways to fix a slow Mac OS and make it fast, even faster </h3></strong></p>
							 <div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS1.jpg" width="400" height="300" align="left">
							 <h1> Step 1 : RAM </h1><p> Check the memory size of your Random-Access-memory. If not suitable then kindly upgrade it to experience fast execution of applications and programs.<br/>
							 Upgrading the RAM to a higher memory size will make a huge difference in experiencing a faster Mac. This will even make your old Mac perform much better.</p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS2.jpg" width="400" height="300" align="left">
							 <h1> Step 2 : Login Items  </h1><p> Login items are irritating if irrelevant to your purpose.<br/>
							 Also, they consume some space on Mac OS X hard disk drive during start up and often causes system to freeze for a while. Isn't wise to switch them the login items at start-up.<br/>
							 To do so make visit to System Preferences > Accounts > Login Items, and unchecked irrelevant login items that you may not want to see at the start-up of your Mac. </p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS3.jpg" width="400" height="300" align="left">
							 <h1> Step 3 : Clean Desktop </h1><p> A cleaner desktop also contributes to make your Mac faster. Make your desktop look tidy not untidy.<br/>
							 Properly choose the files which you want to save on the desktop. Don't make it look like a mess.</p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS4.jpg" width="400" height="300" align="left">
							 <h1> Step 4 : Trash-Bin Folder</h1><p> You must often have heard your mother stressing upon you to dump of the room garbage.<br/>
							 Apply the same with Mac trash bin, make your habit to visit the trash bin folder and after considering the files and folders don't forget to empty the trash.<br/>
							 Doing so surely creates some free space for Mac OS hard disk drive. </p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS5.jpg" width="400" height="300" align="left">
							 <h1> Step 5 : Trim your Applications </h1><p> There might be plenty of applications and software that interests you but on the other hand there may few or more applications which are completely unwanted.<br/>
							 So, why not uninstall the unwanted applications from your Mac and let contribute some more free space.<br/>
							 Same goes with the widgets, uninstall any unwanted widget that might be consuming some space of the Mac disk drive.</p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS6.jpg" width="400" height="300" align="left">
							 <h1> Step 6 : Language Packs </h1><p>At the time of installation if a software, many languages other than your default language gets installed on the main hard disk drive.<br/>
							 These languages are of no use and thus occupy unnecessary space on Mac HDD. But removing the unwanted languages might take a lot of your time and effort if you go manually.<br/>
							 Instead use a third party clean up Mac tool to accomplish this task.<br/>
							 Tools like these, would clear all the unnecessary language packs from the system leaving your default language intact.  </p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS7.jpg" width="400" height="300" align="left">
							 <h1> Step 7 : Switch off applications which are not used </h1><p>Several apps on Mac are not being used by all the users.<br/>
							 For instance, Universal Access, Blue-tooth, Speech Recognition are some of those apps that might not be a part of user's daily activity. So why not switch them off.</p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS8.jpg" width="400" height="300" align="left">
							 <h1> Step 8 : Files and folders management </h1><p>De-Clutter the Mac HDD by launching an effective files and folders management.<br/>
							 Mac's behaviour to read the size of the folder before it begins any execution, so try to keep less number of files under a single folder.<br/>
							 Organize the files and folders to create good amount of free space for the boot drive. </p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS9.jpg" width="400" height="300" align="left">
							 <h1> Step 9 : Temporary files </h1><p>Each day an application or a software is used, large number of temporary files gets created and are stored upon the hard disk drive.<br/>
							 To clear files like user, and font caches use atsutil command line program </p>
							</div>
							<div id="box0" align="center" style="height:300px">
							 <img src="imag/MACOS10.jpg" width="400" height="300" align="left">
							 <h1> Step 10 : Defrag HDD </h1><p>With the help of a third party defrag utility you can can reduce or even eliminate the fragmentations present on your Mac HDD.<br/>
							 The fragmented hard disk drive causes the OS to read and write the hard disk in a slower fashion.<br/>
							 When the disk is defragged, the different parts of files into a single chunk of sequential memory locations.<br/>
							 * The above activity though simple needs to be monitored with proper timing and effort. Mac users often look for a clean up Mac OSX utility that can do the job for them.</p>
							</div>
	</div>
	
	<div id = "FirstAid" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MACOS12.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Easy</strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 4 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 15 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> First Aid is a great tool for helping fix various issues relating to replacing parts on a Mac. </h3></strong></p>
							 <div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS11.jpg" width="500" height="400" align="center">
							 <img src="imag/MACOS12.jpg" width="500" height="400" align="center">
							 <h1> Step 1</h1><p>Open Disk Utilities, which can be found in the Applications folder under Utilities<br/>
							 <strong>Pro Tip:</strong> Take the shortcut and use Spotlight. (This method is used in this guide)</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS13.jpg" width="500" height="400" align="center">							 
							 <h1> Step 2</h1><p>Once opened, a window will appear like in the picture.<br/>
							 Select the name of your Mac OS X Startup disk in the left column.</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS14.jpg" width="500" height="400" align="center">
                             <img src="imag/MACOS15.jpg" width="500" height="400" align="center">							 
							 <h1> Step 3</h1><p>Click on the First Aid button at the top of the window.<br/>
							 A dialogue box will appear asking if you would like to run First Aid.<br/>
							 Click "Run".</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS16.jpg" width="500" height="400" align="center">
                             <img src="imag/MACOS17.jpg" width="500" height="400" align="center">							 
							 <h1> Step 4</h1><p>This procedure will take a few minutes to complete. The machine may freeze up, or lock up during this procedure.<br/>
							 Once completed, click done.<br/>
							 <strong>Pro Tip:</strong> To see any errors that First Aid found, click on the arrow next to 'Show Details'.</p>
							</div>
	</div>
	
	<div id = "verify" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MACOS19.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Very easy</strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 4 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 10 - 15 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> If your mac is having trouble recognizing a replacement battery or other components, you may need to repair your main disk permissions. Follow this guide as a first step in troubleshooting. </h3></strong></p>
							 <div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS18.jpg" width="500" height="400" align="center">
							 <img src="imag/MACOS19.jpg" width="500" height="400" align="center">
							 <h1> Step 1</h1><p>You will want to first open Disk Utilities, which can be found in the Applications folder under Utilities.<br/>
							 Or you can take the shortcut and use Spotlight!</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS20.jpg" width="500" height="400" align="center">
                             <img src="imag/MACOS21.jpg" width="500" height="400" align="center">							 
							 <h1> Step 2</h1><p>Once opened, you should be presented with a window that looks like this.<br/>
							 You will want to select the name of your Mac OS X Startup disk in the left column.<br/>
							 After clicking on the name of your Hard drive, you will be presented with a few different options at the top.<br/>
							 The First Aid heading is what you will want to be under.<br/>
							 Click on the Verify Disk Permissions, starting the process.</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS22.jpg" width="500" height="400" align="center">
                             <img src="imag/MACOS23.jpg" width="500" height="400" align="center">							 
							 <h1> Step 3</h1><p>This usually will take anywhere from 3 minutes to 15 minutes. The best thing to do is to wait.<br/>
							 As time progresses, you will see information pop up in the window highlighted.<br/>
							 This is good, it means that it is seeing the problems that may be keeping your computer from running well.</p>
							</div>
							<div id="box0" align="center" style="height:560px">
							 <img src="imag/MACOS24.jpg" width="500" height="400" align="center">
                             <img src="imag/MACOS25.jpg" width="500" height="400" align="center">							 
							 <h1> Step 4</h1><p>After verifying the disk permissions, go ahead and select repair disk permissions to start that process.<br/>
							 During that time, which again should take anywhere from 3-10 minutes, feel free to get up, walk around for a few minutes, or go pet a cat.</p>
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
       <span  class="popuptext2" id="myPopuppas"> Password not compatible</span>
	   </div>
      <button type="submit" >Join us</button>    
    </div>
    
  </form>
		
</div>

	
	</body>
</html>
