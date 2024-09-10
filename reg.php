<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AUTO House Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="wrapper">
    <form class="card" action="register.php" method="post" enctype="multipart/form-data">
        <h1>Registration</h1>
         <div class="input-box">
            <input type="input" placeholder="Login" name='Login'required>
            <i class='bx bxs-user' ></i>
            </div>

            <div class="input-box">
            <input type="password" placeholder="Password" name='password' required>
            <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="input-box">
          <input type="input" placeholder="Name Surname" name='FamNa' required>
          <i class='bx bx-user'></i>
          </div>
          
            
            <button type="submit" class="btn" >Register</button>

            <div class="register-link">
              <p>Have an account? <a href="index.php">Login</a></p>
            </div>

      </form>
    </div>
 

 

  </body>
</html>
