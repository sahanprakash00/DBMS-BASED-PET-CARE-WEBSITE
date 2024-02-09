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
    <title>Paw Paw - About us page </title>
</head>
<body>
    <?php include 'component/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>About us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/about us</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/service/3.jpg">
                <div class="detail">
                    <span>service</span>
                    <h1>pool session</h1>
                    <a href="view_service.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/service/4.jpg">
                <div class="detail">
                    <span>service</span>
                    <h1>grooming</h1>
                    <a href="view_service.php"class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/service/2.jpg">
                <div class="detail">
                    <span>service</span>
                    <h1>day out</h1>
                    <a href="view_service.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/service/1.jpg">
                <div class="detail">
                    <span>service</span>
                    <h1>day care facility</h1>
                    <a href="view_service.php" class="btn">Book now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="img/logo.png" class="logo">
                <h1>why choose us</h1>
                <p>Your pet deserves the best care when you're away, and we're here to provide just that.
                </p>
            </div>
               <!-- <div class="container">
                    <div class="testimonial-item active">
                        <img src="img/t1.webp">
                        <h1>sara smith</h1>
                        <p>Paws Place is more than just a 
                        pet shop, it's a community of pet lovers who truly care about your pets.</p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/t2.jpg">
                        <h1>Alex Riley</h1>
                        <p>“I never have to worry about my fur baby when she's at paw place.
                        They take care of her like she is part of their family."</p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/t3.jpg">
                        <h1>Rosa Cary</h1>
                        <p>"My dog loves going to paw paw place.
                        She always comes back happy and refreshed from her pool session and grooming."</p>
                    </div>
                    <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                    <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
            </div>-->
        </section>
        <div class="about">
            <div class="row">
                <img src="img/about.jpg" width="300" height="300">
            </div>
            <div class="detail">
                <h1>visit our beautiful shop</h1>
                <p>Paw Paw pet care started as a community of like minded pet parents based in Bangalore who wanted better for their pets. After many bitter experiences, the realisation was clear that the pet services industry in India even in the urban centers was missing sensitization, expertise, empathy and saw pets purely as ‘cash cows’. 
                 They were far from providing a loving, stress free atmosphere. Pets were being held in caged environments, subjected to inexperienced carers and did not inspire any confidence. We knew that we had to step in and make a change.
                  The idea of Paw paw took root in our minds. This was followed by months  of rigorous research, phone calls, field trips, and thousands of detailed reviews on the pet care services industry in India. 
                  Finally, after two years of being in stealth mode serving private clientele, we’ve launched India’s largest pet care ecosystem that is cage-free, cruelty-free with verified pet sitters, boarders, walkers, trainers, groomers and other service providers that see pets as family!</p>
                </div>
            </div><?php include 'component/footer.php'; ?>
        </div>
        </section>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src= "scrpt.js"></script>

    <?php include 'component/alert.php';?>
</body>
</html> 