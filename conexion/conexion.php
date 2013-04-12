<?php
function conectar()
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("fundacite");
}

function desconectar()
{
	mysql_close();
}
?>