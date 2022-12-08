<?php

session_start();

require 'connector.php';

if (isset($_POST['login-button'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $remember = $_POST['remember'];

   if ($remember == 1) {
      setcookie('username', $username, time() + 60 * 60 * 24 * 30, '/');
      setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
   } else {
      $remember = NULL;
   }

   $query_user = mysqli_query($connect, "SELECT * FROM `nft_acc` WHERE username='$username' && password='$password'");

   $result = mysqli_num_rows($query_user);

   if ($result == 1) {
      $_SESSION['username'] = $username;
      header('Location: ../index.php');
   }
} else if (isset($_POST['admin-button'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query_user = mysqli_query($connect, "SELECT * FROM `nft_acc` WHERE username='$username' && password='$password'");

   $result = mysqli_num_rows($query_user);

   if ($result == 1) {
      $_SESSION['username'] = $username;
      header('Location: ../index.php?page=admin');
   }
}
