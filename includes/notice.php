<?php
session_start();
if (isset($_SESSION['uid'])) {
  include 'dbcon.php';
  $user = mysqli_real_escape_string($conn,$_POST['username']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);
  $notice = mysqli_real_escape_string($conn,$_POST['notice']);
  $sql = "INSERT INTO notices(insert_date, user, notice) VALUES ('$date','$user','$notice')";
  $result =$conn->query($sql);
  //La byee !
  header('Location:../inside/notice.php');
}else {
  echo'ehyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy';
}
/*
include 'dbcon.php';


  $sql  = "INSERT INTO `notices`( `date`, `issuer`, `notice`) VALUES ($date,$user,$notice)";
*/
