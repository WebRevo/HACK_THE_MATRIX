<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/SIGN_IN_AND SIGN_UP/index.css">
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
            <form action="php/login.php" method="post">
                <h3 class="name">Sign-In</h3>
                <?php if(isset($_GET['error'])){ ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $_GET['error']; ?>
                    </div>
                    <?php } ?>
             <br>
            <input 
            type="text" 
            value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>" 
            class="us" 
            name="uname"
            placeholder="User Name"> <br>
         <br>
            <input type="text" class="ps" name="pass" placeholder="Password"> <br>
            <button class="lo" type="submit">Sign-In</button><br>
            <p class="pd">Don't have an account?</p>
            </form>
        </div>
    </div>
    <p class="pd1">Don't have an account?<a href="index.php"><b>Sign-Up</b></a></p>
</body>
</html>