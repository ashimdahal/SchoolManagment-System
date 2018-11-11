<?php

session_start();
include_once 'dbcon.php';
if (isset($_POST['submit'])) {


  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd =  mysqli_real_escape_string($conn, $_POST['pwd']);
  if (empty($uid) || empty($pwd)) {
     header('Location: ../teachlogin.php?login=empty');
     exit();
   }else {
     $sql = "SELECT * FROM `teachers.detail` where username='$uid' OR email='$uid'";
     $result = mysqli_query($conn,$sql);
     $check = mysqli_num_rows($result);
     if (!$check > 0) {
       header('Location: ../teachlogin.php?login=notfound');
       exit();
     }else {
       if ($row = mysqli_fetch_assoc($result)) {
         //password check
         $hashedpwdcheck = password_verify($pwd, $row['password']);
         if ($hashedpwdcheck == false) {
           // code...
           header('Location: ../teachlogin.php?login=notmatch');
           exit();
         }elseif ($hashedpwdcheck == true) {
           $_SESSION['uid'] = $row['ID'];
           $_SESSION['first'] = $row['firstname'];
           $_SESSION['last'] = $row['lastname'];
           $_SESSION['email'] = $row['email'];
           $_SESSION['user'] = $row['username'];
           $_SESSION['phn'] = $row['phone.number'];
           $_SESSION['class'] = $row['assigned.class'];
           header('Location: ../index.php');
           exit();
         }
       }
     }
   }
 }
