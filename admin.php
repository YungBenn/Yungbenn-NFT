<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>YungBenn - Admin</title>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style/style-admin.css">
   <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <style>
      body {
         background-color: #F8F9FD;
         font-family: 'Plus Jakarta Sans', sans-serif;
      }
   </style>
</head>

<body>
   <header>
      <nav>
         <div class="flex-header">
            <div class="logo-text"><img class="logo-img" src="assets/logo2.png" alt="logo1" width="35" height=auto>&emsp14; YungBenn</div>
            <div class="nav-content-center">
               <div class="nav-item"><a class="a" href="#top-nfts">Upload</a></div>
               <div class="nav-item"><a class="a" href="#feedback">Feedback</a></div>
            </div>
            <div class="nav-content-end">
               <div class="profile" data-bs-toggle="dropdown" aria-expanded="false">Admin</div>
               <ul class="dropdown-menu mt-2">
                  <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </header>

   <!-- Transaction -->

   <section id="top-nfts">
      <h3 class="top-nfts-header">Upload Details</h3>
      <div class="container-top-nfts">
         <table class="table">
            <thead>
               <tr>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;">Collection</th>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;">Creator</th>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;">Owner</th>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;">Price</th>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;">Blockchain Status</th>
                  <th style="padding-block: 20px; color: grey; font-weight: 500; font-size: 13px;" class="ps-5">Actions</th>
               </tr>
            </thead>
            <tbody>
               <?php

               include 'config/connector.php';

               $query = mysqli_query($connect, 'SELECT * FROM `nfts`');

               if ($query) {
                  while ($selects = mysqli_fetch_assoc($query)) {

               ?>
                     <tr>
                        <td class="table1 pe-5">
                           <div class="top-nfts">
                              <div>
                                 <img src='assets/<?php echo $selects['foto_nft']  ?>' class='iconDetails' style="margin-right: -5px;">
                              </div>
                              <div class="top-nfts-body" style='margin-left:60px;'>
                                 <h4 style="font-size: 20px; font-weight: 700;"><?php echo $selects['name']  ?></h4>
                              </div>
                           </div>
                        </td>
                        <td class="table1 pe-5">
                           <div class="top-volume">
                              @<?php echo $selects['creator']  ?>
                           </div>
                        </td>
                        <td class="table1 pe-5">
                           <div class="top-volume">
                              @<?php echo $selects['owner']  ?>
                           </div>
                        </td>
                        <td class="table1 pe-5">
                           <div class="top-volume">
                              <img src='assets/Ethereum-logo.png' class='eth-icon'>
                              <div style="font-weight: 700;"><?php echo $selects['price']  ?></div>
                           </div>
                        </td>
                        <td class="table1 pe-5">
                           <select class="form-select fw-bold" aria-label="Default select example">
                              <option value="1" style="font-weight: 700; color:red;" selected>Ongoing</option>
                              <option value="2" style="font-weight: 700; color:limegreen;">Done</option>
                           </select>
                        </td>
                        <td class="table1 ps-5">
                           <div class="top-volume">
                              <div class="actions">
                                 <a href="index.php?page=edit&id=<?= $selects['id'] ?>">
                                    <button class="btn btn-primary edit" style="font-size: 14px;">Edit</button>
                                 </a>
                                 <a href="config/delete.php?id=<?= $selects['id'] ?>">
                                    <button class="btn btn-danger delete" style="font-size: 14px;">Delete</button>
                                 </a>
                              </div>
                           </div>
                        </td>
                     </tr>
               <?php
                  }
               }
               ?>
            </tbody>
         </table>
         <div class="d-flex details-button">
            <div class="pb-4 total fw-bold">
               Total NFT: <?php echo mysqli_num_rows($query) ?>
            </div>
            <div class="add-button">
               <center>
                  <button class="top-nfts-button"><span style="font-size: 14px;"><a href="index.php?page=add" style="text-decoration:none; color:#F8F9FD">Add NFT</a></span></button>
               </center>
            </div>
         </div>
      </div>
   </section>

   <section id="feedback" class="mb-5">
      <center>
         <h3 class="how-header-text">Newest Feedback</h3>
      </center>
      <div class="container text-center">
         <div class="row">
            <div class="col">
               <div class="how-container" data-bs-toggle="modal" data-bs-target="#modal-upload">
                  <img src="assets/user1.png" alt="" width="45">
                  <h6 class="how-card-title"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  </h6>
                  <p class="how-card-p">This website is very good, I will definitely continue to use this marketplace
                  </p>
               </div>
            </div>
            <div class="col">
               <div class="how-container" data-bs-toggle="modal" data-bs-target="#modal-location">
                  <img src="assets/user2.png" alt="" width="45">
                  <h6 class="how-card-title"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                  <p class="how-card-p">I'm very satisfied with this marketplace, but it's a shame the features are
                     still few</p>
               </div>
            </div>
            <div class="col">
               <div class="how-container" data-bs-toggle="modal" data-bs-target="#modal-buy">
                  <img src="assets/user3.png" alt="" width="45">
                  <h6 class="how-card-title"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  </h6>
                  <p class="how-card-p">I can't believe it, an nft marketplace as good as this actually exists</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="modal fade" id="modal-upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload your NFT</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <center>
                  <iframe width="400" height="300" src="https://www.youtube.com/embed/_fWfPVL6wOA">
                  </iframe>
               </center>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modal-location" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Know our location</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <center>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3676193163437!2d106.79487331528546!3d-6.215154562607662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14bba661065%3A0x40c7383d6eb0bab5!2sHotel%20Mulia%20Senayan%20Jakarta!5e0!3m2!1sen!2sid!4v1667234088883!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </center>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modal-buy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Buy your first NFT</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <center>
                  <iframe width="400" height="300" src="https://www.youtube.com/embed/pSMbt-2ls98">
                  </iframe>
               </center>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>

</body>

</html>