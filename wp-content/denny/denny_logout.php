<?php
session_start();
if(session_destroy())
  {
    header("Location: denny_login.php");
  }
?>