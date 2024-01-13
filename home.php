<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
  header('location:login.php');
}

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">

</head>

<body style="margin:0;">
  <style>
    body {
      margin-top: 0px;
      flex-flow: column;
      align-items: center;
      justify-content: center;
      gap: 5rem;
      background: url() no-repeat;
      background-size: 1300px;
    }
  </style>

  <?php include 'header.php'; ?>

  <section class="home">

    <div class="content">
      <h3>Hand Picked Book to your door</h3>
      <p>"Every corner of the bookstore, there is a treasure waiting for its finder."</p>
      <a href="about.php" class="white-btn">discover more</a>
    </div>

  </section>

  <section class="products">
    <h1 class="title">latest products</h1>

    <div class="box-container">
      <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `products2` LIMIT 6") or die('query failed');
      if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_products = mysqli_fetch_assoc($select_products)) {
      ?>
          <form action="" method="post" class="box">
            <img class="image" src="image/<?php echo $fetch_products['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_products['name']; ?></div>
            <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
            <input type="number" min="1" name="product_quantity" value="1" class="qty">
            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          </form>
      <?php
        }
      } else {
        echo '<p class="empty">no products added yet!</p>';
      }
      ?>
    </div>

    <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
    </div>

  </section>


  <section class="about-us">

    <div class="abt">

      <title>About Us</title>
      <style>
        /* Gaya CSS untuk container "About Us" */
        .about-us-container {
          background-color: #ccc;
          /* Warna hitam ungu */
          color: #333;
          /* Warna teks putih */
          padding: 50px;
          border-radius: 10px;
          font-size: 16.5px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
          align-items: center;
          /* Pusatkan elemen secara horizontal */
          display: flex;
          /* Menggunakan flexbox untuk mengatur tata letak */
          text-align: justify;
        }

        /* Gaya CSS untuk gambar "About Us" */
        .about-us-image {
          width: 200px;
          height: 200px;
          object-fit: cover;
          margin-right: 20px;
          /* Margin di sebelah kanan gambar */
        }

        /* Gaya CSS untuk paragraf "About Us" */
        .about-us-paragraph {
          text-align: justify;
          /* Rata kanan-kiri tulisan di dalam paragraf */
          margin-left: 10px;
          /* Margin di sebelah kiri paragraf */
        }
      </style>
    </div>

    <!-- Container "About Us" -->
    <div class="about-us-container">
      <!-- Gambar "About Us" -->
      <img class="about-us-image" src="https://i.pinimg.com/564x/38/f4/68/38f468bb88c729d3ac619f10bbfcb03c.jpg" alt="About Us Image">
      <div class="about-us-content">
        <h3>About Us</h3>
        <p>Selamat datang di tempat di mana petualangan literasi dimulai! </p>
        <p> Jangan lewatkan kesempatan untuk menjelajahi dunia literasi tanpa batas. Apa pun yang Anda cari, pasti kami miliki!</p>
        <a href="about.php" class="btn">read more</a>
      </div>
    </div>

  </section>

  <section class="home-contact">

    <div class="content">
      <h3>have any questions?</h3>
      <p></p>
      <a href="contact.php" class="white-btn">contact us</a>
    </div>

  </section>






  <?php include 'footer.php'; ?>

  <!-- custom js file link  -->
  <script src="script.js"></script>

</body>

</html>