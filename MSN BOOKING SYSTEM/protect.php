<?php

  session_start();

//checking if the session exists
//if the session is not set it redirects the user to the login form/page

  if(! isset($_SESSION["login"])){
      header("location:Login_v3/login.php");
  }

?>