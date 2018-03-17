<?php
	session_start();
	ob_start();
	$sql = mysql_connect('localhost', 'root','') or die(mysql_error());
	$db = mysql_select_db('d') or die(mysql_error());

?>