<?php

session_start();
include_once 'dbcon.php';
if (isset($_POST['submit'])) {


  $uid = mysqli_real_escape_string($conn, $_POST['suid']);
  $pwd =  mysqli_real_escape_string($conn, $_POST['spwd']);
  if (empty($uid) || empty($pwd)) {
     header('Location: ../stdlogin.php?login=empty');
     exit();
   }else {
     $sql = "SELECT * FROM `std.parent` where username='$uid' ";
     $result = mysqli_query($conn,$sql);
     $check = mysqli_num_rows($result);
     if (!$check > 0) {
       header('Location: ../stdlogin.php?login=notfound');
       exit();
     }else {
       if ($row = mysqli_fetch_assoc($result)) {
         //password check
         $hashedpwdcheck = password_verify($pwd, $row['password']);
         if ($hashedpwdcheck == false) {
           // code...
           header('Location: ../stdlogin.php?login=notmatch');
           exit();
         }elseif ($hashedpwdcheck == true) {
           $_SESSION['id'] = $row['sn'];
           $_SESSION['first'] = $row['firstname'];
           $_SESSION['last'] = $row['lastname'];

           $_SESSION['userid'] = $row['username'];
           $_SESSION['phn'] = $row['phone.number'];

           header('Location: ../index.php');
           exit();
         }
       }
     }
   }
 }
