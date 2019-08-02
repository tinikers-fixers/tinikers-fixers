


<!DOCTYPE html>
<html>
<head>
	<title>
		ToshibaPage
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
			   <img class="main-laptop" src="imag/toshiba.jpg" alt="Toshiba">
			     <h1  style="transform:translate(300px,-180px); color:white; align: left;">TOSHIBA Laptops Repair</h1>
                 <h3 style="transform:translate(100px,-70px); color:white;">Repair guides for many brands of Toshiba Laptops . </h3>	        
			    </div>
            
			</div>
	 
	<div class="tab0" align = "center">
		<button class="tablinks" onclick="openPc(event, 'Tecra')"> <img src="imag/tecra.jpeg" alt="Toshiba Tecra" style="width:200px;height:200px;">
		<br/>Tecra</button>
		<button class="tablinks" onclick="openPc(event, 'Satellite')"><img src="imag/satellite-C55T-C5239-420.jpg" alt="Toshiba Settalite" style="width:200px;height:200px;">
		<br/>Satellite</button>
		<button class="tablinks" onclick="openPc(event, 'Portege')"><img src="imag/portage_m700-1.jpg" alt="Toshiba Portege" style="width:200px;height:200px;">
		<br/>Portege</button>
	</div>

	<!-- Tab content -->
	
	<!-- Toshiba Tecra Hardware issues-->

	
	<div id="Tecra" class="tabcontent">
		<h3>Tecra Hardware Problems</h3>
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
								      <th><img src="imag/KEECXVZuuBAE22Hl.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 2 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 1 minute </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Replacing the battery on a Toshiba Tecra is an easy task. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/tlxTWZ26ETA5QQNy.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Turn off the device and unplug the power cord.</b></font><br/>
							 - To remove the battery, flip the device, so that the bottom is facing upward.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HPYrg1Mu1Bt25sOO.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/mWmflGOC6NtnSRRe.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/OBaDJgrvOOTcYl1t.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Slide the battery to the right side until you hear a click.
							 <br/>- Carefully remove the battery from its compartment. </p>
							</div>	
	</div>
	
	
	<div id = "HardDrive1" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/SK5irppa4OxxgOlH.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/tlxTWZ26ETA5QQNy.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Turn off the device and unplug the power cord.</b></font><br/>
							 - To remove the battery, flip the device, so that the bottom is facing upward.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HPYrg1Mu1Bt25sOO.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/mWmflGOC6NtnSRRe.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/OBaDJgrvOOTcYl1t.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 :</h1><p> - Slide the battery to the right side until you hear a click.
							 <br/>- Carefully remove the battery from its compartment. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/OGP25JGOKqBYwThN.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/AvbKErgUHheHMOpf.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/YHS1MCM2pova1EPS.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 : Hard Disk Drive</h1><p> - Locate the hard drive panel.<br/>
							 - Remove the single screw labeled F4 by using a Philips size #00 screwdriver.<br/>
							 - Save the screw, as it will be needed for reassembly.<br/>
							 - Remove the panel, exposing the hard drive.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							<img src="imag/jRPfBIEtZhxjhXSq.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/VosGtUqMOLlPuRxE.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Pull the tab to remove the hard drive.<br/>
							 - Insert the new hard drive by pushing it into the compartment, leaving the new "pull" tab exposed.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/xAjlMZCNZE4PuMe5.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/HcvROa3wmaXpHfIK.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : </h1><p> - Tuck the "pull" tab back into the hard drive compartment.<br/>
							 - Replace the panel.<br/>
							 - Replace the single F4 screw.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/ccR2UPWDfdVtfkhf.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/goFENRYRxdVEq11U.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/VYtIfrBAAwasphDZ.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Identify the connector pins on the battery.<br/>
							 - Line up the connector pins on the battery with the connector pins on the computer and push inward to reconnect the battery.<br/>
							 - Slide the exterior panel towards the center of the computer to lock the battery in place.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "Ram1" class = "tabcontent tabcontent1">
		<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/1rpSJD5ONtXrpUSb.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide demonstrates how to properyly remove and replace a Toshiba Tacra RAM in order to preserve the function of the device.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/tlxTWZ26ETA5QQNy.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> <font style="color:red;"><b> - Turn off the device and unplug the power cord.</b></font><br/>
							 - To remove the battery, flip the device, so that the bottom is facing upward.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/HPYrg1Mu1Bt25sOO.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/mWmflGOC6NtnSRRe.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/OBaDJgrvOOTcYl1t.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 :</h1><p> - Slide the battery to the right side until you hear a click.
							 <br/>- Carefully remove the battery from its compartment. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/nQC2OaKbJS2LromJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 : RAM</h1><p> - Position device so the screen is face down.<br/>
							 - Locate RAM Panel.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							<img src="imag/iINvQKlUSXBarRnR.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/fZ3pZEaoHoAJqF3L.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Remove two screws labeled F4 with precision screwdriver (Phillips size #00).<br/>
							 - Set screws aside.<br/>
							 - Remove panel.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/5WoDXLWt4uNsZ2vH.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/HglRJBxwkNkipxAJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : </h1><p> - Pinch clips on each side of RAM chips to release.<br/>
							 - Gently remove RAM chips at a 45 degree angle.<br/>
							 - Use a plastic opening tool if RAM chips do not pop open.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/PtunIxJNrUJl6Fci.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Insert new RAM chips and reassemble.<br/>
							 </p>
							</div>	
	</div>
	
	<!-- Toshiba Satellite Hardware issues-->
		
	<div id="Satellite" class="tabcontent">
		<h3>Satellite Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery2')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive2')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram2')">RAM</button>
			<button class="tablinks" onclick="openPcCat(event, 'KeyBoard2')">Keyboard</button>
		</div>
	</div>
	
	<div id = "Battery2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/YRw1FsqFLsGXCTTN.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 4 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 1 minute </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> Replacing the battery on a Toshiba Satellite is an easy task. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/rsZfbiTU5bFnIpvD.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Locate the two sliding battery locks on the underside of the laptop.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/mnsBlg2g1VoGZY1G.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/DVVaPQIxyEOZ4RJX.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Locate the right battery lock and slide it to the right. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/UqnScxCURSIdGJKW.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/wMsbyZYHSIGnemOg.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - While holding the left battery lock to the left, lift up the battery using the tab located on the top center of the battery.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UY14jbjiRACLwbWk.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 4 :</h1><p> - Remove the battery from the laptop.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "HardDrive2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/eLl6YqNotbFmVID5.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 8 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/rsZfbiTU5bFnIpvD.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Locate the two sliding battery locks on the underside of the laptop.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/mnsBlg2g1VoGZY1G.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/DVVaPQIxyEOZ4RJX.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 : </h1><p> - Locate the right battery lock and slide it to the right. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/UqnScxCURSIdGJKW.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/wMsbyZYHSIGnemOg.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - While holding the left battery lock to the left, lift up the battery using the tab located on the top center of the battery.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UY14jbjiRACLwbWk.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Remove the battery from the laptop.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/WbmCPQwlJyYKaHkQ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : Hard Disk Drive</h1><p> - Unscrew the screws enough to remove the top cover.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UY14jbjiRACLwbWk.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Remove the cover by lifting the right side up at an angle before removing the entire cover.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/YT4aDBnPXcqT2P5S.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/DV6dl3dKnuWvb3UV.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 7 :</h1><p> - Remove the hard drive from the SATA slot by tugging lightly on the ribbon cable to the right.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/MW6mTITdpVJxZyTb.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/34hj2AMV1xhClu4I.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/P3Jlrgj3XvXLYZB3.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 8 :</h1><p> - To separate the hard drive from the caddy, unscrew the two screws.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "Ram2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/GXaiCAj1X5bNM64I.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 8 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Toshiba Satellite RAM replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/rsZfbiTU5bFnIpvD.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Locate the two sliding battery locks on the underside of the laptop.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/mnsBlg2g1VoGZY1G.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/DVVaPQIxyEOZ4RJX.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Locate the right battery lock and slide it to the right. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/UqnScxCURSIdGJKW.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/wMsbyZYHSIGnemOg.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - While holding the left battery lock to the left, lift up the battery using the tab located on the top center of the battery.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UY14jbjiRACLwbWk.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Remove the battery from the laptop.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/GXaiCAj1X5bNM64I.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/ZRf6eOqArK1sLaxa.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/AFrMKcNukGMaHQPO.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : RAM</h1><p> - Unscrew the RAM cover and rotate the cover up to remove it.
							 <br/>- The screw should not be fully removed from the cover itself.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/FXN6XSDRQKT5Gl5X.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/thWUMmKdIyvgXFmg.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Push the small levers at the sides of the RAM module away from each other. 
							 <br/>- The RAM module should automatically rotate upwards.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/uWLM2QivpZiMEbnw.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/k2ObrLWaQTD5tsOB.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 7 :</h1><p> - Remove the RAM module by pulling it out at the angle it was rotated to.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/3MUyPRPQVnUEE2JU.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/RAuZit5YIiBHvPAK.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/L13vD2244tlo3XrA.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 8 :</h1><p> - If you want to replace the second RAM module, apply steps 6 and 7 to do so.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "KeyBoard2" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/FVCtYWGXny2E1s1V.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 8 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Toshiba keyboard replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/rsZfbiTU5bFnIpvD.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Locate the two sliding battery locks on the underside of the laptop.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/mnsBlg2g1VoGZY1G.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/DVVaPQIxyEOZ4RJX.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Locate the right battery lock and slide it to the right. </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/UqnScxCURSIdGJKW.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/wMsbyZYHSIGnemOg.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - While holding the left battery lock to the left, lift up the battery using the tab located on the top center of the battery.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/UY14jbjiRACLwbWk.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 :</h1><p> - Remove the battery from the laptop.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/FVCtYWGXny2E1s1V.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/TINinKaTQvX6aBBA.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : Keyboard</h1><p> - Locate the plastic strip at the top of the keyboard.
							 <br/>- Use a pry tool to remove the plastic strip.<br/>
							 - Using your hands pull out the rest of the plastic strip.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/SuJOopFVPPxaOmwh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Use a phillips head #0 screwdriver to remove the two 3.75mm screws holding the keyboard in place. 
							 <br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/S2FjgLFYOvRiARfU.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/qSZoAcXlfLvQeuDG.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/NBKTQEkV2drjGM6d.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 7 :</h1><p> - Lift up the top of the keyboard to remove it.<br/>
							 - Under the keyboard there is a ribbon cable connecting the keyboard to the laptop.<br/> <font style="color:red;"><b>- Do not just quickly pull out the keyboard</b>.</font><br/>
							 - Unlock the ribbon cable by pushing on the locks that are located on both sides of ribbon cable.<br/>
							 - Unplug the ribbon cable from the laptop.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/T2HvnPmIjts2E1qZ.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 8 :</h1><p> - Remove the keyboard completely from the laptop.<br/>
							 </p>
							</div>
	</div>

	<!-- Toshiba Portege Hardware issues-->
	
	<div id="Portege" class="tabcontent">
		<h3>Portege Hardware Problems</h3>
		<div class="tab1">
			<button class="tablinks" onclick="openPcCat(event, 'Battery3')">Battery</button>
			<button class="tablinks" onclick="openPcCat(event, 'HardDrive3')">Hard Drive</button>
			<button class="tablinks" onclick="openPcCat(event, 'Ram3')">RAM</button>
			<button class="tablinks" onclick="openPcCat(event, 'KeyBoard3')">Keyboard</button>
		</div>
	</div>
	
	<div id = "Battery3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/SvY3UdutQegmZGxA.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Very easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 3 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 1 minute </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong> This guide will go through the steps needed to remove the laptop's battery. </strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BMSGuZ1iiInikUIJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Turn the computer over onto its back.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/QYbhW6ELIuDYaBup.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/hhaKFuxiY6pHXgyh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Slide the lock on the left side to the unlock position.<br/>
							 - Slide the lock on the right side to the unlock position until there is a clicking sound.<br/> </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DKsqwwPUHAXuehK2.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/YEj3AJFWVceKeq6X.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Remove the battery by sliding it out while both locks remain in the unlock position.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "HardDrive3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/IlJ5jWxH1J5jAtNL.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide will cover the access to and removal of the hard disk drive for replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BMSGuZ1iiInikUIJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Turn the computer over onto its back.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/QYbhW6ELIuDYaBup.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/hhaKFuxiY6pHXgyh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 </h1><p> - Slide the lock on the left side to the unlock position.<br/>
							 - Slide the lock on the right side to the unlock position until there is a clicking sound.<br/> </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DKsqwwPUHAXuehK2.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/YEj3AJFWVceKeq6X.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Remove the battery by sliding it out while both locks remain in the unlock position.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/dunDEv5X1VnPviya.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/YeeNY2dv3a2xSLlH.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/SIrfkkgoFt4XGKP5.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : Hard Disk Drive</h1><p> - Turn the computer over onto the back.<br/>
							 - Use a Phillips head screwdriver to remove the screw from the hard drive cover.<br/>
							 - One 8.5 mm fine thread screw.<br/>
							 - Lift and remove the cover.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/VO1gQ4GyvVOdjaoZ.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/DYGm1dJTJFXDjrEQ.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/M5dcToUjMgScSD2K.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : </h1><p> - Carefully remove the hard drive from the IDE cable by pulling on the black connector (do not pull the orange cable).<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/qtPU5AhWlnNHrQMu.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/A4KABY6sYxlPKEPX.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Remove the two gray rubber covers from both ends of the hard drive.<br/>
							 </p>
							</div>
							

			
	</div>
	
	<div id = "Ram3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/j5T3bpCHXcsyBBRU.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Easy </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 6 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 5 - 10 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Toshiba RAM replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BMSGuZ1iiInikUIJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Turn the computer over onto its back.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/QYbhW6ELIuDYaBup.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/hhaKFuxiY6pHXgyh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 : </h1><p> - Slide the lock on the left side to the unlock position.<br/>
							 - Slide the lock on the right side to the unlock position until there is a clicking sound.<br/> </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DKsqwwPUHAXuehK2.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/YEj3AJFWVceKeq6X.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Remove the battery by sliding it out while both locks remain in the unlock position.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/SsqENxxFIjIZmoxP.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/mPxQO1TQmQKkyLWA.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/P1Kqg1uVaQt4g4EK.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : RAM</h1><p> - Turn the computer over onto the back.<br/>
							 - Use a Phillips head screwdriver to remove the screw holding the RAM cover in place, and lift the cover.<br/>
							 - One 4.0 mm coarse thread screw.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/JKqLGVhRCCDyiY51.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/J2KknNRSkMBcU6gq.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/WGYyjyFv6H4LciIP.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : </h1><p> - Use a plastic opening tool to open the silver flaps on either side of the RAM.<br/>
							 - Once both flaps are released, the RAM should pop up at an angle.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/ojOUsJKSrQxemkGm.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/LPChIScabUlstsgP.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 : </h1><p> - Grasp both sides of the RAM and pull to remove it.<br/>
							 </p>
							</div>
	</div>
	
	<div id = "KeyBoard3" class = "tabcontent tabcontent1">
			<div id="backw" align="center">
								  <table style="width:100%" align="center">
								    <tr>
								      <th><img src="imag/OApcNaarGeCRaNyB.medium.jpeg" width="240" height="200" align="center"></th>
								      <th colspan="2"><div id="box1" align="left" style="width:320px"><strong> Difficulty : </strong> Moderate </div>
									                  <div id="box1" align="left" style="width:320px"><strong> Steps : </strong> 10 steps </div>
											          <div id="box1" align="left" style="width:320px"><strong> Time Required : </strong> 30 - 45 minutes </div>
							          </th>
								    </tr>
								  </table>
                                 </div> 								  
                               <p><strong>This guide for Toshiba keyboard replacement.</strong></p>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/BMSGuZ1iiInikUIJ.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 1 : Battery </h1><p> - Turn the computer over onto its back.<br/></p>
							</div>
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/QYbhW6ELIuDYaBup.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/hhaKFuxiY6pHXgyh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 2 : </h1><p> - Slide the lock on the left side to the unlock position.<br/>
							 - Slide the lock on the right side to the unlock position until there is a clicking sound.<br/> </p>
							</div>	
                            <div id="box0" align="center" style="height:210px">
							 <img src="imag/DKsqwwPUHAXuehK2.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/YEj3AJFWVceKeq6X.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 3 :</h1><p> - Remove the battery by sliding it out while both locks remain in the unlock position.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/elVamPwOVnkWn4Yd.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/mJHEGAdfyH4jD5bN.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 4 : Keyboard</h1><p> - Use a plastic opening tool to unsnap the right hand side speaker cover.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/xVCNOQ5LPoMkFv6E.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/kXfPq4dmtTKP1Lyb.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 5 : </h1><p> - Remove the rest of the cover by sliding it to the right and lifting the edge.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/ngqlmu5KYqYgEbYI.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/jJjSwo3gyjc4qdQh.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 6 :</h1><p> - Use a Phillips head #00 screwdriver to remove the two silver screws at the top of the keyboard.<br/>
							 - Two 4.0 mm coarse thread screws.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/FNHopeHZ1UNo2dZE.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/nBSkkAcL3ko6nfMT.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/vihhClA3mGg1FNHL.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 7 :</h1><p> - Remove the Torx screw holding the left keyboard tab in place, and lift it to release.<br/>
							 - One Torx T6 fine thread screw.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/cW65HGF2ZXuTFdAx.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/1MP11CWGvFvWLgLg.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 8 :</h1><p> - Turn the computer over on to the back.<br/>
							 - Remove the middle screw with a Phillips head #000 screwdriver.<br/>
							 - One 7.5 mm fine thread screw.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/XWHiGtGBLjQfRTTc.medium.jpeg" width="240" height="200" align="left">
							 <img src="imag/eG62vgNnxpKsfgtK.medium.jpeg" width="240" height="200" align="left">
							 <h1> Step 9 :</h1><p> - Turn the computer over to the front.<br/>
							 - Gently pull at the top and bottom to remove the keyboard.<br/>
							 - Peel off the black tape that holds the connection wire.<br/>
							 </p>
							</div>
							<div id="box0" align="center" style="height:210px">
							 <img src="imag/EdcOWWVVHPQAxwPF.medium.jpeg" width="240" height="200" align="right">
							 <img src="imag/G5TRLXI4aPWKBXe2.medium.jpeg" width="240" height="200" align="right">
							 <h1> Step 10 :</h1><p> - Flip the keyboard over and carefully unplug the connection wire.<br/>
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
