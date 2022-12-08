<?php

include 'connector.php';

if (isset($_POST['edit-nft'])) {
   $id = $_POST['id'];
   $name = $_POST['name'];
   $creator = $_POST['creator'];
   $owner = $_POST['owner'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   $foto_nft = $_FILES['foto_nft']['name'];
   $file_tmp = $_FILES['foto_nft']['tmp_name'];

   if ($file_tmp) {
      move_uploaded_file($file_tmp, '../assets/', $foto_nft);
      $query = mysqli_query($connect, "UPDATE nfts set name='$name', creator='$creator', owner='$owner', description='$description', price='$price', foto_nft='$foto_nft' WHERE id=$id");
   } else {
      $query = mysqli_query($connect, "UPDATE nfts set name='$name', creator='$creator', owner='$owner', description='$description', price='$price' WHERE id=$id");
   }

   header("Location: ../index.php?page=admin");
}
