<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

Berhasil login pada page dengan session password. <a href="logout.php">Klik di Sini</a> untuk Logout.