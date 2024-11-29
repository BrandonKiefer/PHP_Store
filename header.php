<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiefer Studios</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>
<header>
    <nav>
        <div class="menu-links">
            <h3>Kiefer Studios</h3>
            <ul class="main-menu">
                <li><a href="index.php">HOME</a></li>
                <div class="dropdown">
                <li><a href="products.php">Artwork</a></button>
                <div class="dropdown-content">
    <a href="glass.php">Glass</a>
    <a href="#">Ceramics</a>
    <a href="#">Photography</a>
    <a href="video.php">Video</a>
  </div>
</div>
            </li>
                <li><a href="#">WORK</a></li>
                <li><a href="#">MEMBERS+</a></li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
                if(isset($_SESSION["userid"])){
                    ?>
                    <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php
                }else{
                    ?>
                        <li><a href="signup.php">SIGNUP</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                   
                    <?php
                }
            ?>
        </ul>
    </nav>
</header>