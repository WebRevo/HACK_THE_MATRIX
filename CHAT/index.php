<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>
  <link rel="stylesheet" href="/CHAT/style.css">
</head>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<link rel="stylesheet" href="/CHAT/style.css">
<?php include_once "header.php"; ?>
<body>
    <style>
        body{
            background-image: url('/CHAT/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
        <div class="wrapper">
          <section class="form signup">
            <header>Learn With Me</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
              <div class="error-text"></div>
              <div class="name-details">
                <div class="field input">
                  <label>First Name</label>
                  <input type="text" name="fname" value="First name" required>
                </div>
                <div class="field input">
                  <label>Last Name</label>
                  <input type="text" name="lname" value="Last name" required>
                </div>
              </div>
              <div class="field input">
                <label>Email Address</label>
                <input type="text" name="email" value="Enter your email" required>
              </div>
              <div class="field input">
                <label>Password</label>
                <input type="password" name="password" value="Enter new password" required>
                <i class="fas fa-eye"></i>
              </div>
              <div class="field image" id="hi">
                <label>Select Image</label>
                <input type="file" name="image" class="id" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
              </div>
              <div class="field button">
                <input type="submit" name="submit" value="Continue to Chat">
              </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
          </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
      
      </body>
      </html>
</body>
</html>