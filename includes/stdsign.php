<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {


  $first = mysqli_real_escape_string($conn, $_POST['fname']);
  $last = mysqli_real_escape_string($conn, $_POST['sname']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $phn = mysqli_real_escape_string($conn, $_POST['phn']);
  //error handlers
  // check for empty things
  if (empty($first) || empty($last) || empty($uid) || empty($pwd)  || empty($phn)) {
    header('Location: ../stdsign.php?signup=empty');
    exit();
  }else {
    //check names are valid

    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header('Location: ../stdsign.php?signup=invalid');
      exit();
    }else {
        // password password srtlen
        if (strlen($pwd) < 6) {
          header('Location: ../stdsign.php?signup=shortpass');
          exit();
        }else {
          if (!is_numeric($phn)) {
            header('Location: ../stdsign.php?signup=notnum');
            exit();
          }else {
            if (strlen($phn) != 10) {
              header('Location: ../stdsign.php?signup=notphn');
              exit();
            }else {
          // check for username taken or not
          $sql = "SELECT * FROM `std.parent` where username='$uid'";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);
          if ($resultcheck > 0) {
            header('Location: ../stdsign.php?signup=usernametaken');
            exit();
          }else {
            // hashing the password
            $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
            // insert the fellow to the website..
            $ql = "INSERT INTO `std.parent`(`firstname`, `lastname`, `phone.number`, `username`, `password`) values ('$first', '$last', '$phn','$uid','$hashedpwd')";
            $result = mysqli_query($conn, $ql);
            header('Location: ../stdlogin.php?signup=success');
            exit();
          }

        }
      }
    }
        }
    }
  }

else {
  header('Loaction: ../signup.php');
  exit();
}
