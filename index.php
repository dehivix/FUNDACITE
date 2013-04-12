<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<title>.:::FUNDACITE GUARICO:::.</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/page.css" type="text/css" media="screen" /> 
       
    <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script language=JavaScript>

<!--

function inhabilitar(){
	
    alert ("Esta función está Desabilitada.")
    return false
}

document.oncontextmenu=inhabilitar

// -->
</script> 
    <script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
    
	<script src="js/jquery.anythingslider.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
    
        function formatText(index, panel) {
		  return index + "";
	    }
    
        $(function () {
        
            $('.anythingSlider').anythingSlider({
                easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
                autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
                delay: 3000,                    // How long between slide transitions in AutoPlay mode
                startStopped: false,            // If autoPlay is on, this can force it to start stopped
                animationTime: 600,             // How long the slide transition takes
                hashTags: true,                 // Should links change the hashtag in the URL?
                buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
        		pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
        		startText: "Ver",             // Start text
		        stopText: "Parar",               // Stop text
		        navigationFormatter: formatText       // Details at the top of the file on this use (advanced use)
            });
            
            $("#slide-jump").click(function(){
                $('.anythingSlider').anythingSlider(6);
            });
            
        });
    </script>

<!--  STEP TWO: configure SWFObject JavaScript and embed CU3ER slider -->
<script type="text/javascript">
<!--//---------------------------------+
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use
// --------------------------------->
$(document).ready(function()
{
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(images/down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(images/left.png)"});
	});
	//slides the element with class "menu_body" when mouse is over the paragraph
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({backgroundImage:"url(images/down.png)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({backgroundImage:"url(images/left.png)"});
	});
});
</script>


</head>
<body>

<div id="main_container">
	<div id="header">
<img src="images/logo-gob.png" width="901" height="87" />
	</div>    
<div id="main_content"> 
            <div id="menu_tab">
                    <ul class="menu">
                         <li><a href="index.html" class="nav_selected"> Inicio </a></li>						 
						 <li><a href="login/login.php" class="nav"> Entrar al Sistema</a></li>
                         <li><a href="services.html" class="nav"> news</a></li>
                         <li><a href="contact.html" class="nav"> contact us </a></li>

                    </ul>
                  </div>
            
             <div id="middle_content">
             <br />
      <div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
               <li>
                    <img src="images/venezuela/canaima.jpg" alt="" />
               </li>

              <li>
                 <img src="images/venezuela/amazonas.jpg" alt="" />
              </li>
              <li>
                 <img src="images/venezuela/guacamaya.jpg" alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/juan.jpg"alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/llovisna.jpg" alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/salto angel.jpg" alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/san juan.jpg" alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/satelite.jpg" alt=""  />
              </li>
              <li>
                 <img src="images/venezuela/atardecer.jpg" alt=""  />
              </li>
              
              <li>
                 <div id="quoteSlide">
                 
                    <blockquote> Guárico es prácticamente la puerta de entrada a los Llanos Centrales, Zona Cálida, hospitalaria, heroica y trabajadora. El Estado Guarico está limitada por el Norte con el Estado Miranda, Aragua y Carabobo, hacia el Sur con Bolívar y Apure, por el Este con Anzoátegui por el Oeste con los Estados Cojedes y Barinas. </blockquote>
                                     
                 </div>
              </li>
            </ul>        
          </div>
          
        </div> <!-- END AnythingSlider -->
            
                  
            </div>
            <img src="images/bannersatelite.png" width="901">
            
            
            <div id="center_content">
       	  <div class="left_content">
                    <div class="center_text">
                                <h2>Bienvenido a Fundacite Gu&aacute;rico</h2>
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </div>
                    
                    
                     <div class="center_text">
                                <h2>About Us</h2>
                     <img src="images/location.gif" width="142" height="107" class="img_left" />
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    </div>
                    
                    
                    
                </div> <!-- end of left_content -->
            
 
 
             	<div class="right_content">
					 <div class="center_text">
                     
                     
                     <h2>Listados de cursos</h2>
                     <div class="news_tab">
                    <div style="float:left" > <!--This is the first division of left-->

  <div id="firstpane" class="menu_list"> <!--Code for menu starts here-->
		<p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Principios de Software Libre y Modelos de calidad</font></p>
		<div class="menu_body">
		<a href="#">Ingenenieria de sofware Libre</a>
         <a href="#">CMMI</a>

		</div>
		<p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Herramientas para programaci&oacute;n Web</font></p>
		<div class="menu_body">
			<a href="#">PHP</a>
         <a href="#">WSDL</a>
         <a href="#">XHTML</a>
         <a href="#">XML</a>
         <a href="#">CSS</a>	
		</div>
		<p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Lenguaje de Aplicaciones</font></p>
		<div class="menu_body">
          <a href="#">PHYTHON</a>
         <a href="#">PERL</a>
         <a href="#">C++ / Lenguaje C</a>
         			
       </div>
       <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Manejadores de datos</font></p>
		<div class="menu_body">
          <a href="#">MYSQL</a>
         <a href="#">PostgreSQL</a>
         <a href="#">MAXDB</a>
         <a href="#">CVS</a>
         <a href="#">RCS</a>
         			
       </div>
       
       <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Desarrollo de Servicios Web</font></p>
		<div class="menu_body">
          <a href="#">JAVASCRIPT</a>
         <a href="#">CGI</a>
         <a href="#">AJAX</a>
         <a href="#">Seguridad para Desarrolladores</a>
       </div>
       
           <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Soporte T&eacute;cnico</font></p>
		<div class="menu_body">
          <a href="#">Software GNU/Linux</a>
       </div>
       
       <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> B&aacute;sico Administradores</font></p>
		<div class="menu_body">
          <a href="#">Administraci&oacute; Local</a>
         <a href="#">Implementaci&oacute;n de Redes</a>
       </div>
       
         <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Intermedio Administradores</font></p>
		<div class="menu_body">
          <a href="#">Instalaci&oacute;n de Aplicaciones y Servicios</a>
         <a href="#">Seguridad Administradores</a>
       </div>
       
       <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br /> Avanzado Administradores</font></p>
		<div class="menu_body">
         <a href="#">Administraci&oacute;n de Servidores</a>
       </div>
       
       <p class="menu_head"><font color="#FFFFFF">M&oacute;dulo:<br />Migraci&oacute;n y Est&aacute;ndares</font></p>
		<div class="menu_body">
          <a href="#">Est&aacute;ndares</a>
         <a href="#">Migraci&oacute;n y Consistencia</a>
       </div>
  </div>  <!--Code for menu ends here-->
</div>
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
    <div style="float:left; padding-top:10px;"> Dehivis Perez.&copy; All Rights Reserved 2008 - By </div><div style="float:left; padding-top:10px;"></div>
    </div>
    
    
    <ul class="footer_menu">
    	<li><a href="#" class="nav_footer">  inicio </a></li>
        <li><a href="#" class="nav_footer">  about </a></li>
        <li><a href="#" class="nav_footer">  sitemap </a></li>
        <li><a href="#" class="nav_footer">  contact </a></li>
    </ul>

</div>


</div>
<!-- end of main_container -->

</body>
</html>
