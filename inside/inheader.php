<?php
if (isset($_SESSION['uid'])) {
echo '<form class="logg" action="../includes/logout.php" method="POST">
  <button type="submit" name="submit" class="btn">Log out  <i class="fas fa-sign-out-alt"></i></button>
</form>
<div id="mySidenav" class="sidenav">
  <a href="../index.php">Home</a>
  <a href="notice.php">Notices</a>
  <a href="lect.php">Video Lectures</a>
  <a href="event.php">UpcommingEvents</a>
  <a href="gallery.php">Gallery</a>
  <a href="attend.php">Attendance</a>

</div>';
if ($_SESSION['uid']==5) {

  echo '<div class="con">
    <a href="../teachsignup.php">Register a  new teacher</a>
  </div>';
}
}elseif (isset($_SESSION['id'])) {
  echo '<form class="logg" action="../includes/logout.php" method="POST">
    <button type="submit" name="submit" class="btn">Log out <i class="fas fa-sign-out-alt"></i></button>
  </form>
  <div id="mySidenav" class="sidenav">
    <a href="../index.php">Home</a>
    <a href="notice.php">Notices</a>
    <a href="lect.php">Video Lectures</a>
    <a href="event.php">UpcommingEvents</a>
    <a href="gallery.php">Gallery</a>
    <a href="attend.php">Attendance</a>

  </div>';
}

else {
  header('Location:.../index.php');
}
 ?>


<link rel="stylesheet" type="text/css" href="../css/mainpage.css">
<link rel='shortcut icon' href='https://lh3.googleusercontent.com/7TEMGSYMfOCJdVYM9iNye4w0YP28ODGo3y6soNQB0sGRfFrtmP1EClvIS3TBU6qWYng=s180'/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
