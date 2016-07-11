<?php
$servidor = "mysql.hostinger.com.br";
$login = "u458321513_atitu";
$senha = "Wesley@19";
$base = "u458321513_atitu";
mysql_connect($servidor,$login, $senha) or die("MySql Error!");
mysql_select_db($base) or die("Database Error!"); 
?>