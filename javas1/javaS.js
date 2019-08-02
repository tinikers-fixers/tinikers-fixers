// شغل بسمة
/// About us W3SHCOOL.COM 
var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
 
  slides[slideIndex-1].style.display = "block";  

}
// If user clicks anywhere outside of the modal, Modal will close
/*login */
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal = document.getElementById('modal2');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('modal3');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// join us check password
function checkForm()
  { var x = document.getElementById("pasword1").value;
   var y = document.getElementById("pasword2").value;
   if(x == y){return true;}
    
    return false;
  }
  
//التحقق من الايميل  او الجوال 
function checkemailpassword(){
	var phone=document.getElementById("phone").value;
	var email=document.getElementById("email").value;
	var popupphone=document.getElementById("myPopup");
	var popupemailandphone=document.getElementById("myPopup1");
	document.getElementById("myPopup1").style.visibility="hidden";
	if (phone!==""){	
	  if ( phone.length ==13){
          var phones=phone.substring(0,4);
          var patt = new RegExp("+9665");
          if(patt.test(phones)){return true;} 
	      document.getElementById("phone").style.border="3px solid";
          document.getElementById("phone").style.borderColor = "#F5A9A9";
		  //w3schools
          popupphone.classList.toggle("show");
          return false ;	 
	    }
		document.getElementById("phone").style.border="3px solid";
	    document.getElementById("phone").style.borderColor = "#F5A9A9";
		//w3schools
        popupphone.classList.toggle("show");
		return false ;
	}
	else if((email!=="")){
	document.getElementById("myPopup1").style.visibility="hidden";
		 
		return true;}
	document.getElementById("phone").style.border="3px solid";
	document.getElementById("phone").style.borderColor = "#F5A9A9";
	document.getElementById("email").style.border="3px solid";
	document.getElementById("email").style.borderColor = "#F5A9A9";
	popupemailandphone.style.visibility="visible";
     
	return false ;
}
 // التحقق من الرقم السري 
/// join us
function chackpasword(){
	if(document.getElementById("psw1").value==document.getElementById("psw2").value){
		return true;
	}
var Popuppassword=document.getElementById("myPopuppas");
document.getElementById("psw2").style.border="3px solid";
document.getElementById("psw2").style.borderColor = "#F5A9A9";
//w3schools
 Popuppassword.classList.toggle("show");
return false;
}

function getCookie() {
   
    var email1 = "email1" + "=";
	var password="password"+"="
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(email1) == 0) {
         document.getElementById("emaillogin").value=c.substring(email1.length, c.length);
		
        }
		if (c.indexOf(password) == 0) {
         document.getElementById("passwordlogin").value=c.substring(password.length, c.length);
		
        }
    }
	
    
}


// شغل فايزة
// laptop-repair.html 
function flipconten1() {
    document.getElementById("HW").style.display = "block";
	document.getElementById("SW").style.display = "none";
	}
function flipconten2() {
    document.getElementById("SW").style.display = "block";
	document.getElementById("HW").style.display = "none";
    
}

// my accont فايزة 
function veiw(){
			document.getElementById("veiw").style.display ="block";
	        document.getElementById("edituserinfo").style.display ="none";
			document.getElementById("myquestions").style.display = "none";
		}
function editaccont(){
			document.getElementById("veiw").style.display ="none";
	        document.getElementById("edituserinfo").style.display ="block";
			document.getElementById("myquestions").style.display ="none";
		chpass();
		}
function myq(){
		    document.getElementById("veiw").style.display ="none";
	        document.getElementById("edituserinfo").style.display ="none";
			document.getElementById("myquestions").style.display ="block";
			
		}
function chpass(){
	document.getElementById("chpas").style.display ="block";
}
/*delete account */
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='my-account.php?delete_id='+id;
     }
}

//This Code is for The Tabs Effect
	
	function openPc(evt, pcName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace("active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(pcName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		
		function openPcCat(evt, pcHwType) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent1");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active1", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(pcHwType).style.display = "block";
			evt.currentTarget.className += " active1";
		}
///شغل امينة 
function selectdevis(myd){
	
	
   if( myd.id=="TOSHIBA"){
	document.getElementById("devicename").style.display ="block";
	document.getElementById("TOSHIBA").style.display ="block";  
    document.getElementById("DELL").style.display ="none";
    document.getElementById("HP").style.display ="none";
    document.getElementById("Mac").style.display ="none";
     document.getElementById("OTHER").style.display ="none";	
   }
   else if (myd.id=="DELL"){
	document.getElementById("devicename").style.display ="block";
	document.getElementById("DELL").style.display ="block"; 
    document.getElementById("TOSHIBA").style.display ="none";
    document.getElementById("HP").style.display ="none";
    document.getElementById("Mac").style.display ="none";
	document.getElementById("OTHER").style.display ="none";
   }
   else if (myd.id=="HP"){
	document.getElementById("devicename").style.display ="block";
    document.getElementById("HP").style.display ="block";
    document.getElementById("DELL").style.display ="none";
    document.getElementById("TOSHIBA").style.display ="none";
    document.getElementById("Mac").style.display ="none";
	document.getElementById("OTHER").style.display ="none";}
   else if (myd.id=="Mac"){
	document.getElementById("devicename").style.display ="block";
    document.getElementById("Mac").style.display ="block";
    document.getElementById("DELL").style.display ="none";
	document.getElementById("HP").style.display ="none";
    document.getElementById("TOSHIBA").style.display ="none";
	document.getElementById("OTHER").style.display ="none";}
	else if(myd.id=="OTHER"){
	 document.getElementById("devicename").style.display ="none";
	 document.getElementById("OTHERdevicename").style.display ="block";
	  document.getElementById("OTHER").style.display ="block";
	  document.getElementById("Mac").style.display ="none";
      document.getElementById("DELL").style.display ="none";
	  document.getElementById("HP").style.display ="none";
      document.getElementById("TOSHIBA").style.display ="none";	  
	}
}