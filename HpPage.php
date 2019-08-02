


<!DOCTYPE html>
<html>
<head>
	<title>
		HpPage
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
			   <img class="main-laptop" src="imag/hp.jpg" alt="Hp">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">HP Laptops Repair</h1>
                 <h3 style="transform:translate(50px,-80px); color:white;">Repair guides for many brands of Hp Laptops . </h3>	         
			    </div>
            
			</div>
	 
	<div class="tab0" align = "center">
		<button class="tablinks" onclick="openPc(event, 'HpZBook')"> <img src="imag/HpZBook.jpg" alt="Hp ZBook" style="width:300px;height:200px;">
		<br/>Hp ZBook</button>
		<button class="tablinks" onclick="openPc(event, 'HpTouchSmart')"><img src="imag/HpTouchSmart.jpg" alt="Hp TouchSmart" style="width:300px;height:200px;">
		<br/>Hp TouchSmart</button>
		<button class="tablinks" onclick="openPc(event, 'HpSplit')"><img src="imag/HpSplit.jpg" alt="Hp Split 2x" style="width:300px;height:200px;">
		<br/>Hp Split 2x</button>
	</div>

	<!-- Tab content -->
	
	<!-- HP ZBook Hardware issues-->
	
	<div id="HpZBook" class="tabcontent">
		<h3>HP ZBook Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Batteryhp1')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'KeyBoardhp1')">Keyboard</button>
			<button class="tablinks" onclick="openPcCat(event, 'Screenhp1')">Screen</button>
			<button class="tablinks" onclick="openPcCat(event, 'Fanhp1')">Fan & Heatsink</button>
			<button class="tablinks" onclick="openPcCat(event, '4Ghp1')">4G Network Module</button>
			<button class="tablinks" onclick="openPcCat(event, 'WiFihp1')">Wi-Fi Card</button>
		</div>
		
	</div>
	
	<div id = "Batteryhp1" class = "tabcontent tabcontent1">
	
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 1 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> This replacement guide will demonstrate how to take the battery out of the laptop. The battery must be removed before any other work can be done to the laptop. This guide is useful if the battery doesn't last long or the computer won't charge and a new battery is necessary. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
	</div>
	
	<div id = "KeyBoardhp1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBookKeyboard1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 5 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 10 - 20 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> If the keys on your keyboard are sticky or broken, follow this replacement guide!. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover </h1><p>TSlide the right lever firmly to the right.<br/>
							 Slide the cover towards yourself to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard3.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Keyboard </h1><p><font color="red">Remove the two 16mm screws with a Phillips #0 screwdriver.</font><br/>
							 - There are two sets of threads to get past. Once unscrewed from the first thread, lift the screw up until it hits the next set and begin unscrewing again.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard5.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBookKeyboard4.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Flip the laptop over so the keyboard is visible, then Insert the spudger under the left side of the keyboard.<br/>
							 Carefully raise the side of the keyboard and firmly pull the left corner of the keyboard until it pops up.<br/>
							 Run your fingers under the edges of the keyboard along the top edge of the keyboard, from the top left to the top right, to separate it from the remaining clips.<br/>
							 Carefully slide the keyboard up toward the screen and out of the case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard6.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookKeyboard7.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookKeyboard8.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p><font color="red">Gently lift the two tabs on either side of the black ribbon with a spudger until the ribbon comes loose.</font><br/>
							 Disconnect the black ribbon by pulling the blue tab hanging off of it.<br/>
							 <font color="orange">Repeat with the white ribbon.</font></p>
							</div>	
	</div>
	
	<div id = "Screenhp1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBookScreen1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Is the screen on your laptop malfunctioning? Here are some possible problems with your screen. If you determine that the screen needs to be replaced, follow this replacement guide! </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookScreen1.jpg" width="240" height="200" align="right">
							 <h1> Step 2 : Screen </h1><p>Orient the laptop keyboard-side up.<br/>
							 Use tweezers to remove the adhesive covers for the screws.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookScreen2.jpg" width="240" height="200" align="left">
							 <h1> Step 3  </h1><p>Remove the two 6mm screws with a Phillips #0 screwdriver.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookScreen4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBookScreen3.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Pull the bezel away from the screen. <br/>
							 Be sure to go one edge at a time! Do not pull hard on the corners as it may crack the bezel.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookScreen5.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p><font color="red">Remove the four 3mm screws with a Phillips #0 screwdriver near the corners of the screen to remove the display.</font><br/>
							 Be careful not to confuse any screws. They are close together and you may remove the back cover instead of the display.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookScreen6.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBookScreen7.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Do not peel the tape from the side closest to the bottom of the screen panel! This may rip out the connector's wires.<br/>
							 Gently lower the screen and lay it face down on the keyboard. <br/>
							 Lift the corners of the tape closest to the top of the screen and peel toward the center carefully. <br/>
							 Slowly pull the tape away from the sides. <br/>
							 Lift the tape and disconnect the screen connector.</p>
							</div>
	</div>
	
	<div id = "Fanhp1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBookFan1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Difficult </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 20 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 40 - 50 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Does your computer feel warmer than usual? you need to replace the fan or heatsink assembly, follow this guide! </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover </h1><p>TSlide the right lever firmly to the right.<br/>
							 Slide the cover towards yourself to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard3.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Keyboard </h1><p><font color="red">Remove the two 16mm screws with a Phillips #0 screwdriver.</font><br/>
							 There are two sets of threads to get past. Once unscrewed from the first thread, lift the screw up until it hits the next set and begin unscrewing again.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard5.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBookKeyboard4.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Flip the laptop over so the keyboard is visible, then Insert the spudger under the left side of the keyboard.<br/>
							 Carefully raise the side of the keyboard and firmly pull the left corner of the keyboard until it pops up.<br/>
							 Run your fingers under the edges of the keyboard along the top edge of the keyboard, from the top left to the top right, to separate it from the remaining clips.<br/>
							 Carefully slide the keyboard up toward the screen and out of the case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard6.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookKeyboard7.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookKeyboard8.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p><font color="red">Gently lift the two tabs on either side of the black ribbon with a spudger until the ribbon comes loose.</font><br/>
							 Disconnect the black ribbon by pulling the blue tab hanging off of it.<br/>
							 <font color="orange">Repeat with the white ribbon.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookFan2.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Optical Drive  </h1><p>Unscrew the captive screw shown near the battery compartment with a Phillips #0 screwdriver.<br/>
							 BeThe screw does not come out all the way and stays attached to the computer.</p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan4.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookFan3.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p><font color="red">Push outward on the metal optical drive tab with a metal spudger to unlock the drive from its position in the case.</font><br/>
							 <font color="orange">Once the drive is protruding from the side of the computer, pull it the rest of the way out.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan5.jpg" width="240" height="200" align="right">
							 <h1> Step 8 : HP ZBook Hard Drive Disassembly  </h1><p><font color="red">Unscrew the three captive screws holding the drive in place with a Phillips #0 screwdriver.</font><br/>
							 The screws will remain inside the springs of the hard drive caddy cover.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan7.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookFan6.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Pull the green tab away from the metal casing and lift the drive out.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan8.jpg" width="240" height="200" align="right">
							 <h1> Step 10 : Fan and Heatsink </h1><p>Unscrew two 3mm screws from the hard drive bay with a Phillips #0 screwdriver..</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan9.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Remove the eight 6mm screws with a T8 Torx screwdriver.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan10.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p>Rotate the laptop so the battery compartment is in front of you.<br/>
							 <font color="red">Remove the four 4 mm screws under the battery with a T8 Torx screwdriver.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan11.jpg" width="240" height="200" align="left">
							 <h1> Step 13 </h1><p><font color="red">Remove three more 4mm screws from the optical drive compartment with a T8 Torx screwdriver.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan12.jpg" width="240" height="200" align="right">
							 <h1> Step 14 </h1><p>Flip the laptop so it is keyboard side up.<br/>
							 Remove the 6mm screw with a T8 Torx screwdriver.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan13.jpg" width="240" height="200" align="left">
							 <h1> Step 15 </h1><p><font color="red">Use a spudger to lift the edges of the connector up so the white ribbon can slide out.</font><br/>
							 Pull the ribbons out by the blue plastic tab on the cable at each connector site.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan14.jpg" width="240" height="200" align="right">
							 <h1> Step 16 </h1><p>There are still ribbons that need to be removed before the top cover separates completely; do not yank the cover off after it is separated to prevent ripping the cables out.<br/>
							 Start at the front of the latop and run a plastic spudger between the top cover and the case to undo the clips holding it together<br/>
							 If there is difficulty separating the top cover from the computer, do not force it. You might have missed a screw.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan15.jpg" width="240" height="200" align="left">
							 <h1> Step 17 </h1><p>Angle the top cover so you can see the white ribbons shown in the picture. <br/>
							 Carefully slide the top cover toward you to expose the white ribbon connectors.<br/>
							 <font color="red">Use a spudger to lift the connectors and slide out both ribbons.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan16.jpg" width="240" height="200" align="right">
							 <h1> Step 18 </h1><p><font color="red">Unscrew the eight captive screws with a T9 Torx screwdriver.</font><br/>
							 Undo the screws in the order represented by the small numbers next to the screw on the heat sink assembly. Repeat this while reassembling to prevent damage to the components underneath.<br/>
							 These screws will also not unscrew all the way.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan17.jpg" width="240" height="200" align="left">
							 <h1> Step 19 </h1><p><font color="red">Gently pull up on the 4 pin fan power connector cable to unplug it from the system.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookFan1.jpg" width="240" height="200" align="right">
							 <h1> Step 20 </h1><p>Gently lift the fan and heatsink assembly straight up and out so you do not smear the thermal paste.<br/>
							 Thermal paste is a heat conductive gel applied to the underside of the heatsinks. Be careful not to wipe any off or else the components within the laptop will not cool properly and could become damaged. It also makes a big sticky mess if it smears or gets on any other components.</p>
							</div>
	</div>
	
	<div id = "4Ghp1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBook4G1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 4 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> The ZBook comes with a 4G wireless network module that allows you to connect to the internet via a SIM card provided by a wireless network company.<br/>
							   If you need to replace the 4G network module on your laptop, follow this guide! </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover </h1><p>TSlide the right lever firmly to the right.<br/>
							 Slide the cover towards yourself to remove it.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBook4G1.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : 4G Network Module   </h1><p><font color="red">Remove the two connectors by lifting gently with a metal spudger.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBook4G3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBook4G2.jpg" width="240" height="200" align="right">
							 <h1> Step 4</h1><p><font color="red">Remove the 3mm screw with a Phillips #0 screwdriver.</font><br/>
							 Remove the 4G Module by lifting up and out.</p>
							</div>
	</div>
	
	<div id = "WiFihp1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpZBookWiFi1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 4 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Are you having problems with your wi-fi? If you determine that your wi-fi card needs to be replaced, follow this replacement guide!</h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookBattary2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpZBookBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Flip the laptop over.<br/>
                             Slide the lever with the battery symbol beside it firmly until the battery pops out.<br/>
							 Remove the battery from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookKeyboard2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 : Back Cover </h1><p>TSlide the right lever firmly to the right.<br/>
							 Slide the cover towards yourself to remove it.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookWiFi1.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Wi-Fi Card </h1><p><font color="red">Lift up the two tabs connected to wires.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpZBookWiFi3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpZBookWiFi2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p><font color="red">Remove the two 3mm screws from the corners of the card with a Phillips #0 screwdriver.</font><br/>
							 Lift the card up and slide it out to disconnect it.</p>
							</div>
	</div>
	
	<!-- HP TouchSmart Hardware issues-->
	
	<div id="HpTouchSmart" class="tabcontent">
		<h3>HP TouchSmart Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Batteryhp2')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'KeyBoardhp2')">KeyBoard</button>
			<button class="tablinks" onclick="openPcCat(event, 'Screenhp2')">Screen</button>
			<button class="tablinks" onclick="openPcCat(event, 'DVDhp2')">DVD RW Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Motherboard')">Mother Board</button>
		</div>
	</div>
	
	<div id = "Batteryhp2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpTouchSmartBattary4.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Very Easy </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 3 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 1 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> The HP TouchSmart has a 3-cell lithium-ion polymer battery that fits nicely on the bottom of the laptop. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Turn off your laptop.<br/>
							 Ensure your laptop is off. Removing the battery while it is on may harm your laptop.
							 Flip upside down in order to access the battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartBattary2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">There are two battery release switches located under the battery.</font><br/>
							 Slide both switches inward to release the battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Remove the battery.<br/>
							 The release switches may need to be pushed inward while removing the battery.</p>
							</div>
							
	</div>
	
	<div id = "KeyBoardhp2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpTouchSmartKeyboadr1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Easy </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 4 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 10 - 15 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> The HP TouchSmart has a Cruus NSK-CN6SC keyboard. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 </h1><p>Turn off your laptop. <br/>
							 Ensure your laptop is off. Removing the keyboard while it is on may harm your laptop. <br/>
							 Flip upside down in order to release the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr2.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartKeyboadr3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">Remove the two Phillips screws securing the keyboard.</font><br/>
							 One of the screws lies on/under the label.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr4.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartKeyboadr1.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartKeyboadr5.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Flip the laptop back over and pull the screen up.<br/>
							 <font color="red">There are 16 (sixteen) latches holding the keyboard in place.</font><br/>
							 Gently pry the keyboard up using your plastic opening tool.<br/>
							 Don't pull the keyboard up more than 2-3 inches as there is a film-material connecting the keyboard to the laptop.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr6.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartKeyboadr7.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>There is a film-material connecting the laptop to the keyboard.<br/>
							 <font color="red">There is a small black latch holding the film-material in place.</font><br/>
							 Flip the black latch up to release the film-material.<br/>
							 Once flipped up, simply pull the film-material out from the laptop to release the keyboard.</p>
							</div>
	</div>
	
	<div id = "Screenhp2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpTouchSmartScreen1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Moderate </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 12 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 45 minutes - 1 hour </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3>Use this guide to lead in the replacement of your HP TouchSmart screen.</h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen3.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Screen </h1><p>Acquire the metal spudger and a Precision Magnetized Driver with J1 size bit.<br/>
							 Flip your HP TouchSmart 15 over.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartBattary4.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Locate tabs on the underside of the laptop.<br/>
							 Push both tabs towards the center of the laptop and pull away to remove battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen4.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen5.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Take the sharp end of the pry tool and pop out the black screw cover.<br/>
							 Repeat on opposite side.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen6.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartScreen7.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Take the Precision Magnetized Driver with J1 size bit and unscrew the screw.<br/>
							 Repeat on opposite side.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen8.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen9.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Using the pry tool, begin to separate the touchscreen from the plastic backing.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen10.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartScreen11.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Close the laptop and flip it over once again.<br/>
							 Continue to pry the touchscreen from the plastic backing in the hinged area of the laptop.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen12.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen13.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p>Flip over the laptop and open it.<br/>
							 Pull up on the separated touchscreen while pulling it away from the plastic backing.<br/>
							 Be careful while laying down the touchscreen to not pull the connection point.<br/>
							 Lay the touchscreen on the keyboard facedown.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen14.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartScreen15.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Locate the connection point.<br/>
							 Slowly and carefully peel off.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen16.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen17.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Isolate the touchscreen from the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen18.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartScreen19.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartScreen20.jpg" width="240" height="200" align="right">							 
							 <h1> Step 10 </h1><p>Begin by peeling off the black adhesive tape using the pry tool.<br/>
							 Once adhesive tape is removed, use the pry tool to remove the tab in the corner. Repeat in each corner.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen21.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartScreen22.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Using the sharp end of the pry tool, separate the plastic from the screen.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartScreen23.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p>Now it is time to reassemble your device with a new screen.</p>
							</div>
	</div>
	
	<div id = "DVDhp2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpTouchSmartHardDrive1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Easy </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 3 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 1 - 2 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3>The HP TouchSmart has one DVD RW Drive on the right side of the laptop.</h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 </h1><p>Turn off your laptop.<br/>
							 Ensure your laptop is off. Removing the DVD RW Drive while it is on may harm your laptop.<br/>
							 Flip upside down in order to access the DVD RW Drive.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartHardDrive2.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartHardDrive3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">There is 1 (one) screw holding the DVD RW Drive in place.</font><br/>
							 Use your screwdriver to remove the screw.<br/>
							 Be careful not to lose the screw.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartHardDrive4.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartHardDrive1.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Remove the DVD RW Drive by gently pulling it straight out.</p>
							</div>
	</div>
	
	<div id = "Motherboard" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpTouchSmartMother1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Difficult </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 14 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 45 minutes - 1 hour </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3>The HP TouchSmart has a standard laptop motherboard.</h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p>Turn off your laptop.<br/>
							 Ensure your laptop is off. Removing the battery while it is on may harm your laptop.
							 Flip upside down in order to access the battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartBattary2.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">There are two battery release switches located under the battery.</font><br/>
							 Slide both switches inward to release the battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Remove the battery.<br/>
							 The release switches may need to be pushed inward while removing the battery.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : DVD RW Drive  </h1><p>Turn off your laptop.<br/>
							 Ensure your laptop is off. Removing the DVD RW Drive while it is on may harm your laptop.<br/>
							 Flip upside down in order to access the DVD RW Drive.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartHardDrive2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartHardDrive3.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p><font color="red">There is 1 (one) screw holding the DVD RW Drive in place.</font><br/>
							 Use your screwdriver to remove the screw.<br/>
							 Be careful not to lose the screw.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartHardDrive4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartHardDrive1.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Remove the DVDRW Drive by gently pulling it straight out.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartBattary1.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : KeyBoard </h1><p>Turn off your laptop. <br/>
							 Ensure your laptop is off. Removing the keyboard while it is on may harm your laptop. <br/>
							 Flip upside down in order to release the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr2.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartKeyboadr3.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p><font color="red">Remove the two Phillips screws securing the keyboard.</font><br/>
							 One of the screws lies on/under the label.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr4.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartKeyboadr1.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartKeyboadr5.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p> - Flip the laptop back over and pull the screen up.<br/>
							 <font color="red">There are 16 (sixteen) latches holding the keyboard in place.</font><br/>
							 Gently pry the keyboard up using your plastic opening tool.<br/>
							 Don't pull the keyboard up more than 2-3 inches as there is a film-material connecting the keyboard to the laptop.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartKeyboadr6.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartKeyboadr7.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>There is a film-material connecting the laptop to the keyboard.<br/>
							 <font color="red">There is a small black latch holding the film-material in place.</font><br/>
							 Flip the black latch up to release the film-material.<br/>
							 Once flipped up, simply pull the film-material out from the laptop to release the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartMother1.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartMother2.jpg" width="240" height="200" align="left">
							 <h1> Step 11 : Hard Drive </h1><p>Close and flip your laptop over to access the screws.<br/>
							 <font color="red">Unscrew all the screws.</font><br/>
							 <font color="orange">There are 2 screws underneath the covers that need to be unscrewed.</font><br/>
							 Our DVD RW Drive is still inside, but yours should already be removed.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartMother3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartMother4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartMother5.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p>Flip your laptop over and open it.<br/>
							 <font color="red">There are 4 screws needing to be unscrewed.</font><br/>
							 <font color="orange">There are 2 wires that need to be unplugged before removing the base of the laptop.</font><br/>
							 <font color="yellow">There are 2 more screws where the DVD RW Drive was.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartMother6.jpg" width="240" height="200" align="left">
							 <img src="imag/HpTouchSmartMother7.jpg" width="240" height="200" align="left">
							 <h1> Step 13 </h1><p>Use your plastic opening tool to pry the base of the laptop off.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpTouchSmartMother8.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartMother9.jpg" width="240" height="200" align="right">
							 <img src="imag/HpTouchSmartMother10.jpg" width="240" height="200" align="right">
							 <h1> Step 14 </h1><p>There are 2 screws holding the hard drive in place.<br/>
							 Use your screwdriver to unscrew the screws.<br/>
							 Remove the hard drive by pulling it to the right like shown.</p>
							</div>
	</div>

	<!-- HP Split Hardware issues-->
	
	<div id="HpSplit" class="tabcontent">
		<h3>HP Split Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Batteryhp3')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'Screenhp3')">Screen</button>
			<button class="tablinks" onclick="openPcCat(event, 'RearCoverhp')">Rear Cover</button>
			<button class="tablinks" onclick="openPcCat(event, 'Trackpadhp')">Trackpad</button>
		</div>
	</div>
	
	<div id = "Batteryhp3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpSplitBattary1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Moderate </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 10 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 30 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> This is a step by step guide on replacing an old or damaged battery of an HP Splitwith a new battery unit. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Rear Cover </h1><p>Opening the device voids the manufacturer warranty.<br/>
							 Power down the HP Split x2 before beginning the repair.<br/>
							 Separate the tablet from the keyboard by pushing the slider to the left and lifting the tablet from the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">Remove the four white caps on the bottom edge of the tablet.</font><br/>
							 Use a tweezer to grasp white caps.<br/>
							 The white caps are easily lost. Store them in a secure place.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p><font color="red">Use a Phillips #000 screwdriver to remove the four 3mm screws.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary7.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary8.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Use a plastic opening tool to pry the tabs on the top, left and right sides of the tablet.<br/>
							 Only the top and sides have tabs. Remove all tabs before lifting screen.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary9.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitBattary10.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Separate the cover and the screen.<br/>
							 Gently lift the screen out of the cover.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary1.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Battary </h1><p><font color="red">Remove black stickers.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary11.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitBattary12.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p><font color="red">Pull on the blue ribbon to disconnect the cable. </font><br/>
							 Disconnect both ends of the cable.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary13.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary14.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary15.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Flip up the retaining flap with either a spudger or your fingertips.<br/>
							 <font color="red">Disconnect the ribbon cable by gently pulling on it.</font><br/>
							 <font color="orange">Disconnect the sliding connector with the pointed tip of the spudger and gently remove the cable.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary16.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitBattary17.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Remove all eight 3mm Phillips screws using a J1 screw head.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary18.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Gently lift up the battery as a whole<br/>
							 Make sure the battery is free to move on both ends.<br/>
							 Battery has two cells connected by a bridge making it a unit.</p>
							</div>
	</div>
	
	<div id = "Screenhp3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpSplitScreen1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Moderate </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 11 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 30 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Did you accidentally drop your device and shatter the screen? This guide will instruct you how to replace your broken screen. The first five steps tell you how to remove the rear cover of the case. The remaining six steps explain how to replace the screen. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Rear Cover </h1><p>Opening the device voids the manufacturer warranty.<br/>
							 Power down the HP Split x2 before beginning the repair.<br/>
							 Separate the tablet from the keyboard by pushing the slider to the left and lifting the tablet from the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">Remove the four white caps on the bottom edge of the tablet.</font><br/>
							 Use a tweezer to grasp white caps.<br/>
							 The white caps are easily lost. Store them in a secure place.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p><font color="red">Use a Phillips #000 screwdriver to remove the four 3mm screws.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary7.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary8.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Use a plastic opening tool to pry the tabs on the top, left and right sides of the tablet.<br/>
							 Only the top and sides have tabs. Remove all tabs before lifting screen.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary9.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitBattary10.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Separate the cover and the screen.<br/>
							 Gently lift the screen out of the cover.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen1.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitScreen2.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Screen </h1><p><font color="red">Use a J0 screwdriver to remove the ten 4mm Phillips screws.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen3.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitScreen4.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p>Peel back the large black tape.<br/>
							 <font color="red">Remove the 4mm Phillips screw.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen5.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitScreen6.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p><font color="red">Remove three 2 mm zero insertion force (ZIF) connectors. Lift the black tab in front and then remove the ribbon from the rear.</font><br/>
							 <font color="orange">Remove two larger zero insertion force (ZIF) connectors. Lift the black tab in front and then remove the ribbon from the rear.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen7.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitScreen8.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitScreen9.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p><font color="red">The last attachment to the screen is the bronze colored display cable connector.</font><br/>
							 <font color="orange">Use a pair of tweezers to lift the metal bar and swing it to the other side on top of the cable.</font><br/>
							 <font color="yellow">Pull in the direction of the cable to remove the connector.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen10.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Glue is holding the device together along the edges. The glue is can be very strong. A heat gun may be required to loosen the glue for removal of the digitizer to prevent damage to the screen.<br/>
							 Apply pressure to to the sides of the tablet.<br/>
							 Separate the digitizer from the the body of the tablet.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitScreen11.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Glue is holding the screen on at the four corners.<br/>
							 Lift the screen up, breaking any adhesion forced by the glue.<br/>
							 Replace the old screen with a new one.</p>
							</div>
	</div>
	
	<div id = "RearCoverhp" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpSplitBattary2.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Moderate </strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 5 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 10 minutes </strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Do you need access to the inner components of your device? This guide instructs you how to remove the rear cover of the case. After removing the cover, the interior components such as the display, RAM and wireless card can be accessed. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Rear Cover </h1><p>Opening the device voids the manufacturer warranty.<br/>
							 Power down the HP Split x2 before beginning the repair.<br/>
							 Separate the tablet from the keyboard by pushing the slider to the left and lifting the tablet from the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary3.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary4.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">Remove the four white caps on the bottom edge of the tablet.</font><br/>
							 Use a tweezer to grasp white caps.<br/>
							 The white caps are easily lost. Store them in a secure place.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p><font color="red">Use a Phillips #000 screwdriver to remove the four 3mm screws.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary7.jpg" width="240" height="200" align="right">
							 <img src="imag/HpSplitBattary8.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Use a plastic opening tool to pry the tabs on the top, left and right sides of the tablet.<br/>
							 Only the top and sides have tabs. Remove all tabs before lifting screen.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitBattary9.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitBattary10.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Separate the cover and the screen.<br/>
							 Gently lift the screen out of the cover.</p>
							</div>
	</div>
	
	<div id = "Trackpadhp" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/HpSplitTrackpad1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : Easy</strong>  </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : 6 </strong>  </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : 20 - 30 minutes</strong>  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> In this guide, we walk you through the step by step trackpad replacement. </h3></strong></p>
							 <div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad2.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitTrackpad3.jpg" width="240" height="200" align="left">
							 <img src="imag/HpSplitTrackpad4.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Trackpad </h1><p><font color="red">Remove the bumpers at the back of the keyboard part.</font><br/>
							 Use a J1 screwdriver head to remove the 7mm screws underneath the bumpers.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad5.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p><font color="red">Use a J1 screwdriver head to remove the remaining 5mm screws at the back of the keyboard part.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad6.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>Use the opening tool to carefully remove the back cover of the keyboard.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad7.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p><font color="red">Use a J1 screwdriver head to remove the black 2mm screws along the top part of the trackpad</font><br/>
							 - - Orange : Using the same screwdriver head, remove the black 3mm screws along the bottom part of the trackpad</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad8.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p><font color="red">Disconnect the ribbon cable and move it out of the way.</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/HpSplitTrackpad1.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p> Slide the trackpad out from underneath the ribbon cables.</p>
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
			

	<!------ Scripts ------->
		<script src="javas1/javaS.js"></script>
</body>
</html>
