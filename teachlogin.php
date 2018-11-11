<?php
include  'head.php';
 ?>
    <title>Teacher login</title>

  <body>

<section class="body">
  <form action="includes/teachlogin.php" method="POST">

<div class="login-box">
<h1>login</h1><br>
  <div class="textbox">
    <i class="fa fa-user"></i>
    <input type="text" name="uid" placeholder="Username/E-mail">
  </div>
  <div class="textbox">
      <i class="fa fa-lock"></i>
    <input type="password" name="pwd" placeholder="Password">
  </div>

  <button type="submit"class="btn" name="submit">Log In  <i class="fas fa-sign-in-alt fa-1.2g"></i></button>

      </div>
</form>
</section>


<?php
include "footer.php";
 ?>
