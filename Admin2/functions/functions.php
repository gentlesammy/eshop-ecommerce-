<?php


  define('maindomain', 'localhost');
  //setting session ids
  function setSession($lifetime, $path, $domain, $secure, $httponly){
    session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);
    session_start();
  }

//sanitise input
 function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
