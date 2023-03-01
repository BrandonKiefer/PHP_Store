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
        <div>
            <h3>Brandon Kiefer</h3>
            <ul class="main-menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php">PRODUCTS</a></li>
                <li><a href="index.php">WORK</a></li>
                <li><a href="index.php">MEMBERS+</a></li>
            </ul>
        </div>
        <ul class="menu-member">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php">HOME</a></li>
        </ul>
    </nav>
</header>

<section class="index-intro">
    <div class="index intro-bg">
        <div class="wrapper">
            <div class="index-intro-1">
                <div class="video"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aut optio doloribus, rem libero sunt velit commodi ipsa accusantium, numquam, enim atque iure id totam quam possimus labore laborum minima.</p>
            </div>
            <div class="index-intro-2">
                <h2>Web Developer<br>San Francisco, CA</h2>
            </div>
        </div>
    </div>
</section>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdRepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>

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
    </div>
</section>

</body>
</html>