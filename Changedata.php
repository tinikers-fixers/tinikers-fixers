 <?php
		 if ( isset ($_POST['save'])){
			ini_set ('display_errors', 1);
               error_reporting (E_ALL & ~E_NOTICE);
               // Attempt to connect to MySQL and print out messages.
			   session_start();
			     $_SESSION['changdata'];
			    if ($dbc = @mysqli_connect ('localhost', 'root', '2181894805')) {	
				
               if (@mysqli_select_db ($dbc,'tinkers_fixers')){
                if($_POST['oldpass'] &&$_POST['psw1']&&$_POST['psw3'] ){
					$query="select pasw FROM members WHERE user_id='{$_GET['id']}'";
					$r=mysqli_query ($dbc, $query);
					$row = mysqli_fetch_array ($r);
					 if (strcmp($row['pasw'],$_POST['oldpass'])==0){
						if(strcmp($_POST['psw1'],$_POST['psw3'])==0){
						 $query = "UPDATE members SET user_name='{$_POST['user_name']}',  email='{$_POST['email']}',pasw='{$_POST['psw1']}', phone='{$_POST['phone']}' WHERE user_id='{$_GET['id']}'" ;	
						 mysqli_query ($dbc, $query);
				        $_SESSION['username']=$_POST['user_name'];
				     echo("<meta http-equiv='refresh' content='0'>");
						}
						else { $_SESSION['changdata']=1; }
						echo"<script> editaccont(); </script>";
						//trigger_error("Value must be 1 or below");
					 }
					 else $_SESSION['changdata']=2;
				}			   
              else
			  { $query = "UPDATE members SET  user_name='{$_POST['user_name']}',  email='{$_POST['email']}', phone='{$_POST['phone']}'  WHERE user_id='{$_GET['id']}'";
		        mysqli_query ($dbc, $query);  
				 echo"<script>document.getElementById('modal-wrapperf').style.display='block'; </script>";
				 $_SESSION['changdata']=0;
				 $_SESSION['username']=$_POST['user_name'];
				//echo("<meta http-equiv='refresh' content='0'>");
   				 }
				  header("Location: {$_SERVER['HTTP_REFERER']}");
           	  
			  // print  mysqli_query ($dbc, $query);
			 
             	
              // Report on the result.
			   } 
			   
			   }
		 }
		 
		 ?>