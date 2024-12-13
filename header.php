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
    <style>
@import url('https://fonts.googleapis.com/css2?family=Alatsi&family=Bungee+Outline&family=MuseoModerno:ital,wght@0,100..900;1,100..900&family=Permanent+Marker&family=Rancho&family=Rubik+Broken+Fax&family=Rubik+Dirt&family=Rubik+Lines&family=Rubik+Scribble&display=swap');
</style>
</head>
<body>
<header>
    <nav>
        <div class="menu-links">
            <h3>Kiefer Studios</h3>
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                <div class="dropdown">
                <li><a href="#">Artwork</a></button>
                <div class="dropdown-content">
    <a href="glass.php">Glass & Ceramics</a>
    <a href="photography.php">Photography</a>
    <a href="video.php">Video</a>
  </div>
</div>
            </li>
                <li><a href="about.php">About</a></li>
                <li><a href="https://www.brandonkiefer.net" target="_blank">Software Portfolio</a></li>
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
                        <li><a href="signup.php">Sign up</a></li>
                        <li><a href="login.php">Login</a></li>
                   
                    <?php
                }
            ?>
        </ul>
    </nav>
</header>