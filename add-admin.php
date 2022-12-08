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
               <div class="profile">Admin</div>
            </div>
         </div>
      </nav>
   </header>

   <div class="container mt-5">
      <form action="config/create.php" method="post" enctype="multipart/form-data">
         <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="name" name="name">
            </div>
         </div>
         <div class="row mb-3">
            <label for="creator" class="col-sm-2 col-form-label">Creator</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="creator" name="creator">
            </div>
         </div>
         <div class="row mb-3">
            <label for="owner" class="col-sm-2 col-form-label">Owner</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="owner" name="owner">
            </div>
         </div>
         <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
               <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="price" name="price">
            </div>
         </div>
         <div class="row mb-3">
            <label for="foto_nft" class="col-sm-2 col-form-label">NFT image</label>
            <div class="col-sm-10">
               <input class="form-control" type="file" id="foto_nft" name="foto_nft" accept="image/*">
            </div>
         </div>
         <div class="text-center mt-5">
            <input type="submit" name="add-nft" class="btn btn-primary py-2 px-5" value="Add">
         </div>
      </form>
   </div>

</body>

</html>