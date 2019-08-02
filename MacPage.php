


<!DOCTYPE html>
<html>
<head>
	<title>
		MacPage
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
			   <img class="main-laptop" src="imag/MAC.jpg" alt="MAC">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">MAC Laptops Repair</h1>
                 <h3 style="transform:translate(29px,-70px); color:white;">Repair guides for many brands of Mac Laptops. </h3>	         
			    </div>
            
			</div>
		
	<div class="tab0" >
		<button class="tablinks" onclick="openPc(event, 'MacBook')"> <img src="imag/MacBook.jpg" alt="Apple MacBook" style="width:300px;height:170px; ">
		<br/>Mac Book</button>
		<button class="tablinks" onclick="openPc(event, 'MacBookAir')"><img src="imag/MacBookAir.jpg" alt="Apple MacBookAir" style="width:300px;height:170px;">
		<br/>Mac Book Air</button>
		<button class="tablinks" onclick="openPc(event, 'MacBookPro')"><img src="imag/MackBookPro.jpg" alt="Apple MackBookPro" style="width:300px;height:170px;">
		<br/>Mac Book Pro</button>
	</div>

	<!-- Tab content -->
	
	<!-- Mac Book Hardware issues-->
	
	<div id="MacBook" class="tabcontent">
		<h3>Mac Book Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery1')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive1')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram1')">RAM</button>
			<button class="tablinks" onclick="openPcCat(event, 'Fan1')">Fan</button>
			<button class="tablinks" onclick="openPcCat(event, 'Midwall1')">Mid Wall</button>
		</div>
		
	</div>
	
	<div id = "Battery1" class = "tabcontent tabcontent1">
	
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookBattary1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 3 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 2 - 5 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Replacing the battery on a MacBook is an easy task. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Access Door </h1><p> With the case closed, place the Unibody top-side down on a flat surface.<br/>
                             Depress the grooved side of the access door release latch enough to grab the free end. Lift the release latch until it is vertical.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> The access door should now be raised enough to lift it up and out of the Unibody. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battery  </h1><p> Be sure the access door release latch is vertical before proceeding.<br/>
							 Grab the white plastic tab and pull the battery up and out of the Unibody.</p>
							</div>
	</div>
	
	<div id = "HardDrive1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookHarddrive1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 7 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15- 30 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> When replacing your hard drive, you must transfer the Torx screws from the old drive to the new one. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Access Door </h1><p> With the case closed, place the Unibody top-side down on a flat surface.<br/>
                             Depress the grooved side of the access door release latch enough to grab the free end. Lift the release latch until it is vertical.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> The access door should now be raised enough to lift it up and out of the Unibody. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battery  </h1><p> Be sure the access door release latch is vertical before proceeding.<br/>
							 Grab the white plastic tab and pull the battery up and out of the Unibody.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookHarddrive2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : Hard Drive </h1><p> Remove the single Phillips screw securing the hard drive bracket to the upper case.<br/>
							 This screw is captive to the hard drive bracket. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookHarddrive3.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> Lift the hard drive by its pull tab enough to grab and remove the retaining bracket.<br/>
							 Lift the hard drive out of the chassis, minding the cable attaching it to the computer. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookHarddrive4.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p> Remove the hard drive from its cable by pulling the cable connector straight away from the drive.<br/>
							 Hard drive remains. </p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookHarddrive1.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : Hard Drive </h1><p> Remove the two T6 Torx screws from each side of the hard drive (four screws total).<br/>
							 You'll need to transfer these screws to your new hard drive if you're changing drives. </p>
							</div>
	</div>
	
	<div id = "Ram1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookRAM1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 7 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Accessing the RAM in this computer is straightforward and requires minimal disassembly. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Access Door </h1><p> With the case closed, place the Unibody top-side down on a flat surface.<br/>
                             Depress the grooved side of the access door release latch enough to grab the free end. Lift the release latch until it is vertical.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> The access door should now be raised enough to lift it up and out of the Unibody. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battery  </h1><p> Be sure the access door release latch is vertical before proceeding.<br/>
							 Grab the white plastic tab and pull the battery up and out of the Unibody.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : Lower Case </h1><p> Remove the following eight screws securing the lower case to the chassis: <br/>
							 <font color="red"> One 3 mm Phillips screw.</font><br/>
							 <font color="orange"> Three 13.5 mm Phillips screws.</font><br/>
							 <font color="yellow"> Four 3.5 mm Phillips screws.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM3.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> Using both hands, lift and remove the lower case off the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM1.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : RAM </h1><p> Remove the hard drive from its cable by pulling the cable connector straight away from the drive.<br/>
							 Hard drive remains. </p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM4.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p> After the RAM chip has popped up, pull it straight out of its socket.<br/>
							 Repeat this process if a second RAM chip is installed. </p>
							</div>
	</div>
	
	<div id = "Fan1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookFan1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 8 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Replacing a defective fan will keep your laptop running cool. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Access Door </h1><p> With the case closed, place the Unibody top-side down on a flat surface.<br/>
                             Depress the grooved side of the access door release latch enough to grab the free end. Lift the release latch until it is vertical.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> The access door should now be raised enough to lift it up and out of the Unibody. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battery  </h1><p> Be sure the access door release latch is vertical before proceeding.<br/>
							 Grab the white plastic tab and pull the battery up and out of the Unibody.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : Lower Case </h1><p> Remove the following eight screws securing the lower case to the chassis: <br/>
							 <font color="red"> One 3 mm Phillips screw.</font><br/>
							 <font color="orange"> Three 13.5 mm Phillips screws.</font><br/>
							 <font color="yellow"> Four 3.5 mm Phillips screws.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM2.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> Using both hands, lift and remove the lower case off the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookFan2.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Fan </h1><p> Use a spudger to pry the fan connector straight up off the logic board.<br/>
							 It is useful to twist the spudger axially from beneath the fan cable wires to release the connector.<br/>
							 Be careful not to break the plastic fan socket off the logic board as you use your spudger to lift the fan connector.</p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookFan3.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p> Remove the following three screws securing the fan to the upper case: <br/>
							 <font color="red"> Two 5 mm Phillips screws.</font><br/>
							 <font color="orange"> One 7 mm Phillips screw.</font><br/>
							 - The longer of the three screws belongs in the upper left corner of the fan.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookFan1.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p> Lift the fan out of the upper case.</p>
							</div>
	</div>
	
	<div id = "Midwall1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookMidwall1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 7 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 20 - 30 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> This guide will show you how to replace the Mid Wall on from your laptop. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Access Door </h1><p> With the case closed, place the Unibody top-side down on a flat surface.<br/>
                             Depress the grooved side of the access door release latch enough to grab the free end. Lift the release latch until it is vertical.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> The access door should now be raised enough to lift it up and out of the Unibody. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battery  </h1><p> Be sure the access door release latch is vertical before proceeding.<br/>
							 Grab the white plastic tab and pull the battery up and out of the Unibody.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : Lower Case </h1><p> Remove the following eight screws securing the lower case to the chassis: <br/>
							 <font color="red"> One 3 mm Phillips screw.</font><br/>
							 <font color="orange"> Three 13.5 mm Phillips screws.</font><br/>
							 <font color="yellow"> Four 3.5 mm Phillips screws.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookRAM2.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> Using both hands, lift and remove the lower case off the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookMidwall1.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Mid Wall </h1><p> Remove the four 10.3 mm Phillips screws securing the mid wall to the upper case.</p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookMidwall2.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p> Lift the mid wall out of the upper case.</p>
							</div>
						   </div>

	
	<!-- Mac Book Air Hardware issues-->
	
	<div id="MacBookAir" class="tabcontent">
		<h3>Mac Book Air Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery2')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'Fan2')">Fan</button>
			<button class="tablinks" onclick="openPcCat(event, 'Trackpad')">Trackpad</button>
			<button class="tablinks" onclick="openPcCat(event, 'Microphone')">Dual Microphone</button>
			<button class="tablinks" onclick="openPcCat(event, 'ioboard2')">I/O Board</button>
		</div>
	</div>
	
	<div id = "Battery2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookAirBattary1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 5 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Use this guide to replace a faulty battery in your MacBook Air. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p> Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> Wedge your fingers between the upper case and the lower case.<br/>
							 Gently remove the lower case and set it aside.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battary </h1><p> Grab the clear plastic pull tab attached to the battery connector and pull it toward the front edge of the Air to disconnect the battery from the logic board.<br/>
							 Do not lift upward on the connector as you disconnect it. Pull the connector away from the socket.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p> Remove the following five screws securing the battery to the upper case: <br/>
							 <font color="red">Three 6.9 mm T5 Torx screws.</font><br/>
							 <font color="orange">Two 3.0 mm T5 Torx screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> When handling the battery, avoid squeezing or touching the four exposed lithium polymer cells.<br/>
							 Lift the battery from its edge nearest the logic board and remove it from the upper case.<br/>
							 If you're installing a new battery, you should calibrate it before using it: allow it to drain overnight, then charge it to 100%. Let it continue charging for two more hours, then drain it again until your MacBook Air shuts down automatically. Charge it again and use it normally.</p>
							</div>
	</div>
	
	<div id = "Fan2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookAirFan1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 10 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15 minutes - 1 hour </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Use this guide to replace a  noisy fan in your MacBook Air, or simply remove it for cleaning. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p> Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> Wedge your fingers between the display and the lower case and pull upward to pop the lower case off the Air.<br/>
							 Remove the lower case and set it aside.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battary Connector  </h1><p> To ensure that everything is de-energized and won't turn on while you're working, it is recommended that you disconnect the battery.<br/>
							 Grab the clear plastic pull tab attached to the battery connector and pull it toward the front edge of the Air to disconnect the battery from the logic board.<br/>
							 Do not lift upward on the connector as you disconnect it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : I/O Board Cable  </h1><p> Use the flat end of a spudger to pry the I/O board cable connector up out of its socket on the I/O board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan3.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p> Carefully peel the I/O board cable from the adhesive securing it to the top of the fan.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan4.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p> The following connector has an especially deep socket. Use care when disconnecting it.<br/>
							 While gently pulling the I/O board cable upward near its connection to the logic board, use the flat end of a spudger to pry up on alternating sides of the connector to help "walk" it out of its socket.<br/>
							 Remove the I/O board cable.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan5.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : Fan </h1><p> Use the tip of a spudger to carefully flip up the retaining flap on the fan cable ZIF socket.<br/>
							 Be sure you are prying up on the hinged retaining flap, not the socket itself.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan6.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p> Peel the rubber gasket off the adhesive on the top of the fan.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan7.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p> - Remove the following three screws securing the fan to the upper case:<br/>
							 <font color="red">One 5.2 mm T5 Torx screw</font><br/>
							 <font color="orange">One 3.3 mm T5 Torx screw</font><br/>
							 <font color="yellow">One 4.4 mm T5 Torx screw with a short head</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan8.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p> Lift the fan from the I/O board side and pull it free from the upper case.<br/>
							 Removing the fan will also disconnect the fan ribbon cable. Be careful not to snag it.</p>
							</div>
	</div>
	
	<div id = "Trackpad" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookAirTrackpad1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 11 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 40 minute - 1 hour </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h2> Use this guide to replace your trackpad or remove it for adjustment. </h2></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p> Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently remove the lower case and set it aside.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battary </h1><p> Grab the clear plastic pull tab attached to the battery connector and pull it toward the front edge of the Air to disconnect the battery from the logic board.<br/>
							 Do not lift upward on the connector as you disconnect it. Pull the connector away from the socket.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p> Remove the following five screws securing the battery to the upper case: <br/>
							 <font color="red">Three 6.9 mm T5 Torx screws.</font><br/>
							 <font color="orange">Two 3.0 mm T5 Torx screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>When handling the battery, avoid squeezing or touching the four exposed lithium polymer cells.<br/>
							 Lift the battery from its edge nearest the logic board and remove it from the upper case.<br/>
							 If you're installing a new battery, you should calibrate it before using it: allow it to drain overnight, then charge it to 100%. Let it continue charging for two more hours, then drain it again until your MacBook Air shuts down automatically. Charge it again and use it normally.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad2.jpg" width="240" height="200" align="right">
							 <img src="imag/MacBookAirTrackpad3.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Trackpad </h1><p>Use the tip of a spudger or your fingernail to flip up the retaining flap on the trackpad ribbon cable ZIF socket. <br/>
							 Be sure you are prying up on the hinged retaining flap, not the socket itself.<br/>
							 Pull the trackpad ribbon cable straight out of its socket toward the rear edge of the Air.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad4.jpg" width="240" height="200" align="left">
							 <img src="imag/MacBookAirTrackpad5.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p>While carefully lifting the keyboard ribbon cable with one hand, use the tip of a spudger or your fingernail to flip up the retaining flap on the keyboard ribbon cable ZIF socket.<br/>
							 Be sure you are prying up on the hinged retaining flap, not the socket itself.<br/>
							 Pull the keyboard ribbon cable straight out of its socket toward the front edge of the Air.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad6.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Remove the following twelve screws: <br/>
							 <font color="red">Six 1.6 mm Phillips screws securing the trackpad to the upper case.</font><br/>
							 <font color="orange">Six 1.6 mm Phillips screws securing the trackpad brackets to the trackpad.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad7.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Remove the right and left trackpad brackets from the upper case.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad8.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p> <font color="red">Remove the 1.4 mm T5 Torx set screw from its tapped hole near the front edge of the upper case. </font><br/>
							 During reassembly, do not over-tighten the set screw, as the button will cease to click at a certain point. Adjust the set screw until the clicking side of the trackpad has minimal play.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirTrackpad9.jpg" width="240" height="200" align="left">
							 <img src="imag/MacBookAirTrackpad10.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Use the flat end of a spudger to carefully lift the edge of the trackpad closest to the keyboard from its recess in the upper case by lifting it away from the brackets attached to the upper case.<br/>
							 Remove the trackpad from the upper case.</p>
							</div>
	</div>
	
	<div id = "Microphone" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookAirMicrophone1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 10 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 45 minute - 1 hour </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Use this guide to replace the double microphone assembly in your MacBook Air. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently remove the lower case and set it aside.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battary </h1><p>Grab the clear plastic pull tab attached to the battery connector and pull it toward the front edge of the Air to disconnect the battery from the logic board.<br/>
							 Do not lift upward on the connector as you disconnect it. Pull the connector away from the socket.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>Remove the following five screws securing the battery to the upper case: <br/>
							 <font color="red">Three 6.9 mm T5 Torx screws.</font><br/>
							 <font color="orange">Two 3.0 mm T5 Torx screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>When handling the battery, avoid squeezing or touching the four exposed lithium polymer cells.<br/>
							 Lift the battery from its edge nearest the logic board and remove it from the upper case.<br/>
							 If you're installing a new battery, you should calibrate it before using it: allow it to drain overnight, then charge it to 100%. Let it continue charging for two more hours, then drain it again until your MacBook Air shuts down automatically. Charge it again and use it normally.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirMicrophone2.jpg" width="240" height="200" align="right">
							 <h1> Step 6 : Left Speaker  </h1><p>Use the flat end of a spudger to pry the left speaker cable connector up and out of its socket on the I/O board. <br/>
							 Pry up from beneath the wires.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirMicrophone3.jpg" width="240" height="200" align="left">
							 <img src="imag/MacBookAirMicrophone4.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p>Use the flat end of a spudger to pry the left speaker off the adhesive securing it to the upper case.<br/>
							 Remove the left speaker from the upper case.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirMicrophone5.jpg" width="240" height="200" align="right">
							 <img src="imag/MacBookAirMicrophone6.jpg" width="240" height="200" align="right">
							 <h1> Step 8 : Microphone </h1><p>Use the flat end of a spudger to pry the I/O board cable connector up out of its socket on the I/O board. <br/>
							 You do not need to remove the I/O board cable, simply bend it out of the way.<br/>
							 Carefully peel, but do not remove, the I/O board cable off the adhesive securing it to the top of the fan.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirMicrophone7.jpg" width="240" height="200" align="left">
							 <img src="imag/MacBookAirMicrophone8.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Use the tip of a spudger to carefully flip up the retaining flap on the microphone ribbon cable ZIF socket.<br/>
							 Make sure you are flipping up the retaining flap, not the socket itself.<br/>
							 Carefully push the microphone ribbon cable straight out of its socket on the I/O board.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirMicrophone9.jpg" width="240" height="200" align="right">
							 <img src="imag/MacBookAirMicrophone1.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Use the tip of a spudger to pry the microphone off the adhesive securing it to the left side of the upper case. <br/>
							 Remove the microphone from the upper case.</p>
							</div>
                            
	</div>
	
	<div id = "ioboard2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MacBookAirIOboard1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 16 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 35 minutes  </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Use this guide to replace the I/O board, including the headphone jack, USB port, and MagSafe 2 port, in your MacBook Air. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> Wedge your fingers between the display and the lower case and pull upward to pop the lower case off the Air.<br/>
							 Remove the lower case and set it aside.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 3 : Battary Connector  </h1><p> To ensure that everything is de-energized and won't turn on while you're working, it is recommended that you disconnect the battery.<br/>
							 Grab the clear plastic pull tab attached to the battery connector and pull it toward the front edge of the Air to disconnect the battery from the logic board.<br/>
							 Do not lift upward on the connector as you disconnect it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan2.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : I/O Board Cable  </h1><p>Use the flat end of a spudger to pry the I/O board cable connector up out of its socket on the I/O board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan3.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Carefully peel the I/O board cable from the adhesive securing it to the top of the fan.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan4.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>The following connector has an especially deep socket. Use care when disconnecting it.<br/>
							 While gently pulling the I/O board cable upward near its connection to the logic board, use the flat end of a spudger to pry up on alternating sides of the connector to help "walk" it out of its socket.<br/>
							 Remove the I/O board cable.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan5.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : Fan </h1><p>Use the tip of a spudger to carefully flip up the retaining flap on the fan cable ZIF socket.<br/>
							 Be sure you are prying up on the hinged retaining flap, not the socket itself.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan6.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Peel the rubber gasket off the adhesive on the top of the fan.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan7.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Remove the following three screws securing the fan to the upper case:<br/>
							 <font color="red">One 5.2 mm T5 Torx screw</font><br/>
							 <font color="orange">One 3.3 mm T5 Torx screw</font><br/>
							 <font color="yellow">One 4.4 mm T5 Torx screw with a short head</font></p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirFan8.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Lift the fan from the I/O board side and pull it free from the upper case.<br/>
							 Removing the fan will also disconnect the fan ribbon cable. Be careful not to snag it.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard2.jpg" width="240" height="200" align="left">
							 <h1> Step 11 : I/O Board </h1><p>Disconnect the I/O board by pulling its power cable away from its socket on the logic board.<br/>
							 Pull the cable parallel to the face of the logic board toward the right edge of the Air.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard3.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p> Use the flat end of a spudger to pry the left speaker cable connector up and out of its socket on the I/O board.<br/>
							 Pry up from beneath the wires.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard4.jpg" width="240" height="200" align="left">
							 <h1> Step 13 : Fan </h1><p>Use the tip of a spudger to carefully flip up the retaining flap on the microphone ribbon cable ZIF socket.<br/>
							 Make sure you are flipping up the retaining flap, not the socket itself.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard5.jpg" width="240" height="200" align="right">
							 <h1> Step 14 </h1><p><font color="red">Remove the single 4.1 mm T5 Torx screw securing the I/O board to the upper case.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard6.jpg" width="240" height="200" align="left">
							 <h1> Step 15 </h1><p> Gently de-route the camera cable from its notch on the I/O board and push it out of the way with the tip of a spudger.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MacBookAirIOboard7.jpg" width="240" height="200" align="right">
							 <h1> Step 16 </h1><p>Lift the I/O board from the logic board side and pull it free from the upper case.<br/>
							 Removing the I/O board will also disconnect the microphone ribbon cable. Be careful not to snag it.</p>
							</div>
	</div>

	<!-- Mac Book Pro Hardware issues-->
	
	<div id="MacBookPro" class="tabcontent">
		<h3>Mac Book Pro Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery3')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'ioboard')">I/O Board</button>
			<button class="tablinks" onclick="openPcCat(event, 'SSD')">SSD</button>
			<button class="tablinks" onclick="openPcCat(event, 'DisplayAssembly')">Display Assembly</button>
		</div>
	</div>
	
	<div id = "Battery3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MackBookProBattary1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Difficult </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 32 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 30 minutes - 1 hour </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> For your safety, drain your MacBook Pro's battery before you begin this procedure. A charged lithium-ion battery can create a dangerous and uncontrollable fire if accidentally punctured. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently pull the lower case away from the upper case to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>The lower case is connected to the upper case with two plastic clips near its center.<br/>
							 During reassembly, gently push down the center of the lower case to reattach the two plastic clips.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>If necessary, remove the plastic cover adhered to the battery contact board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Use the flat end of a spudger to lift the battery connector straight up out of its socket on the logic board.<br/>
							 Be sure you lift up only on the connector itself, not the socket, or you risk permanent damage to the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary7.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Bend the battery connector up out of the way to prevent accidental contact with its socket during your repair.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary8.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : Right Speaker </h1><p>Remove the two 2.1 mm T5 Torx screws securing the logic board end of the I/O board cable bracket.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary9.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Grasp the I/O board cable bracket with a pair of tweezers and remove it from the MacBook.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary10.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Use the flat end of a spudger to pop the I/O board connector straight up off its socket on the logic board.<br/>
							 Be careful to only pry up on the I/O board cable, not on the socket itself or you risk damaging your logic board..</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary11.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Lift the logic board end of the I/O board cable straight up to bend it out of the way.<br/>
							 To avoid damage to the cable, fold only at the bend in the I/O board end of the cable.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary12.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Carefully tuck the tip of a spudger under the right speaker cable near the connector and lift it up out of its socket on the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary13.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p>Carefully peel the right speaker cable off the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary14.jpg" width="240" height="200" align="left">
							 <h1> Step 13 </h1><p>Remove the following screws securing the right speaker to the upper case:<br/>
							 <font color="red">One 5.7 mm T5 Torx screw</font><br/>
							 <font color="orange">One 6.5 mm T5 Torx screw</font><br/>
							 <font color="yellow">One 3.8 mm T5 Torx screw</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary15.jpg" width="240" height="200" align="right">
							 <h1> Step 14 </h1><p> Lift the right speaker from the cable end and pull it free from the case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary16.jpg" width="240" height="200" align="left">
							 <h1> Step 15 : Left Speaker  </h1><p>Insert the tip of a spudger under the left speaker cable near the connector and lift it up out of its socket on the logic board.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary17.jpg" width="240" height="200" align="right">
							 <h1> Step 16 </h1><p>Remove the following screws securing the left speaker to the upper case:<br/>
							 <font color="red">One 5.7 mm T5 Torx screw.</font><br/>
							 <font color="orange">6.5 mm T5 Torx screw.</font><br/>
							 <font color="yellow">One 3.8 mm T5 Torx screw.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary18.jpg" width="240" height="200" align="left">
							 <h1> Step 17 </h1><p>Lift the corner of the left speaker up and slide it out the battery to remove it from the upper case.<br/>
							 Be careful not to snag the speaker cable on the screw hole post in the side of the case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary19.jpg" width="240" height="200" align="right">
							 <h1> Step 18 : Battary </h1><p>Remove the five 3.7 mm T5 Torx screws securing the battery to the upper case.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary20.jpg" width="240" height="200" align="left">
							 <h1> Step 19 </h1><p>The liquid adhesive remover provided in your iFixit battery replacement kit can affect the antireflective coating on your MacBook Pro's display.<br/>
							 To protect your display, place a sheet of aluminum foil between the display and keyboard and leave it there while you work.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary21.jpg" width="240" height="200" align="right">
							 <h1> Step 20 </h1><p>Fill the syringe included in your kit with a small amount (approximately 1-2 milliliters) of adhesive remover.<br/>
							 It's best to fill the syringe with no more than about 1-2 milliliters of adhesive remover at a time, so as to avoid accidentally applying too much.<br/>
							 Refill your syringe as needed throughout the rest of this procedure.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary22.jpg" width="240" height="200" align="left">
							 <h1> Step 21 </h1><p>Apply a small amount of adhesive remover (approximately 1 ml) evenly under the edge of the rightmost battery cell.<br/>
							 Wait 2-3 minutes for the liquid adhesive remover to penetrate underneath the battery cell before you proceed to the next step.<br/>
							 Do not apply more than 1 ml of the adhesive remover at a time. Using too much can allow the adhesive remover to make its way to the backside of your keyboard and potentially damage it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary23.jpg" width="240" height="200" align="right">
							 <h1> Step 22 </h1><p> Use the hot iOpener to cover half of the two right-most battery cells.<br/>
							 After about a minute, reheat the iOpener and move it to cover the other half of the right-most battery cells.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary24.jpg" width="240" height="200" align="left">
							 <h1> Step 23 </h1><p>Push a plastic card between the right-most battery cell and the upper case, cutting the adhesive between the two.<br/>
							 Throughout this procedure, be careful not to damage any of the battery cells with your tools. A damaged lithium-ion battery may leak dangerous chemicals and/or catch fire. Use only plastic pry tools.<br/>
							 When using the hot iOpener method, if you encounter significant resistance to prying, stop and use the iOpener to reheat the section you're working on.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary25.jpg" width="240" height="200" align="right">
							 <h1> Step 24 </h1><p>Use the plastic card to pry the right-most battery cell up from the rear case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary26.jpg" width="240" height="200" align="left">
							 <h1> Step 25 </h1><p>Repeat this procedure with the adjacent battery cell:<br/>
							 Apply a small amount (about 1 ml) of liquid adhesive remover under the battery cell, and wait 2-3 minutes for it to penetrate and soften the adhesive.<br/>
							 Alternatively, re-heat this section with your iOpener if needed.<br/>
							 Push a plastic card about an inch between the battery cell and the upper case, and slowly pry the cell up to separate all of the adhesive.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary27.jpg" width="240" height="200" align="right">
							 <h1> Step 26 </h1><p>Temporarily leave your plastic card underneath the two rightmost battery cells to prevent them from re-adhering to the upper case.<br/>
							 If using an iOpener, reheat it and reapply it, this time to the left-most battery cells.<br/>
							 Again, leave the iOpener in each position for about a minute, reheating in between, to heat each half of the left-most battery cells.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary29.jpg" width="240" height="200" align="left">
							 <h1> Step 27 </h1><p>Repeat the above procedure to separate the two leftmost battery cells from the upper case.<br/>
							 Remember to apply a small amount (about 1 ml) of adhesive remover to each battery cell, and wait 2-3 minutes for it to penetrate and soften the adhesive.<br/>
							 Use a second plastic card to separate the two leftmost battery cells from the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary28.jpg" width="240" height="200" align="right">
							 <h1> Step 28 </h1><p>Leave the second card in the corner between the two left cells.<br/>
							 In the following steps, you can either use a third card, or the card from the right corner. The right corner adhesive should be dry/cool enough that the cells can easily be pulled up again when needed.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary30.jpg" width="240" height="200" align="left">
							 <h1> Step 29 </h1><p>To separate the adhesive securing the final two, middle battery cells, apply another 1 milliliter or so of liquid adhesive remover (or your iOpener) to each cell.<br/>
							 It may help to elevate one side of your MacBook Pro a few inches so that the adhesive remover flows in the correct direction, underneath the battery cells. You can use a sturdy book or foam block to prop up one side of your MacBook Pro while you work.<br/>
							 Insert the card about an inch between the left-center battery cell and the upper case, separating the adhesive between the cell and the case.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary31.jpg" width="240" height="200" align="right">
							 <h1> Step 30 </h1><p>Pull the card back out and insert it about an inch between the right-center battery cell and the upper case, separating the adhesive between the cell and case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary32.jpg" width="240" height="200" align="left">
							 <h1> Step 31 </h1><p> - By this point, the outer cells should be free, and you should only encounter resistance from the two center cells. If this is not the case, go back and completely loosen the four outer-most cells from the upper case.<br/>
							 Pry up on the two center cells to separate the last of the adhesive and lift the battery from the device.</p>
							</div>		
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary33.jpg" width="240" height="200" align="right">
							 <h1> Step 32 </h1><p>Remove the battery.<br/>
							 Before installing your new battery, remove all the old adhesive from the MacBook Pro's case.<br/>
							 Soak each section of adhesive with a bit of adhesive remover for 2-3 minutes, and then scrape it out with an opening pick or one of the other tools in your kit. This can take quite a bit of work, so be patient.<br/>
							 Mop up any remaining adhesive remover and give your MacBook Pro a few minutes to air dry.<br/>
							 Calibrate your battery before using it: allow it to drain overnight, then charge it to 100% and drain it again until your MacBook Pro shuts down automatically. Charge it again and use it normally.</p>
							</div>										
                         </div>		
	<div id = "ioboard" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MackBookProioboard1.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 23 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 20- 30 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Replace the I/O board, which includes the SD card slot, the HDMI port and the right USB port. This guide requires the removal of the heat sink. Don't forget to follow our thermal paste application guide before you reinstall your heat sink. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently pull the lower case away from the upper case to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>The lower case is connected to the upper case with two plastic clips near its center.<br/>
							 During reassembly, gently push down the center of the lower case to reattach the two plastic clips.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>If necessary, remove the plastic cover adhered to the battery contact board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Use the flat end of a spudger to lift the battery connector straight up out of its socket on the logic board.<br/>
							 Be sure you lift up only on the connector itself, not the socket, or you risk permanent damage to the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary7.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Bend the battery connector up out of the way to prevent accidental contact with its socket during your repair.</p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard2.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : Heat Sink  </h1><p>Carefully remove the rubber fan bumper from the edge of the heat sink.<br/>
                             The fan bumper wraps around the heat sink and fits into slots in the fan duct. During reassembly, be sure to fit the tabs into the notches in the fan duct.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard3.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Use the flat end of a spudger to peel the four foam stickers off of the heat sink screws.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard4.jpg" width="240" height="200" align="left">
							 <h1> Step 9 </h1><p>Remove the following screws securing the heat sink to the logic board:<br/>
							 <font color="red">Four 2.6 mm T5 screws.</font><br/>
							 <font color="orange">Orange : One 2.4 mm Phillips #000 screw.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard5.jpg" width="240" height="200" align="right">
							 <h1> Step 10 </h1><p>Remove the heat sink from the laptop.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard6.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Use the tip of a spudger to push on either side of the the iSight camera cable connector to walk it out of its socket on the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard7.jpg" width="240" height="200" align="right">
							 <h1> Step 12 </h1><p>Peel the iSight camera cable off the fan housing to fold it out of the way.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard8.jpg" width="240" height="200" align="left">
							 <h1> Step 13 </h1><p>Use the tip of a spudger to flip the tab on the fan's ZIF connector.<br/>
                             Carefully pull the fan cable straight out of its socket.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard9.jpg" width="240" height="200" align="right">
							 <h1> Step 14 </h1><p>Remove the following screws securing the fan to the upper case:<br/>
							 <font color="red">One 5.0 mm T5 Torx screw.</font><br/>
							 <font color="orange">Two 3.6 mm T5 Torx screws.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard10.jpg" width="240" height="200" align="left">
							 <h1> Step 15 </h1><p>Lift the end of the fan closest to the display hinge and remove the fan from the upper case.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard11.jpg" width="240" height="200" align="right">
							 <h1> Step 16 : I/O Board  </h1><p>Insert the tip of a spudger under each of the antenna cables near their connectors and pry up to disconnect them from the AirPort board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard12.jpg" width="240" height="200" align="left">
							 <h1> Step 17 </h1><p><font color="red">Remove the two 2.1 mm T5 Torx screws securing the I/O board cable bracket.</font><br/>
							 Remove the I/O board cable bracket.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard13.jpg" width="240" height="200" align="right">
							 <h1> Step 18 </h1><p>Use the flat end of a spudger to pop the I/O board connector straight up off its socket on the I/O board.<br/>
							 Be careful to only pry up on the cable connector, not on the socket itself or you risk damaging your I/O board.<br/>
							 Push the I/O board cable up to bend it out of the way.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard14.jpg" width="240" height="200" align="left">
							 <h1> Step 19 </h1><p> - Use the tip of a spudger to push on either side of the I/O board connector to walk it out of its socket on the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard15.jpg" width="240" height="200" align="right">
							 <h1> Step 20 </h1><p>Remove the following screws securing the I/O board to the upper case:<br/>
							 <font color="red">One 3.5 mm T9 Torx standoff screw.</font><br/>
							 <font color="orange">One 3.5 mm T5 Torx screw</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard16.jpg" width="240" height="200" align="left">
							 <h1> Step 21 </h1><p>Lift the I/O board cable end of the I/O board and pull toward the logic board to free the ports from the upper case.<br/>
							 - Remove the I/O board.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard17.jpg" width="240" height="200" align="right">
							 <h1> Step 22 </h1><p>Remove the single 2.7 mm T5 Torx screw securing the AirPort board to the I/O board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProioboard18.jpg" width="240" height="200" align="left">
							 <h1> Step 23 </h1><p>Lift the free end of the AirPort board up slightly and pull it straight out of its socket on the I/O board.</p>
							</div>
	</div>
	
	<div id = "SSD" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MackBookProSSD0.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 8 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 15 - 30 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Use this guide to remove or replace the SSD. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently pull the lower case away from the upper case to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>The lower case is connected to the upper case with two plastic clips near its center.<br/>
							 During reassembly, gently push down the center of the lower case to reattach the two plastic clips.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 4 </h1><p>If necessary, remove the plastic cover adhered to the battery contact board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary6.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Use the flat end of a spudger to lift the battery connector straight up out of its socket on the logic board.<br/>
							 Be sure you lift up only on the connector itself, not the socket, or you risk permanent damage to the logic board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary7.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Bend the battery connector up out of the way to prevent accidental contact with its socket during your repair.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProSSD1.jpg" width="240" height="200" align="left">
							 <h1> Step 7 : SSD </h1><p>Remove the single 2.9 mm T5 Torx screw securing the SSD to the logic board.</p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProSSD2.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Lift the free end of the SSD up slightly and pull the SSD straight out of its socket on the logic board.<br/>
							 Only lift the end of the SSD enough to allow you to pull it out—about 1/4".</p>
							</div>
	</div>
	
	<div id = "DisplayAssembly" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/MackBookProDisplayAssembly0.jpg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 20 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 30 minutes - 1 hour </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong><h3> Use this guide to replace the display assembly. </h3></strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary2.jpg" width="240" height="200" align="left">
							 <h1> Step 1 : Lower Case  </h1><p>Remove the following ten screws securing the lower case to the upper case:<br/>
                             <font color="red">Two 2.3 mm Pentalobe screws.</font><br/>
							 <font color="orange">Eight 3.0 mm Pentalobe screws.</font></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary3.jpg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p>Wedge your fingers between the upper case and the lower case.<br/>
							 Gently pull the lower case away from the upper case to remove it.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary4.jpg" width="240" height="200" align="left">
							 <h1> Step 3 </h1><p>The lower case is connected to the upper case with two plastic clips near its center.<br/>
							 During reassembly, gently push down the center of the lower case to reattach the two plastic clips.</p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProBattary5.jpg" width="240" height="200" align="right">
							 <h1> Step 4 : Battery Connector </h1><p>If necessary, remove the plastic cover adhered to the battery contact board.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly1.jpg" width="240" height="200" align="left">
							 <h1> Step 5 </h1><p>Remove the following screws securing the battery connector board to the logic board:<br/>
							 <font color="red">Two 2.8 mm T6 Torx screws.</font><br/>
							 <font color="orange">One 7.0 mm T6 Torx shouldered screw.</font></p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly2.jpg" width="240" height="200" align="right">
							 <h1> Step 6 </h1><p>Use tweezers to remove the small plastic cover located near the bottom right of the battery connector board.</p>
							</div>			
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly3.jpg" width="240" height="200" align="left">
							 <h1> Step 7 </h1><p>Remove the wide head 6.4 mm T6 Torx screw securing the battery connector to the logic board assembly.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly4.jpg" width="240" height="200" align="right">
							 <h1> Step 8 </h1><p>Carefully lift the battery connector board up off the logic board.<br/>
							 It is recommended to bend the battery cables just slightly, to keep the board suspended up above the logic board and out of the way.<br/>
							 Do not fold the board completely over, or crease the cables, as this may damage the battery.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly5.jpg" width="240" height="200" align="left">
							 <h1> Step 9 : Battery Contact Board  </h1><p>Grasp the Interposer with tweezers.<br/>
							 Lift the Interposer off the logic board and remove it.<br/>
							 Removing this board will ensure that the battery remains disconnected throughout your repair, preventing your computer from accidentally powering on. It's also a good idea to take it out so it doesn't fall out unexpectedly.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly6.jpg" width="240" height="200" align="right">
							 <h1> Step 10 : iSight Camera Cable  </h1><p>Use the tip of a spudger to push the iSight camera cable connector straight away from its socket on the logic board.<br/>
							 It is recommended to carefully push on both sides of the connector to "walk" it out of its socket.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly7.jpg" width="240" height="200" align="left">
							 <h1> Step 11 </h1><p>Move the iSight camera cable aside.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly8.jpg" width="240" height="200" align="right">
							 <h1> Step 12 : AirPort Board Assembly  </h1><p>Use the flat end of a spudger to pry and disconnect the three antenna cable connectors from the AirPort board.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly9.jpg" width="240" height="200" align="left">
							 <h1> Step 13 </h1><p>Move the antenna cables aside, clear of the AirPort board.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly10.jpg" width="240" height="200" align="right">
							 <h1> Step 14 : Display Assembly  </h1><p>Grab the black pull tab secured to the display data cable lock and rotate it toward the DC-In side of the computer.<br/>
							 Pull the display data cable straight out of its socket on the logic board.<br/>
							 Do not lift up on the display data cable, as its socket is very fragile. Pull the cable parallel to the face of the logic board.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly11.jpg" width="240" height="200" align="left">
							 <h1> Step 15 </h1><p>Use a pair of tweezers to lift the rubber hinge covers up off the right and left display hinges.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly12.jpg" width="240" height="200" align="right">
							 <h1> Step 16 </h1><p>Remove the two 3.1 mm T5 Torx screws securing the aluminum hinge brackets.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly13.jpg" width="240" height="200" align="left">
							 <h1> Step 17 </h1><p>Use a pair of tweezers to lift aluminum hinge brackets off the right and left display hinges.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly14.jpg" width="240" height="200" align="right">
							 <h1> Step 18 </h1><p>Remove the four inner 5.3 mm T8 Torx screws (two on each side) securing the display to the upper case.</p>
							</div>						
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly15.jpg" width="240" height="200" align="left">
							 <h1> Step 19 </h1><p>Open the MacBook Pro approximately 110 degrees, and place it sideways on the table, as shown.<br/>
							 While holding the display and upper case together with your left hand, remove the remaining T8 Torx screw from the upper display bracket.<br/>
							 Be sure to hold the display and upper case together with your left hand. Failure to do so may cause the freed display/upper case to fall, potentially damaging each component.<br/>
							 Remove the last remaining T8 Torx screw securing the display to the upper case.</p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/MackBookProDisplayAssembly16.jpg" width="240" height="200" align="right">
							 <h1> Step 20 </h1><p>Grip both halves of the device, one in each hand.<br/>
							 Gently push forward on the bottom half of the device to detach it from the display assembly.<br/>
							 Carefully set each component aside, making sure to set down the lower half keyboard-side down.</p>
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
  
  <form class="modal-content animate" action="#">
        
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
