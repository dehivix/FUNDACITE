<?php
session_start();
if($_SESSION['activa']!=1){
 ?>
 <script>
  alert('Debes iniciar la seccion');
  window.location='../login/login.php';

 </script>
 <?
  return;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::|SISTEMA DE INSCRIPCION|::.</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>

<div id="main_container">
	<div id="header">
<img src="../images/logo-gob.png" width="901" height="81" />
	</div>    
<div id="main_content"> 
            <div id="dolphincontainer">
			<div id="dolphinnav">
				<ul>
					<li><a href="#" class="current"><span>Inicio</span></a></li>
					<li><a href="#" ><span>Cursos</span></a></li>
					<li><a href="#"><span>Inscripciones</span></a></li>
					<li><a href="#"><span>Busqueda</span></a></li>
                    <li><a href="#"><span>Administrador</span></a></li>
					<li><a href="close/salida.php"><span>Cerrar sessi&oacute;n</span></a></li>
				</ul>
			</div>
		</div>
            
            
            <div id="middle_content_contact">
            
            <div class="middle_text">
            <h1>Contact Us</h1>
            “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
            
            
            </div>
            
            
            <div id="center_content">
            
                            
                <div class="wide_content_services">
                
                                <h2>Contact Us</h2>
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."               
                </div>
            
            
            	<div class="left_content">
                    <div class="center_text">
                                <h2>Contact Form</h2>
                                
                     <div class="contact_tab">
                            <div id="fields">
                                <label for="inputname">Name:</label>
                                <input type="text" name="Name" /><br />
                                <label for="inputmail">Email:</label>
                                <input type="text" name="email" /><br />
                                <label for="inputtelefon">Web:</label>
                                <input type="text" name="web" /><br />
                                <label for="inputmessage">Message:</label>
                                <textarea name="message" cols="28" rows="4"></textarea>
                            </div>
                            <div id="send">
                                <input type="image" src="images/send.gif" value="send" />
                            </div>
                    </div>
                    
                    
                    
               </div>
                    
                                      
                    
                    
                </div> <!-- end of left_content -->
            
 
 
             	<div class="right_content">
					 <div class="center_text">
                     
                     
                     <h2>Latest News</h2>
                   
					<div class="news_tab">
                    <img src="images/calendar.gif" width="50" height="50" border="0" class="img_left" />
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco."
                    </div>

					<div class="news_tab">
                    <img src="images/calendar.gif" width="50" height="50" border="0" class="img_left" />
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco."
                    </div>

					<div class="news_tab">
                    <img src="images/calendar.gif" width="50" height="50" border="0" class="img_left" />
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco."
                    </div>

					<div class="news_tab">
                    <img src="images/calendar.gif" width="50" height="50" border="0" class="img_left" />
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco."
                    </div>
                    
                    
                    </div>
                    

                    
                    
                    
                </div> <!-- end of right_content -->
                
                
                
                <div class="wide_content">
                
                	<div class="bottom_tab">                    
                    We provide best quality services
                    </div>
                    
                 	<div class="bottom_tab">                    
                    Customer support all year
                    </div>                   
                
                 	<div class="bottom_tab">                    
                    Discount off for low products
                    </div>               
                </div>
 
 
 
 
 
 
 
 
            
            
            </div>
            
            
 
	<div style="clear:both;"></div>
	</div>
    <!-- end of main_content -->
    
<div id="footer">

	<div id="copyright">
    <div style="float:left; padding:5px;"><a href="#"><img src="images/footer_logo.gif" width="30" height="25" alt="" title="" border="0" /></a></div>
    <div style="float:left; padding-top:10px;"> Company name.&copy; All Rights Reserved 2008 - By </div><div style="float:left; padding-top:10px;"><a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
    </div>
    
    
    <ul class="footer_menu">
    	<li><a href="#" class="nav_footer">  home </a></li>
        <li><a href="#" class="nav_footer">  about </a></li>
        <li><a href="#" class="nav_footer">  sitemap </a></li>
        <li><a href="#" class="nav_footer">  contact </a></li>
    </ul>

</div>


</div>
<!-- end of main_container -->

</body>
</html>