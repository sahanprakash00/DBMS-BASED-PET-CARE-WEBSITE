<?php
include 'component/connection.php';

    if (isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
    
    ?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chartset="UTF-8">
        <meta name="viewport" content="width=device-width, initial=scale=1.0">
        <!--==== BoxIcon ====-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
    <title>Paw Paw - Link to Paradise </title>
</head>
<body>
    <?php include 'component/header.php'; ?>
    <div class="main">
        
        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class ="slide-detail">
                        <h1>Give your pet the ultimate treat today!</h1>
                        <p>Trust us with your furry friend's care.Your pet deservers the best care when you're away,and we're here to provide just that.
                        </p>
                        <a href = "services.php" class="btn">Book Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end------->
                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class ="slide-detail">
                        <h1>Give Your Pet A Vacation.!</h1>
                        <p>A luxury pet boarding, daycare, grooming, and pool center for your furry friends.
                        </p>
                        <a href = "services.php" class="btn">Book Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end---->
                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class ="slide-detail">
                        <h1>Give Your Pet A Vacation.!</h1>
                        <p>A luxury pet boarding, daycare, grooming, and pool center for your furry friends.
                        </p>
                        <a href = "services.php" class="btn">Book Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end---->
                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class ="slide-detail">
                        <h1>Give your pet the ultimate treat today!</h1>
                        <p>Trust us with your furry friend's care.Your pet deservers the best care when you're away,and we're here to provide just that.
                        </p>
                        <a href = "services.php" class="btn">Book Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end--->
                <div class="slider__slider slide5">
                    <div class="overlay"></div>
                    <div class ="slide-detail">
                        <h1>Give your pet the ultimate treat today!</h1>
                        <p>Trust us with your furry friend's care.Your pet deservers the best care when you're away,and we're here to provide just that.
                        </p>
                        <a href = "services.php" class="btn">Book Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!--slide end---->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <section class="container">

        </section>   
        <!----home slider end--->
        <!---services---start ------------>
        <section class = "services section-padding ">
            <div class="container">
                <div class="section-title">
                    <h2 class="title">Services</h2>
                    <p class="sub-title">What we provide</p>
                </div>
                <div class ="row">
                   <!-------services start----->
                    <div class="services-item">
                        <div class="img-box">
                            <img src="img/service/1.jpg" alt="img" width="100" height="100">
                        </div>
                        <div class="text">
                            <h3>Day out</h3>
                            <p>We offer a wide range of fun activities for your pet to play and 
                            socialize with other furry friends.</p>
                            <a href="services.php" class="btn">Book Now</a>
                        </div>
                    </div>
                    <!---services---end ------------>
                    <!-------services start----->
                    <div class="services-item">
                        <div class="img-box">
                            <img src="img/service/4.jpg" alt="img" width="100" height="100">
                        
                        </div>
                        <div class="text">
                            <h3>Pool Session</h3>
                            <p>Swim Sessions is one of our most popular services. Your 
                            pet will enjoy a refreshing swim session in our pool.</p>
                            <a href="services.php" class="btn">Book Now</a>
                        </div>
                    </div>
                    <!---services---end ------------>
                    <!-------services start----->
                    <div class="services-item">
                        <div class="img-box">
                            <img src="img/service/2.jpg" alt="img" width="100" height="100">
                        </div>
                        <div class="text">
                            <h3>Day Care Facility</h3>
                            <p>Paradise Day Care is the perfect solution for pet owners 
                            who can't spend the day with their furry friends.</p>
                            <a href="services.php" class="btn">Book Now</a>
                        </div>
                    </div>
                    <!---services---end ------------>
                    <!-------services start----->
                    <div class="services-item">
                        <div class="img-box">
                            <img src="img/service/3.jpg" alt="img" width="100" height="100">
                        </div>
                        <div class="text">
                            <h3>Grooming</h3>
                            <p>Our expert groomers use the latest techniques and tools to 
                            groom your pet and make them feel clean, comfortable and refreshed.</p>
                            <a href="services.php" class="btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---services---end ------------>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src ="img/background6.0.jpg" >
                    <span>Day Care Facility</span>
                    <h1>save up to 20% off</h1>
                    <p>Be a Regular member and get more offers</p>
                </div>
            </div>
        </section>
        <?php include 'component/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src= "scrpt.js"></script>

    <?php include 'component/alert.php';?>
</body>
</html> 