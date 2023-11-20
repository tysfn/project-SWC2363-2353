<?php 

include('multi_login/functions.php'); @include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dream Account</title>

        <link rel="stylesheet" href="dream.css">
        <link rel="stylesheet" href="./cart/css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    </head>
    <body>

    <?php include('header.php'); ?>

        <br><br><br><br><br>
            <div class="center-text">
                <h2>Your <span>Account</span></h2>
            </div>

        <div class="card">
            <br>
            <img src="pfp-icon.png" style="width: 50%;">
            <h1>Name: <?php echo $username; ?></h1>
            <h1>Email: <?php echo $email; ?></h1>
            <h1><i class='bx bxs-barcode'></i></h1>
            <a href="index.php?logout='1'" class="main-btn">Log Out<i class='bx bx-chevron-right' ></i></a>
            <br><br>
        </div>

        <?php
        // log user out if logout button clicked
        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['user']);
            header("location: multi_login/login.php");
        }
        ?>


        <?php include('footer.php') ?>
    </body>
</html>