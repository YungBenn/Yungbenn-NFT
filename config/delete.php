<?php

include 'connector.php';

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   mysqli_query($connect, "DELETE FROM `nfts` WHERE id=$id");
   header("Location: ../index.php?page=admin");
}
