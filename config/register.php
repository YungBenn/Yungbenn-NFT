<?php

session_start();

require 'connector.php';

if (isset($_POST['register-button'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $no_hp = $_POST['no_hp'];
   $password = $_POST['password'];

   $query_user = mysqli_query($connect, "INSERT INTO nft_acc(username, email, no_hp, password) VALUES('$username', '$email', '$no_hp', '$password')");

   if ($query_user) {
      $_SESSION['username'] = $username;
      header("Location: ../index.php?page=login");
   }
}
