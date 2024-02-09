<?php include 'component/connection.php'?>
<?php 
    include 'component/header.php'; 
    
    if (isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    //login user
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        

        $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ? ");
        $select_user->execute([$email,$password]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if($select_user->rowCount()> 0){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            header('location: home.php');
        }else{
            $message ='incorrect username or password';

        }

        

    }
?>

<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name = "viewport" content = "width-device-width, initial-scale=1.0">
        <title>For Booking -Login now</title>
    </head>
    <body>
        <div class="main-container">
            <section class="form-container">
                <div class="title">
                    <img src = "img/reg.jpg">
                    <h1>Login Now</h1>
                    <p>A luxury pet boarding, daycare, grooming, and pool center for your furry friends.

                    </p>
                </div>
                <form action="" method="post">
                    <div class="input-field">
                        <p>Email<sup>*</sup></p>
                        <input type = "email" name="email" required placeholder="enter your email" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <div class="input-field">
                        <p>Password<sup>*</sup></p>
                        <input type = "password" name="password" required placeholder="enter your password" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <input type="submit" name="submit" value="Login now" class="btn">
                </form>
            </section>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scrpt.js"></script>
        <?php include 'component/alert.php';?>
    </body>
</html>


