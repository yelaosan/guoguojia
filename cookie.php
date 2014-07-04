<?php 
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	setcookie('username','123',time()+(60*60*24*30));
//	echo $_COOKIE['username'];
?>