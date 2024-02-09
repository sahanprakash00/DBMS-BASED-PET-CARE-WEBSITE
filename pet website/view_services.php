<?php
include 'component/connection.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['logout'])) {
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==== BoxIcon ====-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Paw Paw - Services page</title>
</head>
<body>
    <?php include 'component/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Services</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/Provides</span>
        </div>
        <section class="services">
            <div class="box-container">
                <?php
                    $select_services = $conn->prepare("SELECT * FROM services");
                    $select_services->execute();
                    if ($select_services->rowCount() > 0) {
                        while ($fetch_services = $select_services->fetch(PDO::FETCH_ASSOC)) {
                ?>
                            <form action="" method="post" class="box">
                                <img src="image/<?= $fetch_services['image']; ?>" class="img">
                                <div class="button">
                                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                                    <a href="view_page.php?pid=<?= $fetch_services['id']; ?>" class="bx bxs-show"></a>
                                </div>
                                <h3 class="name"><?= $fetch_services['name']; ?></h3>
                                <input type="hidden" name="services_id" value="<?= $fetch_services['id']; ?>">
                                <div class="fles">
                                    <p class="price">price $<?= $fetch_services['price']; ?></p>  
                                </div>
                                <a hrefs="checkout.php?get_id=<?=$fetch_services['id'];?>" class="btn">Book Now</a>
                            
                            </form>
                            <?php
                                     }
                                    }
    
                ?>       
                        
            </div>
        </section>
        <?php include 'component/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scrpt.js"></script>
    <?php include 'component/alert.php'; ?>
</body>
</html>
