<?php
include 'head.php';
 ?>
 <title>Student/Parent Login</title>
 <form class="down"action="includes/stdlogin.php" method="POST">
   <div class="login-box">
     <h1>Login</h1>
     <div class="textbox">
        <i class="fa fa-user"></i>
         <input type="text" name="suid" placeholder="username/email">
     </div>
     <div class="textbox">
       <i class="fa fa-lock"></i>
       <input type="password" name="spwd" placeholder="Password">
     </div>
     <button type="submit" name="submit" class="loggg">Log In  <i class="fas fa-sign-in-alt"></i></button>
      <p> <a href="stdsign.php">Dont have account? Create now.</a> </p>
   </div>

 </form>

 <?php
include "footer.php";
  ?>
