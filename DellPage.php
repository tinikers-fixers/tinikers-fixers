


<!DOCTYPE html>
<html>
<head>
	<title>
		DellPage
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
				<a id="index" href="Tinkers$FixersHP.php"></i>Home</a>
				<a id="index" href="laptop-repair.php"><i class="fa fa-wrench"></i>PC Laptop Repair</a>
			    <a id="index" href="questions_forum.php"><i class="fa fa-question-circle"></i>Questions Forum</a>
			    <a id="index" href="Tinkers$FixersHP.php #about"><i class="fa fa-user"></i>About us</a>
			    <a id="index" href="Tinkers$FixersHP.php #contact2"><i class="fa fa-envelope"></i>Contact us</a>
			</div>	
		
			<div class="clr"></div>
					
		
			<div id="content7">
			<div id="image">
			   <img class="main-laptop" src="imag/dell.jpg" alt="Dell">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">DELL Laptops Repair</h1>
                 <h3 style="transform:translate(50px,-80px); color:white;">Repair guides for many brands of Dell Laptops . </h3>	
			    </div>
            
			</div>
	 
	<div class="tab0" align = "center">
		<button class="tablinks" onclick="openPc(event, 'Dell Studio')"> <img src="imag/lCRoUlPHiSZVaB2M.standard.jpeg" alt="Dell Studio" style="width:200px;height:200px;">
		<br/>Dell Studio</button>
		<button class="tablinks" onclick="openPc(event, 'Dell Vostro')"><img src="imag/IK3AkAPTDXFMnUtA.standard.jpeg" alt="Dell Vostro" style="width:200px;height:200px;">
		<br/>Dell Vostro</button>
		<button class="tablinks" onclick="openPc(event, 'Dell Inspiron')"><img src="imag/GavvW3DcOMRD23Uw.standard.jpeg" alt="Dell Inspiron" style="width:200px;height:200px;">
		<br/>Dell Inspiron</button>
	</div>

	<!-- Tab content --> 
	
	<!-- Dell Studio Hardware issues-->

	
	<div id="Dell Studio" class="tabcontent">
		<h3>Dell Studio Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery1')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive1')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram1')">RAM</button>
		</div>
		
	</div>
	
	<div id = "Battery1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/3WhfGDoprCuRGC3P.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 1 step </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2-10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Replacing the battery on a Dell Studio is an easy task. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/3WhfGDoprCuRGC3P.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/aNXrCiZMGtILoXJZ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Ensure the laptop is turned off and unplugged before attempting to remove any piece.</b></font><br/>
							 - Place the laptop lid down so the underside is visible.<br/>
							 - Pull battery release switch and gently pull the battery directly away from the switch.<br/></p>
							</div>
	</div>
	
	
	<div id = "HardDrive1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/pZ2bb2JA33tvhV4H.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 7 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15-25 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/3WhfGDoprCuRGC3P.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/aNXrCiZMGtILoXJZ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Ensure the laptop is turned off and unplugged before attempting to remove any piece.</b></font><br/>
							 - Place the laptop lid down so the underside is visible.<br/>
							 - Pull battery release switch and gently pull the battery directly away from the switch.<br/></p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/6nGygDCtk3aDalYJ.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover</h1><p> - Identify the back cover of the laptop.</p>
							</div>	
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DPNX2EtHNyWD25JV.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Unscrew and remove all of the 6.0mm screws with a Phillips #1 screwdriver.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							<img src="imag/QhAQ1XYdYuCKe5BT.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Lift the back cover off of the laptop.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/pZ2bb2JA33tvhV4H.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/sOepDURyX3kctDon.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : Hard Drive</h1><p> - Unscrew all of the 6.0 mm screws with a Phillips #1 screwdriver holding the hard drive cage on the computer.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/h2rLMtExpyibhR6o.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/MFXM4Y3onTiRk14V.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Lift the hard drive cage out of the laptop.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/FyAkSZOcZXrbfPej.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/QTEAhqfYIGTjvN22.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/Hg6IKqLMkdFCXQ4F.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 7 :</h1><p> - Pull tab to unplug the drive from the computer<br/>
							 - Pull the hard drive out of the hard drive tray.
							 </p>
							</div>
	</div>
	
	<div id = "Ram1" class = "tabcontent tabcontent1">
		<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/3q5JVcjSuXfU23HI.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide demonstrates how to properyly remove and replace a Dell Studio RAM in order to preserve the function of the device.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/3WhfGDoprCuRGC3P.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/aNXrCiZMGtILoXJZ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Ensure the laptop is turned off and unplugged before attempting to remove any piece.</b></font><br/>
							 - Place the laptop lid down so the underside is visible.<br/>
							 - Pull battery release switch and gently pull the battery directly away from the switch.<br/></p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/6nGygDCtk3aDalYJ.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover</h1><p> - Identify the back cover of the laptop.</p>
							</div>	
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DPNX2EtHNyWD25JV.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Unscrew and remove all of the 6.0mm screws with a Phillips #1 screwdriver.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							<img src="imag/QhAQ1XYdYuCKe5BT.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Lift the back cover off of the laptop.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/3q5JVcjSuXfU23HI.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/2LrWFpePSHCoCOcJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 :RAM</h1><p>- Pull outwards on both of the tabs for one of the RAM slots.<br/>
							 <font style="color:red;"><b>- The RAM stick should pop up at an angle after this.</b></font>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/mDu2UrAE4vE3c53O.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/NJ2DesQvbsVGMVU5.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Pull the RAM stick out of the slot.<br/>
							 - Repeat with the remaining RAM stick.
							 </p>
							</div>	
	</div>
	
	<!-- Dell Vostro Hardware issues-->
		
	<div id="Dell Vostro" class="tabcontent">
		<h3>Dell Vostro Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery2')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive2')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram2')">RAM</button>
		</div>
	</div>
	
	<div id = "Battery2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/v61G3XsxBjbHAEKB.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 3 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 1 minute </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Replacing the battery on a Dell Vostro is an easy task. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UMeyFlOhijgFIcPG.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Be sure the power is off and all cables are unplugged from the device before starting.</font></b><br/>
							 - After flipping over the laptop, the battery is on the bottom side of the laptop.<br/>
							 - Find the tabs on both the left and right side of the battery.<br/></p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/Dh4fcBCh1rDnw2EA.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Push tabs toward the outside of the laptop until they lock in place.
							 </p>
							</div>	
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/4AsEnMSiIp4iak2s.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/cnFLkWrdcFOAmQWf.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Push the battery forward to eject it from the laptop.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "HardDrive2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/EpYnk5HcmhLaGAZV.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 5 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UMeyFlOhijgFIcPG.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Be sure the power is off and all cables are unplugged from the device before starting.</font></b><br/>
							 - After flipping over the laptop, the battery is on the bottom side of the laptop.<br/>
							 - Find the tabs on both the left and right side of the battery.<br/></p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/Dh4fcBCh1rDnw2EA.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Push tabs toward the outside of the laptop until they lock in place.
							 </p>
							</div>	
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/4AsEnMSiIp4iak2s.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/cnFLkWrdcFOAmQWf.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Push the battery forward to eject it from the laptop.<br/>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/oSkNcWCdRgaLIIwQ.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/EpYnk5HcmhLaGAZV.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : Hard Disk Drive</h1><p><font style="color:red;"><b> - Please ensure that your device is turned off and everything is unplugged before working on it.</font></b><br/>
							 - Unscrew both screws on the hard drive panel until the panel is able to be removed.<br/>
							  <font style = "color:red;">- The screws will not come off of the panel.</font><br/>
							 - Once screws have been loosened, remove the panel from the laptop.<br/>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/4tCFKEpwFafZ4DqJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 :</h1><p> - Remove the hard drive by pulling up on the black tab on the right side of the hard drive.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "Ram2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/x5Z6GaVIWc46qnOQ.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 5 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Dell Vostro RAM replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UMeyFlOhijgFIcPG.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Be sure the power is off and all cables are unplugged from the device before starting.</font></b><br/>
							 - After flipping over the laptop, the battery is on the bottom side of the laptop.<br/>
							 - Find the tabs on both the left and right side of the battery.<br/></p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/Dh4fcBCh1rDnw2EA.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Push tabs toward the outside of the laptop until they lock in place.
							 </p>
							</div>	
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/4AsEnMSiIp4iak2s.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/cnFLkWrdcFOAmQWf.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Push the battery forward to eject it from the laptop.<br/>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/t1BRXxyJhEsLCWNt.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/x5Z6GaVIWc46qnOQ.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : Hard Disk Drive</h1><p><font style="color:red;"><b> - Make sure the laptop is turned off and all cables are unplugged.</font></b><br/>
							 - Loosen the three 3 mm screws on the RAM cover.<br/>
							  <font style = "color:red;">- Screws will not completely come out.</font><br/>
							 - Lift the cover and remove it from the laptop.<br/>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/TcaIB2FJWZ2BD2U4.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/Hnc2XwI3DSSfRU4v.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 :</h1><p> - Pull tabs apart on both the top and bottom of the memory card.<br/>
							 - Lift memory card and remove it from the laptop.<br/>
							 - Repeat the process for the second memory card.<br/>
							 </p>
							</div>
	</div>
	
	<!-- Dell Inspiron Hardware issues-->
	
	<div id="Dell Inspiron" class="tabcontent">
		<h3>Dell Inspiron Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery3')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive3')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram3')">RAM</button>
		</div>
	</div>
	
	<div id = "Battery3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/BCACdUWCMnqXUqMb.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 2 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 1 minute </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> This guide will go through the steps needed to remove the laptop's battery. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BCACdUWCMnqXUqMb.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style = "color:red;"> - To prevent injury, make sure the laptop is unplugged before removing the battery.</font><br/>
							 -	Flip the laptop over, bottom-side up.
							 </p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/P1UqhtoewIT1DbbO.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 :</h1><p> - Push the switch next to the battery.<br/>
							 - At the same time, lift the battery away from the laptop.<br/> </p>
							</div>
	</div>
	
	<div id = "HardDrive3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/IlJ5jWxH1J5jAtNL.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 4 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BCACdUWCMnqXUqMb.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style = "color:red;"> - To prevent injury, make sure the laptop is unplugged before removing the battery.</font><br/>
							 -	Flip the laptop over, bottom-side up.
							 </p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/P1UqhtoewIT1DbbO.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 :</h1><p> - Push the switch next to the battery.<br/>
							 - At the same time, lift the battery away from the laptop.<br/> </p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/iBAIYHKhNcgDKcsO.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 : Hard Disk Drive</h1><p> - Remove the two 2.5mm Phillips #00 screws.<br/>
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/JGTLfYchfGL5MJOC.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : </h1><p> - Using your hand, pull hard drive out of the laptop.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "Ram3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/cPGUsAcanYZENocC.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 4 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Dell Inspiron RAM replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BCACdUWCMnqXUqMb.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style = "color:red;"> - To prevent injury, make sure the laptop is unplugged before removing the battery.</font><br/>
							 -	Flip the laptop over, bottom-side up.
							 </p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/P1UqhtoewIT1DbbO.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 :</h1><p> - Push the switch next to the battery.<br/>
							 - At the same time, lift the battery away from the laptop.<br/> </p>
							</div>
							
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/VFcnP2HnkSJYRIqZ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 : RAM</h1><p> - Unscrew two 4 mm Philips #00 screws.<br/>
							 - Remove the RAM door panel.
							 </p>
							</div>
							
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/aoaiUB5MdRGcLZHd.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Pull the tabs located at red circles apart in order to separate the ram from its housing.<br/>
							 </p>
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
