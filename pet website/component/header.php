<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="img/logo.png"></a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="view_services.php">services</a>
            <a href="booking.php">Book</a>
            <a href="about.php">about us</a>
            <a href="contact.php">Contact us</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>UserName : <span><?php //echo $_SESSION['user_name']?></span></p>
            <p>Email : <span><?php //echo $_SESSION['user_email']?></span></p>
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>
</header>
