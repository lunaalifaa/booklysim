<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="index.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
      <img src="https://static.cdntap.com/tap-assets-prod/wp-content/uploads/sites/24/2022/01/perpustakaan-di-jakarta.jpg" alt="">
      </div>

      <div class="content">
         <p>Selamat datang di Bookly!  </p>
         <p>Kami adalah website bookstore online yang menyediakan buku-buku lengkap dari berbagai genre. 
            Jangan lewatkan kesempatan untuk menjelajahi dunia literasi tanpa batas. 
            Ciptakan petualangan literasi Anda sekarang. Apa pun yang Anda cari, pasti kami miliki!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://i.pinimg.com/564x/b4/12/54/b41254a3469968e0affb7748b46a37e3.jpg" alt="">
         <p>Saya sangat senang berbelanja di Bookly. Mereka tidak hanya menyediakan buku berkualitas, tetapi juga layanan istimewa. Terima kasih Bookly, karena membuat pengalaman membaca saya lebih berwarna!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rido</h3>
      </div>

      <div class="box">
         <img src="https://i.pinimg.com/564x/b0/ad/68/b0ad68bbd07c6ca7aa9d2efbf8cc033c.jpg" alt="">
         <p>Navigasi situs ini sangat mudah dipahami, dan saya dengan cepat menemukan apa yang saya cari. Katalog buku yang lengkap memudahkan saya menemukan buku-buku favorit saya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Revana</h3>
      </div>

      <div class="box">
         <img src="https://i.pinimg.com/564x/d1/4a/93/d14a93282fcf4ad4c4838ec2414b3eb6.jpg" alt="">
         <p>Bookly benar-benar memanjakan pecinta buku dengan beragam pilihan dari berbagai genre. Saya menemukan buku-buku terbaru dan beberapa karya klasik yang selalu saya cari. Katalog mereka benar-benar lengkap!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jamal</h3>
      </div>

      <div class="box">
         <img src="https://i.pinimg.com/564x/53/2a/00/532a008c33c23137ed796b9e3d01459b.jpg" alt="">
         <p>Desain situs yang menarik membuat pengalaman belanja saya menjadi lebih menyenangkan. Tata letak yang rapi dan intuitif membuat proses pembelian menjadi lebih mudah dan lancar. Thanks Bookly!  </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jihan</h3>
      </div>

      <div class="box">
         <img src="https://i.pinimg.com/564x/55/62/fb/5562fb835d1de1ea974bdf0039726208.jpg" alt="">
         <p>Buku-buku yang saya pesan tiba dengan sangat baik dan rapi. Pengemasannya memberikan perlindungan yang baik terhadap benturan dan kerusakan. Ini menunjukkan perhatian dan komitmen Bookly terhadap kualitas pengiriman.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Haidar</h3>
      </div>

      <div class="box">
         <img src="https://i.pinimg.com/564x/d9/da/3f/d9da3ff78e7e27f6f7d894e2eac06ef5.jpg" alt="">
         <p>Proses pembelian sangat sederhana dan cepat. Saya sangat menghargai tampilan checkout yang bersih dan intuitif. Selain itu, opsi pembayaran yang beragam membuatnya sangat fleksibel bagi pelanggan!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Keysha</h3>
      </div>

   </div>

</section>

<div id="our-team-section">
<br><br>



<h1 class="judul-about-us" style="color:#37898;margin-top: -10px;font-size :37px;text-align:center;">Our Team</h1>

<p style="text-align:center; color:#123C69; font-size :15px;">Luna Citra Alifa adalah mahasiswa Universitas Diponegoro program studi Statistika Fakultas Sains dan Matematik</p>
<section class="about-us">


      <div id="our-team-section">
        <br><br>
        <section class="about-us">
          <div class="card" style="padding-bottom: 5px;">
            <img src="image/luna.jpg" alt="Nama Kelima">
            <h2>Luna Citra Alifa</h2>
            <h3>24050122130080</h3>
          </div>
        </section>
        <style>
           main {
    margin-bottom: 25%;
  }

  .about-us {
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    padding: 20px;
  }

  .card {
    width: 200px;
    height: 325px;
    background-color: #f5f5f5;
    padding: 10px;
    margin: 5px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .card img {
    width: 100%;
    height:61.5%;
    border-radius: 10px;
    margin-bottom: 10px;
  }
  </style>
      </div>
    </div>
  </main>



    
    


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>