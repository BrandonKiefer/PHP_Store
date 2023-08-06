<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object-oriented PHP login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="menu-links">
            <h3>Brandon Kiefer</h3>
            <ul class="main-menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>
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