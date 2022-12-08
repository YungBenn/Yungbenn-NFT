<link rel="stylesheet" href="style/style-home.css">

<body>
   <section id="explore">
      <center>
         <div>
            <h3 class="explore-header-text">Explore Marketplace</h3>
         </div>
         <div>
            <h4 class="explore-header-p">Discover the best nft collections in the world on our site</h4>
         </div>
         <div class="container text-center" id="list-nft">
            <?php

            include 'config/connector.php';

            $query = mysqli_query($connect, 'SELECT * FROM `nfts`');

            if ($query) {
               while ($selects = mysqli_fetch_assoc($query)) {

            ?>
                  <div class="col">
                     <a href="index.php?page=detail&id=<?php echo $selects['id'] ?>">
                        <div class=" container-listcard">
                           <div class="title-listcard">
                              <div class="left-listtitle">
                                 <div class="img-ylogo">
                                    <img src="assets/ylogo2.png" alt="ylogo">
                                 </div>
                                 <div class="nonft-list"><?php echo $selects['name']  ?></div>
                              </div>
                              <div class="acc-name-list">@<?php echo $selects['creator']  ?></div>
                           </div>
                           <div class="nft-img">
                              <img src="assets/<?php echo $selects['foto_nft']  ?>" alt="nft">
                           </div>
                           <div class="body1-list">
                              <div class="time-countdown-list">20h : 35m : 01s</div>
                              <div class="price-list"><?php echo $selects['price']  ?> ETH</div>
                           </div>
                           <div class="body2-list">
                              <div class="remaining-time-list">Remaining Time</div>
                              <div class="bid-list">Price</div>
                           </div>
                        </div>
                     </a>
                  </div>
            <?php
               }
            }
            ?>
         </div>
      </center>
   </section>

</body>

</html>