<?php

	session_start();
		
	// Connect and select the database
	$dbc = mysqli_connect ('localhost', 'root', '2181894805');
    mysqli_select_db ($dbc, 'tinkers_fixers');
	
	/*------ Upload image and save to database -----*/
		
	if (isset ($_POST['submit'])){
		$filename = $_FILES['image']['name'];  
		$filetmp = $_FILES['image']['tmp_name'];
		$filetype = $_FILES['image']['type'];
		$filesize = $_FILES['image']['size'];
		$max_size = 2097152;
        $filepath = "img_upload/".$filename;
		$n=$_POST['shape'];
		
		
	$query = "SELECT user_id FROM members WHERE'{$_SESSION['id']}'";	
	    $r = mysqli_query ($dbc, $query);
	    $row = mysqli_fetch_array($r);
	    if($row['user_id']) {
			$query = "INSERT INTO questions 
            VALUES ('{$row['user_id']}',0 , '{$_POST[$n]}', '{$_POST['title']}',' {$_POST['description']}', '$filepath')";
		    mysqli_query ($dbc, $query);
			if ($filesize < $max_size){
				if(move_uploaded_file($filetmp,$filepath)){
				    print "<script>alert('Image Has Been Inserted Successfuly {$_POST[$n]}')</script>";
				}
				else {
					print "<script>alert('Image Does Not Inserted To Database')</script>";
				}
				
		    }
		    else {
				print "<script>alert('Image size is too larg, make sure its under 2MB')</script>";
	        }	
		}		
	}
?>

							
<!DOCTYPE html>
<html>
	<head>
	    
		<title>Questions Forum</title>
		
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
			
			<div id="content">
				<div id="content-inner">
					<main id="contentbar">
					    
						
						<form action='ask_questions.php' method='post'>
				        <button id='button' type='submit'>Ask a Question</button>
					    </form>
						
					    
			            <img id="icon" src="imag\dialog.png"> 
						<h2 class="font">Questions Forum</h2>
						<div class="clr"></div> 
                  	    <hr>
						<div class="clr"></div> 
						<div id="content">
				        <div id="content-inner">
					<main id="contentbar">
			
				        <?php 
						 $query ;
						if(isset ($_GET['query'])){
							$querysearch;
							$condition;
							$query= "SELECT * FROM devices ";
							$r = mysqli_query($dbc, $query);
							while($row = mysqli_fetch_array($r)){
								if (strpos( strtolower($_GET['query']), strtolower($row['deviceCompany']))!==false){
								  $querydeviceName="SELECT * FROM devices  where deviceCompany='{$row['deviceCompany']}'";
							      $rdeviceName = mysqli_query($dbc, $querydeviceName);
								 while( $rowdeviceName= mysqli_fetch_array($rdeviceName)){
								  if (strpos( strtolower($_GET['query']),  strtolower($rowdeviceName['deviceName']))!==false){
									 $condition= "device='{$rowdeviceName['deviceId']}'";
									$_GET['query']= str_ireplace($row['deviceCompany'],"" ,$_GET['query']);
									$_GET['query']= str_ireplace($rowdeviceName['deviceName'],"" ,$_GET['query']);
									  break;
								    }
								 } if (!$condition){
									 $querydeviceName="SELECT deviceId FROM devices  where deviceCompany='{$row['deviceCompany']}'";
							         $rdeviceName = mysqli_query($dbc, $querydeviceName);
									 while($rowdeviceName= mysqli_fetch_array($rdeviceName)){
									 $condition.= "device='{$rowdeviceName['deviceId']}' or ";}
									 $condition=substr($condition,0,$condition.length-2);
									 $_GET['query']=str_ireplace($row['deviceCompany'],"" ,$_GET['query']);
									 break;
								 }
								  break;
								}
								elseif(strpos( strtolower($_GET['query']),  strtolower($row['deviceName']))!==false){
									$condition= "device='{$row['deviceId']}'  ";
									$_GET['query']= str_ireplace($row['deviceName'],"" ,$_GET['query']);
									  break;
									
								}
							}
                          						
							$search_exploded=explode (" ", $_GET['query']);
							$x = 0;
                         						
							foreach ($search_exploded as $key => $value) {
							 
                             if($value){
								 
								if($key==$x and $x!=100){ 
								 if($condition){
									  if (strcmp(substr("$condition", -1),"o")==0){$condition=substr($condition,0,$condition.length-1);}
									 $condition.=" or ";
									 }
							     $condition .=" q_title LIKE "; $x=100;
								}
							    $condition .="'%$value%' or";
								 } else $x++;
                             if(count($search_exploded )==$key+1)
							   $condition=substr($condition,0,$condition.length-2);
                            }
							
                            

						 $query = "SELECT *FROM questions WHERE $condition";	  
                        
						 			 		
						}
						else
						{$query = "SELECT * FROM questions";}
		                $r = mysqli_query($dbc, $query);
						//print "No results found";	
	                    while($row = mysqli_fetch_array($r)){
						$unmbrofANSWERS =selcetnumofANSWERS($row['q_id']);
					    $querydeviceName = "SELECT deviceName FROM devices WHERE deviceId={$row['device']}";
		                $rdeviceName = mysqli_query($dbc,$querydeviceName);
						$rowdeviceName=mysqli_fetch_array($rdeviceName);
						print "<div class='question_box'>";
                        ?>  <img id="img_div" src="<?php print $row['image']; ?>">
                        <?php
		                   if($unmbrofANSWERS!=="0"){
                         echo"<div class='answer_box'>
							<div class='box_container'> 
						    <p><span style='font-size:25px'> $unmbrofANSWERS  </span><br /> ANSWERS </p>
							</div>
						    </div>";}
						else{
							print "<div class='answer_box_false'>";
                            print "<div class='box_container_false'>"; 
		                   	print "<p><span style='font-size:25px'>$unmbrofANSWERS</span><br /> ANSWERS </p>";
		                    print "</div>";
	                   	    print "</div>";
						}
		                    print "<div id='inner_box'>";
							$ID=$row['q_id'];
		                    print "<p><b><a href=\"answers.php?id=$ID\" target='_blank'>".$row['q_title']."</a></b></p>";
                   		    print "<p>".$rowdeviceName['deviceName']."</p>";
                    	    print "</div>";
							print "</div>";
	                    }
						print"</div>"; 
                            function selcetnumofANSWERS($QuestionsID){
				            if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {	
				            if (@mysqli_select_db ($dbc,'tinkers_fixers')){
						    $query="SELECT count(a_id) as total from answers WHERE q_id='$QuestionsID'";
						     if($r=mysqli_query ($dbc, $query)){
					         if ($row = mysqli_fetch_array ($r))
							    return $row['total'] ;}}}
							
					         return;}							
		                
						?>
			        </main>
			    </div>
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
	
	

