<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>REGISTER</title>
    <link rel="stylesheet" href="/SIGN_IN_AND SIGN_UP/index1.css">
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav class="nav">
            <ul>
                <li><a href="/MAIN PAGE/index.html">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="/NAVBAR/Nav.html"><i class="fa-solid fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <div class="contents">
            <form action="php/signup.php" method="post"  enctype="multipart/form-data">
			<h3 class="name">Sign-Up</h3>
			<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>
			<?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
             <br>
            <input type="text" placeholder="FullName" class="us" name="fname" value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>"> <br><br><br><br><br><br> 
         <input type="text" placeholder="Username" class="us1" name="uname" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>"> 
            <input type="text" value="Password" class="ps" name="pass"> 
            <button class="lo" type="submit">Sign-Up</button><br>
            <p class="pd">Don't have an account?</p>
			</form>
        </div>
    </div>
    <p class="pd1">Already Have an Account?<a href="login.php"><b>Sign-In</b></a></p>
</body>
</html>