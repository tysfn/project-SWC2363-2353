<?php include ('config.php') ?>

<header class="header">

   <div class="flex">

      <nav class="navbar">
         <a href="Dream.php" class="logo" style="width: 50%;">Dream</a>
         <a href="Dream.php">Home</a>
         <a href="products.php">Products</a>
         <a href="dreamorder.php">Order</a>
         <a href="contactdream.php">Contact</a>
         <a href="Dream Account.php">Account</a>
         <a href="./multi_login/login.php">Login</a>

      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart" style="color:green;">Cart<span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>