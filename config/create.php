<?php

include 'connector.php';
session_start();

if (isset($_POST['add-nft'])) {
   $name = $_POST['name'];
   $creator = $_POST['creator'];
   $owner = $_POST['owner'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   $foto_nft = $_FILES['foto_nft']['name'];
   $file_tmp = $_FILES['foto_nft']['tmp_name'];

   move_uploaded_file($file_tmp, '../assets/' . $foto_nft);
   $query = mysqli_query($connect, "INSERT INTO nfts(name, creator, owner, description, price, foto_nft) VALUES('$name', '$creator', '$owner', '$description', '$price', '$foto_nft')");

   if ($query) {
      // echo "<script>alert('Data telah ditambahkan')</script>";
      $_SESSION['eksekusi'] = 'Done';
      header("Location: ../index.php?page=admin");
   } else {
      // echo "<script>alert('Gagal ditambahkan')</script>";
      header("Location: ../index.php?page=admin");
   }
}
