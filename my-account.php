<!DOCTYPE html>
<html>
	<head>
	    
		<title>My Account</title>
		
		<meta name="keywords" content="" />
        <meta name="description" content="" />
		
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css1\stylesheet.css" />
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
				print"<label class='action-dropdown'>";
				
                    print"<div class='dd-button'>".$_SESSION['username']."</div>";
                    print"<input type='checkbox' class='dd-input' id='test'>";
					print"<ul class='dd-menu'>";
					print'<li><a href="my-account.php">my Account</a></li>';
				    print"<li><a  onclick=\"send\" name=\"Logout\"  value=\"Logout\" href=\"logout.php\">Logout</a></li>";
					print"</ul>";
				
				    print"</label>";
                  
				
                				
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
		
		<div class="userinfo">
		 
		<div class="tab" style="margin-top:40px; ">
			<button value="veiw" onclick="veiw()" >Veiw</button>
			<button value="edit" onclick="editaccont()">Edit</button>
			<button value="myq" onclick="myq()">My Questions</button>
		</div>
		 
	      
	     <div id="veiw" style="display:block;">
			<div class="userimg"> 
			  
		     <?php
			 // Address error handling.
               ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
             // Attempt to connect to MySQL and print out messages.
			   session_start(); 
               if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {		
               if (!@mysqli_select_db ($dbc,'tinkers_fixers')) {
                die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');}		   
		      $query="SELECT * FROM members WHERE user_name =\"{$_SESSION['username']}\"";
              if($r=mysqli_query ($dbc, $query)){
			  while($row = mysqli_fetch_array ($r)){
				 print   "<img src=\"{$row['photo']}\" alt=\"Avatar\" class=\"avatar\">";
				 
				 
				 
			  }
              }else die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
			  mysqli_close($dbc);} 
             else {	
             die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');}

			 ?>
			 </div>
			<div class="info1">
			  
		     <?php
			 // Address error handling.
               ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
             // Attempt to connect to MySQL and print out messages.
			   session_start(); 
               if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {		
               if (!@mysqli_select_db ($dbc,'tinkers_fixers')) {
                die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');}		   
			   $query="SELECT * FROM members WHERE user_name =\"{$_SESSION['username']}\" and user_id ={$_SESSION['id']}";
              if($r=mysqli_query ($dbc, $query)){
			  while($row = mysqli_fetch_array ($r)){
		 
				 
				 print "User Name : ".$row['user_name']."</br></br>"; 
				 print "Email : ".$row['email']."</br></br>";
				 if($row['phone']==0){$row['phone']='';}
				 print "Phone : ".$row['phone']."</br></br>";
				 if( $_SESSION['changdata']==1 or  $_SESSION['changdata']==2)
					 print "Information is not modified</br></br>";
				 
				 
			  }
              }else die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
			  mysqli_close($dbc);} 
             else {	
             die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');}

			 ?>
			</div>
            
			
		  </div>
			
		 <div id="edituserinfo" style="display:none;">
		      	 <div class="editimg">
				    <?php
			 // Address error handling.
               ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
             // Attempt to connect to MySQL and print out messages.
			   session_start(); 
               if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {		
               if (!@mysqli_select_db ($dbc,'tinkers_fixers')) {
                die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');}		   
		      $query="SELECT * FROM members WHERE user_name =\"{$_SESSION['username']}\" and user_id ={$_SESSION['id']}";
              if($r=mysqli_query ($dbc, $query)){
			  while($row = mysqli_fetch_array ($r)){
				 print   "<img src=\"{$row['photo']}\" alt=\"Avatar\" class=\"avatar\">";
		 
				 
				 
			  }
              }else die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
			  mysqli_close($dbc);} 
             else {	
             die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');}

			 ?>
				 </div> 
            <div class="editinfo">
		 
			 		     <?php
			 // Address error handling.
               ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
             // Attempt to connect to MySQL and print out messages.
			   session_start(); 
               if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {		
               if (!@mysqli_select_db ($dbc,'tinkers_fixers')) {
                die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');}		   
		      $query="SELECT * FROM members WHERE user_name =\"{$_SESSION['username']}\"and user_id ={$_SESSION['id']} ";
              if($r=mysqli_query ($dbc, $query)){
			  while($row = mysqli_fetch_array ($r)){
		       echo"<lable>";
		      $ID=$row['user_id'];
			  print "<form action=\"Changedata.php?id=$ID\" method=\"post\" >";
			 echo"  User Name : <br/><input type='text' name='user_name' onfocus=this.value='' value={$row['user_name']} required><br/>";
			 if($row['phone']==0){$row['phone']='';}
			 echo"</lable>
			<lable> 
			  Email : <br/><input type='text' name='email' onfocus=this.value='' value={$row['email']}  required ><br/>
			</lable>
			<lable> 
			  Phone Number : <br/><input type='text' name='phone' onfocus=this.value=''  value={$row['phone']}><br/>

			</lable><br/>
			<p>Change Your Password</p>";
			 if($_SESSION['changdata']==2) print"<p style='color:red;  float:right;  '>*The old password is wrong</p> ";
			 }
			echo"<label>Old Password : <br/><input type='text' name='oldpass'/>";
			"</lable>"; 
			echo"<br><label>New Password : <br/><input type='text' name='psw1' id='psw1'/></lable><br>";
			echo"<label>Confirm Password : <br/><input type='text' name='psw3' id='psw1'/></lable><br>";
			if($_SESSION['changdata']==1)print"<p style='color:red; loat:right; margin-right:150px;'>*The new password not confirm </p> ";
			
			
			
			 
              }else die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');
			  mysqli_close($dbc);} 
             else {	
             die ('<p>Could not connect to MySQL because: <b>' . mysqli_error($dbc) . '</b></p>');}
        
						 
		    echo"<input type='submit' value='Save Change' name='save' style=\"float:left;\" />
			</form>";
			
			?>
			
			<input type='button'  value='Delete Account' name ='delete' onclick="document.getElementById('modal-wrapper').
			style.display='block'" style="float:left; margin-left:20px; width: 20%; background-color: #079CCE;
			color: white; padding: 12px 20px; border: none; border-radius: px; cursor: pointer; font-size:16.5px;" />
		     
			</div>
			 
		
		
        </div>
		 <div id="myquestions" style="display:none;">
		  <?php
			 
			ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
               // Attempt to connect to MySQL and print out messages.
			   session_start();
			    if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {	
				
               if (@mysqli_select_db ($dbc,'tinkers_fixers')){
                 
					$query="select * FROM questions WHERE user_id='{$_SESSION['id']}'";
					
		                $r = mysqli_query($dbc, $query);
						//print "No results found";	
	                    while($row = mysqli_fetch_array($r)){
						$unmbrofANSWERS =selcetnumofANSWERS($row['q_id']);
					    $querydeviceName = "SELECT deviceName FROM devices WHERE deviceId={$row['device']}";
		                $rdeviceName = mysqli_query($dbc,$querydeviceName);
						$rowdeviceName=mysqli_fetch_array($rdeviceName);
						print "<div class='question_box' style=' width:97%;margin-left:2%;'>";
                        ?>  <img id="img_div" src="<?php print $row['image']; ?>">
                        <?php
		                   if($unmbrofANSWERS!=="0"){
                         echo"<div class='answer_box' >
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
                           							
		                
							
				}} function selcetnumofANSWERS($QuestionsID){
				            if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {	
				            if (@mysqli_select_db ($dbc,'tinkers_fixers')){
						    $query="SELECT count(a_id) as total from answers WHERE q_id='$QuestionsID'";
						     if($r=mysqli_query ($dbc, $query)){
					         if ($row = mysqli_fetch_array ($r))
							    return $row['total'] ;}}}
							
					         return;}
				
		     ?>    
		  </div>
		   </div>  </div>
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


	 <div id="modal-wrapper" class="modal" >
  
    <form class="modal-content animate" action="delete.php" method="post" >
     <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
       <h3 style="text-align:center">Please enter your email and password</h3>
	 </div>
    
    <div class="container">
       <input type="email" placeholder="Enter Email" name="email1"id="emaillogin"> 
      <input type="password" placeholder="Enter Password" name="psw" id="passwordlogin">        
      <button type="submit">delete account</button> 
    </div>
  </form>
  
  </div>
</body>
</html>
	
	


	
	
	