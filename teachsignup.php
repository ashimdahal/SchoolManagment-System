<?php
include  'head.php';
 ?>
     <title>Teacher Signup</title>
  <body>
    <section class="main-container">
<?php
    if ($_SESSION['uid']==5) {
      echo '<div class="wrapper-main">
        <h2>Sign up Form for teacher</h2>

        <form class="signup-form"action="includes/teachsignup.php" method="POST">
        <input type="text" name="first" placeholder="First Name"><br>
        <input type="text" name="last" placeholder="Last Name"><br>
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="password"><br>
        <input type="text" name="phn" placeholder="phone number"><br>
        <input type="text" name="class" placeholder="assigned class"><br>
        <button type="submit" name="submit">Register Now</button>
        </form>

      </div>
';
}else {
  echo "<h1>this page is not permitted to you</h1>";
}
?>

     </section>

     <?php
     include "footer.php";
      ?>
