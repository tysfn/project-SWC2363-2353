<?php @include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dream Contact</title>

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
        

        <body>

            <section class="contact">
                <div class="contactus">

                
                <h1>Have a question? Go ahead</h1>
                <form method="post" action="contactus.php">
                    <table align="center">
                        <tr>
                            <td width="150">Name:</td>
                            <td width="150"><input type="text" id="name" name="name" size="30" value=""></td>
                            
                        </tr>
            
                        <tr>
                            <td width="150"><label for="email">Email:</label></td>
                            <td width="150"><input type="email" id="email" name="email"></td>
                        </tr>
            
                        <tr>
                            <td width="150">Question:</h2></td>
                            <td width="150"><textarea name="message" row="30" cols="30"></textarea></td>
                        </tr>
            
                        <tr>
                            <td width="104"><input type="submit" name="submitBtn" value="Submit"></td>
                            <td width="350"><input type="reset" name="resetBtn" value="Clear"></td>
                        </tr>

                        <tr>
                            <td width="104"></td>
                        </tr>
            
                </table>
                </form>
                </div>
        </section>
        
            <br><br>

            <div class="google-map">
                <h1>Our Shop Location:</h1><br>
                <div class="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.886762542358!2d101.73536217482794!3d3.1246348533031654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc374474dbfff9%3A0x56b3472b2d8897b!2sThe%20Sky%20Residensi!5e0!3m2!1sen!2smy!4v1699936239445!5m2!1sen!2smy" 
                    style="margin: 0 auto;" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
               </div>
        
        </body>

        <?php include('footer.php') ?>
</html>