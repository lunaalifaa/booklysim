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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">home</a>
         <a href="admin_products.php">products</a>
         <a href="admin_orders.php">orders</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">messages</a>
      </nav>

      <div class="icons">
            <a class="user-icon" onclick="showUserBox()">👤</a>
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
<div class="user-box" id="userBox">
            <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
            <button onclick="hideUserBox()">Tutup</button>
         </div>

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


      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
      </div>

   </div>

</header>