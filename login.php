<?php
require_once "header.php"
?>

<?php
    if(isset($_SESSION["userid"])){
        ?>
        <p><?php echo "You are already logged in as " . $_SESSION["useruid"]; ?></p>
        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
        
        <?php
            }else{
        ?>
<div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
        </div>
        <?php
            }
        ?>
