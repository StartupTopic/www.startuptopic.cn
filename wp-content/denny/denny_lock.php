<?php
session_start();

$user_check=$_SESSION['login_user'];

if(!isset($user_check))
{
  $_SESSION["originatingpage"] = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
  header("Location: denny_login.php");
}
?>