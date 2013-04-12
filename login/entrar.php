<?php
session_start();
include('../conexion/conexion.php');

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$boton=$_POST['boton'];

if($boton=='Enviar'){
if (ereg("^[a-zA0-Z9]+$",$usuario)) { 
conectar();
$sql=mysql_query("SELECT *FROM admin WHERE usuario='$usuario' AND clave='$clave'");
desconectar();

		if(mysql_num_rows($sql)>0){

      				$registro=mysql_fetch_array($sql);
      					//variables de control de sección
      						$_SESSION['activa']=1;
      						$_SESSION['completo']=$registro[2].", ".$registro[1];
     						 ?>
      						<script>
          					alert('Bienvenido al sistema')
          					window.location='../public/index.php'

      						</script>
      						<?
		}else{
			
			?>

  <script>
          alert('Tus datos no coiciden o no tienes permisos de administrador')
          window.location='login.php'

      </script>

  <?

		}//fin de if de mysql_num_rows

} else {
	
	
?>
      <script>
          alert('Error solo se permite Caracteres Alfanumerico')
          window.location='login.php'

      </script>
      <?
	
	
	
	}	
	
	
	
}


?>
