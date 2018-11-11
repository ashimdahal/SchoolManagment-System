<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {


  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$phn = mysqli_real_escape_string($conn, $_POST['phn']);
$class= mysqli_real_escape_string($conn, $_POST['class']);
  //error handlers
  // check for empty things
  if (empty($first) || empty($last) || empty($uid) || empty($email) || empty($pwd)  || empty($phn) || empty($class) ) {
    header('Location: ../teachsignup.php?signup=empty');
    exit();
  }else {
    //check names are valid

    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
      header('Location: ../teachsignup.php?signup=invalid');
      exit();
    }else {
      // check for email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../teachsignup.php?signup=email');
        exit();
      }else {
        // password password srtlen
        if (strlen($pwd) < 6) {
          header('Location: ../teachsignup.php?signup=shortpass');
          exit();
        }else {
          if (!is_numeric($phn) && !is_numeric($class)) {
            header('Location: ../teachsignup.php?signup=notnum');
            exit();
          }else {

            if (!strlen($phn) == 10) {
              header('Location: ../teachsignup.php?signup=notphn');
              exit();
            }else {



          // check for username taken or not
          $sql = "SELECT * FROM `teachers.detail` where username='$uid'";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);

          if ($resultcheck > 0) {
            header('Location: ../teachsignup.php?signup=usernametaken');
            exit();

          }else {
            $sql = "SELECT * FROM `teachers.detail` where email='$email'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if ($resultcheck > 0) {
              header('Location: ../teachsignup.php?signup=emailtaken');
              exit();

            }else {


            // hashing the password
            $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
            // insert the fellow to the website..
            $ql = "INSERT INTO `teachers.detail`(`firstname`, `lastname`, `phone.number`, `username`, `password`, `assigned.class`,`email`) values ('$first', '$last', '$phn','$uid','$hashedpwd','$class','$email')";
            $result = mysqli_query($conn, $ql);

            header('Location: ../index.php?signup=success');
            exit();
          }
          }
        }
      }
        }
      }

    }

  }

}else {
  header('Loaction: ../signup.php');
  exit();
}
