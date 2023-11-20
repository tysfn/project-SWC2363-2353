<?php 
include('./multi_login/functions.php');

if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
}

if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <style>
        .header {
                background: #003366;
        }
        button[name=register_btn] {
                background: #003366;
        }
        </style>
</head>
<body>
        <div class="header">
                <h2>Admin - Home Page</h2>
        </div>
        <div class="content">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                                <h3>
                                        <?php 
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>

                
        </div>
        <?php include ('admin.php') ?>
</body>
</html>