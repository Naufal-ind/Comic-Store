<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/naufal.indiarto.1" class="fab fa-facebook-f"></a>
            <a href="https://api.whatsapp.com/send/?phone=628985660144&text&type=phone_number&app_absent=0" class="fab fa-whatsapp"></a>
            <a href="https://www.instagram.com/naufal_indw" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/muhammad-naufal-indiarto-8912a8221/" class="fab fa-linkedin"></a>
         </div>
         <p>  <a href="login.php">Masuk</a> | <a href="register.php">Daftar</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">LN SHOP</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="shop.php">Produk</a>
            <a href="contact.php">Kontak</a>
            <a href="orders.php">Pesanan</a>
            
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>