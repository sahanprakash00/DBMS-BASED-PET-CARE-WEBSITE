<?php include 'component/connection.php'?>
<?php 
   include 'component/header.php'; 
    
    if (isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    //register user
    if(isset($_POST['submit'])){
        $id = unique_id();
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $cpass = $_POST['password'];
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

        $select_user = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $select_user->execute([$email]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if($select_user->rowCount() > 0 ){
            $message[] = 'email already exist';
            echo 'email already exist';
        }else{
            if($password != $cpass){
                $message[] ='confirm your password';
                echo 'confirm your password';
            }else{
            $insert_user = $conn->prepare("INSERT INTO users(id,name,email,password) VALUES(?,?,?,?)");
            $insert_user->execute([$id,$name,$email,$password]);
            $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $select_user->execute([$email,$password]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            }if($select_user->rowCount()> 0){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
            }
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
        <title>For Booking -register now</title>
    </head>
    <body>
        <div class="main-container">
            <section class="form-container">
                <div class="title">
                    <img src = "img/reg.jpg" width="300" height="300">
                    <h1>Register Now</h1>
                    <p>A luxury pet boarding, daycare, grooming, and pool center for your furry friends.

                    </p>
                </div>
                <form action="" method="post">
                    <div class="input-field">
                        <p>Your Name<sup>*</sup></p>
                        <input type = "text" name="name" required placeholder="enter your name" maxlength="50">
                    </div>
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
                    <div class="input-field">
                        <p>Confirm Password<sup>*</sup></p>
                        <input type = "password" name="cpass" required placeholder="enter your password" maxlength="50"
                        oninput="this.value = this.value.replace(/\s/g, '')">
                    </div>
                    <input type="submit" name="submit" value="register now" class="btn">
                    <p> already have an account? <a href="login.php">login now</a></p>
                </form>
            </section>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scrpt.js"></script>
        <?php include 'component/alert.php';?>
    </body>
</html>


