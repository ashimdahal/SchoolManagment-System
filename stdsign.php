<?php
include "head.php";

 ?>
 <title>Students/Parents Registration</title>
<form class="signup-form" action="includes/stdsign.php" method="POST">
  <input type="text" name="fname" placeholder="First Name">
  <input type="text" name="sname" placeholder="Second Name">
  <input type="text" name="phn" placeholder="Phone Number">
  <input type="text" name="uid" placeholder="username">
  <input type="password" name="pwd" placeholder="Password">
  <button type="submit" name="submit" class=".btn">Register</button>
</form>
 <?php
include 'footer.php';
  ?>
