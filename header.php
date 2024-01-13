<?php
include 'config.php';


if (!isset($user_id)) {
  header('location:login.php');
}
$user_id = $_SESSION['user_id'];

if (isset($_POST['add_to_cart'])) {
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];
  $product_name = $_POST['product_name'];

  $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart2` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

  if (mysqli_num_rows($check_cart_numbers) > 0) {
    $message[] = 'already added to cart!';
  } else {
    mysqli_query($conn, "INSERT INTO `cart2`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
    $message[] = 'product added to cart!';
  }
}
?>

<header class="header">

  <div class="header-1">
    <div class="flex">
      <div class="share">
        <a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/login" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/login/in" class="fab fa-linkedin"></a>
      </div>
      <p> <a href="login.php">Login</a> | <a href="register.php">Register</a> </p>
    </div>
  </div>

  <div class="header-2">
    <div class="flex flex-nav">
      <a href="home.php" class="logo">Bookly.</a>

      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="shop.php">shop</a>
        <a href="contact.php">contact</a>
        <a href="orders.php">orders</a>
      </nav>

      <div class="icon-login-wrapper">
      <div class="icons"onclick="showUserBox()">
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="search_page.php" class="fas fa-search"></a>
          <div id="user-btn" class="fas fa-user"></div>
          <?php
          $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart2` WHERE user_id = '$user_id'") or die('query failed');
          $cart_rows_number = mysqli_num_rows($select_cart_number);
          ?>
          <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
        </div>

        <style>
        /* Gaya CSS untuk icon user */
        .user-icon {
            cursor: pointer;
            font-size: 30px;
        }

        /* Gaya CSS untuk user box */
        .user-box 
         {
   position: absolute;
   top:100%; right:2rem;
   background-color: var(--white);
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   padding:2rem;
   text-align: center;
   font-size: 18px;
   width: 30rem;
   display: none;
   animation: fadeIn .2s linear;
}
        
    </style>
</head>
<body>


<!-- User Box -->
<a class="user-box" id="userBox">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <p href="logout.php" class="logout-btn">logout</p>
            <button onclick="hideUserBox()">Tutup</button>
</a>

<script>
    // Fungsi untuk menampilkan user box
    function showUserBox() {
        var userBox = document.getElementById('userBox');
        userBox.style.display = 'block';
    }

    // Fungsi untuk menyembunyikan user box
    function hideUserBox() {
        var userBox = document.getElementById('userBox');
        userBox.style.display = 'none';
    }
</script>
    </style>  

      </div>
    </div>
  </div>

</header>