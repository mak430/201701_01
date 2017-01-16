<?php

$sessionvar = 'visitor_username';

function login() {
  if(empty($_POST['user'])) {
    return false;
  }
   
  if(empty($_POST['pass'])) {
    return false;
  }
   
  $username = trim($_POST['user']);
  $password = trim($_POST['pass']);
   
  if(!check_username_password_valid($username,$password)) {
    return false;
  }
   
  session_start();
   
  $_SESSION[$sessionvar] = $username;
   
  return true;
}

function check_username_password_valid($user, $pass) {
  if ($user == 'shop_1' && password_verify($pass, '$2y$10$Jbk0lCn4FwECKmDwPoso2uxHcfKnhAx4ntYGzZSkXGJw.XzHWCzNC')) {
    return true;
  } else if ($user == 'shop_2' && password_verify($pass, '$2y$10$HYvZ5znA8X4Nph97UaZQn.UIL5D/nPYY8fXNbbkn2c.9yj5lDaBym')) {
    return true;
  } else if ($user == 'shop_3' && password_verify($pass, '$2y$10$Lf6IC0NqWNUQQo344jFjteXozzz7zgLRb2ucQzn6t1r6H/DaYwTJu')) {
    return true;
  } else if ($user == 'shop_4' && password_verify($pass, '$2y$10$lDZQhEArJ.HIqeaWh.d.DOcLk/Z9dHMS7OnKr4V6S6HLyGN2O/bzC')) {
    return true;
  } else if ($user == 'shop_5' && password_verify($pass, '$2y$10$.OrtAmAP3N3yuuNUGFOW4eG9b3zyCCZPKCCExRmA3LEFO4DUBf13.')) {
    return true;
  }

  return false;
}

function check_login() {
  session_start();

  if(empty($_SESSION[$sessionvar])) {
    return false;
  }
  return true;
}

?>