<?php @include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dream Order</title>

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
    <br><br><br>

        <h2 style="text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 28px" >Your <span>Order</span></h2>
        <br>
        <div class="order">
          
            <div class="card">
                <br>
                <img src="https://i.pinimg.com/564x/a7/d6/5f/a7d65ffd0f9a896ce417b6b63e4bbb44.jpg" style="width: 100%;">
                <h1>To check your order location please click here:</h1><br>
                <h1><a href="https://www.jtexpress.my/tracking" class="main-btn"><i class='bx bx-package'></i> Click Here <i class='bx bx-chevron-right' ></i></a></h1><br>
            </div>
        </div>

    </body>
    <?php include('footer.php') ?>
</html>