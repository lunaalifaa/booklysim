<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users2` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
      // Membuat prepared statement
         $stmt = mysqli_prepare($conn, "INSERT INTO `users2` (name, email, password, user_type) VALUES (?, ?, ?, ?)");

      // Mengikat parameter ke statement
         mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $cpass, $user_type);

      // Eksekusi statement
      if (mysqli_stmt_execute($stmt)) {
           $message[] = 'Registered successfully!';
      } else {
    $message[] = 'Registration failed: ' . mysqli_error($conn);
      }

      // Tutup statement
      mysqli_stmt_close($stmt);
      header('location:login.php');
      }
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

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

<div class="form-container">

    <form action="" method="post">
         <h3>register now</h3>
        <input type="text" name="name" placeholder="enter your name" required class="box">
        <input type="email" name="email" placeholder="enter your email" required class="box">
        <input type="password" name="password" placeholder="enter your password" required class="box">
        <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
        <select name="user_type" class="box">
             <option value="user">user</option>
             <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="btn">
        <p>already have an account? <a href="login.php">login now</a></p>
   </form>
<style>
    body {
    margin: -100;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(
        to bottom right,
        rgba(232, 98, 164, 0.4) 40%,  /* Warna pink keunguan dengan tingkat kejelasan 40% */
    rgba(232, 98, 164, 0)        /* Warna pink keunguan dengan tingkat kejelasan 0% */
    );
    }
</style> 

</div>

</body>
</html>