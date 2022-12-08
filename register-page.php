<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>
   <link rel="stylesheet" href="style/style-login.css">
   <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
   <div class="split left">
      <div class="logo-text"><img class="logo-img" src="assets/logo2.png" alt="logo1" width="35" height=auto>&emsp14;
         YungBenn</div>
      <div class="centered">
         <h3 class="welcome-text">Welcome</h3>
         <p class="child-text">Please enter your details, if you want to join with us!</p>
         <form name="register" method="POST" action="config/register.php">
            <div class="mb-3">
               <label for="username" class="form-label">Username</label>
               <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-4">
               <label for="no_hp" class="form-label">No. HP</label>
               <input type="text" class="form-control" id="no_hp" name="no_hp">
            </div>
            <div class="d-grid gap-2">
               <input type="submit" class="btn btn-dark mb-3" name="register-button" id="signup-button" value="Sign up">
            </div>
            <div class="mt-5" style="color: grey;">
               <center>
                  Already have an account? <a href="index.php?page=login"><span style="color: black; font-weight: 500;">Sign in</span></a>
               </center>
            </div>
         </form>
      </div>
      <div class="copyright">© YungBenn 2089</div>
   </div>

   <div class="split right">
      <div class="centered-right">
         <img src="assets/logo2-2.png" alt="logo" width="250px">
      </div>
   </div>>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
   </script>
</body>

</html>