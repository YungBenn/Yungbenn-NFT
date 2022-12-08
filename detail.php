<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Buy</title>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon">
   <link rel="stylesheet" href="style/style-detail.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
   <style>
      body {
         background-color: #F8F9FD;
         font-family: 'Plus Jakarta Sans', sans-serif;
      }
   </style>
</head>

<body>

   <?php
   include 'config/connector.php';

   $id = $_GET['id'];

   $query = mysqli_query($connect, "SELECT * FROM `nfts` WHERE id='$id'");
   $selects = mysqli_fetch_assoc($query);

   ?>

   <div class="container detail-nft">
      <div class="row">
         <div class="col align-middle">
            <div>
               <div class="container-card">
                  <div class="title-card">
                     <div class="left-title">
                        <div class="img-ylogo">
                           <img src="assets/ylogo.png" alt="ylogo">
                        </div>
                        <div class="nonft">#7</div>
                     </div>
                     <div class="acc-name">@yungbenn_</div>
                  </div>
                  <div class="nft-img">
                     <img src="assets/<?php echo $selects['foto_nft'] ?>" alt="nft" width="485">
                  </div>
                  <div class="body1">
                     <div class="time-countdown">20h : 35m : 01s</div>
                     <div class="price"><?php echo $selects['price'] ?> ETH</div>
                  </div>
                  <div class="body2">
                     <div class="remaining-time">Remaining Time</div>
                     <div class="bid">Highest bid</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col mt-3" style="margin-left: -90px;">
            <h1 class="title">Phase 1 : <?php echo $selects['name'] ?></h1>
            <p class="fav">
               <span style="padding-right: 5px;"><i class="fa-regular fa-heart"></i></span>&emsp13;103&emsp13;favorites
            </p>
            <div>
               <p class="creator">CREATOR</p>
               <p class="creator-user"><span><img src="assets/user2.png" alt="" width="30"></span>&emsp13;
                  @<?php echo $selects['creator'] ?>&emsp13;</p>
            </div>
            <div>
               <p class="owner">OWNER</p>
               <p class="owner-user"><span><img src="assets/user3.png" alt="" width="30"></span>&emsp13;
                  @<?php echo $selects['owner'] ?>&emsp13;</p>
            </div>
            <div>
               <p class="desc">DESCRIPTION</p>
               <p class="desc-text"><?php echo $selects['description'] ?></p>
            </div>
            <div>
               <p class="desc">RESERVE PRICE</p>
               <p class="desc-text"><?php echo $selects['price'] ?> ETH</p>
            </div>
            <a href="index.php?page=checkout&id=<?php echo $selects['id'] ?>">
               <button class="buy-button">Buy now</button>
            </a>
         </div>
      </div>
   </div>

</body>

</html>