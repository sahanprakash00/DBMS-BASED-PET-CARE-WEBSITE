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
    <title>Paw Paw - Contact us page </title>
</head>
<body>
    <?php include 'component/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Contact Us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/Contact us</span>
        </div>
        <div class="form-container"> 
            <form method="post">
                <div class="title">
                    
                    <h1>leave a message</h1>
                </div>
                <div class="input-field">
                    <p>your name :<sup>*</sup></p><div class ="box"></div> 
                    <input type="text" name="name">
                </div>
                <div class="input-field">
                    <p>your email : <sup>*</sup></p><div class ="box"></div>  
                    <input type="email" name="email">
                </div>
                <div class="input-field">
                    <p>your number: <sup>*</sup></p><div class ="box"></div>  
                    <input type="email" name="number"> 
                </div>
                <div class="input-field">
                    <p>your message: <sup>*</sup></p> 
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
            <!--<div class="address">
                <div class="title">
                    
                    <h1>contact detail</h1>
                </div>
                <div class="box container">
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <p>1092 Marigold Lane,Coral way</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>phone number</h4>
                            <p>8866889955</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <p>sahanaprakash713@gmail.com</p>
                        </div>
                    </div>-->
        </div><?php include 'component/footer.php'; ?>
    </div>
      
    
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src= "scrpt.js"></script>

    <?php include 'component/alert.php';?>
</body>
</html> 