<?php	
	error_reporting(0);
    $connect = mysql_connect("localhost","root","") OR DIE("Falha ao conectar ao servidor");
    $db = mysql_select_db("digitalAgente", $connect) OR DIE ("Falha ao conectar ao DB");
?> 

