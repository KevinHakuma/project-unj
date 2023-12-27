<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/auth.css">
</head>
<body>
  <header>
    <div class="container-head">
      <img class="logo" src="images/Logo UNJ.png" alt="">
      <p>UNIVERSITAS NEGERI JAKARTA</p>
    </div>
  </header>


  <div class="page">
    <div class="container">
      <div class="left"></div>
      <div class="right">
        <div class="form">
          <h3>User Login</h3>
          <input type="text" id="username" placeholder="username">
          <input type="password" id="password" placeholder="password">
          <div class="login__check">
               <div class="login__check-box">
                  <input type="checkbox" class="login__check-input" id="user-check">
                  <label for="user-check" class="login__check-label">Remember me</label>
               </div>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>
          <!-- <button class="btn-login" >Login</button>  -->
          <a href="dashboard.php" class="btn-login">Login</a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/auth.js"></script>
</body>
</html>