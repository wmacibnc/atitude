<?php
$servidor = "localhost";
$login = "root";
$senha = "root";
$base = "atitude";
mysql_connect($servidor,$login, $senha) or die("MySql Error!");
mysql_select_db($base) or die("Database Error!"); 
?>