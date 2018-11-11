<?php
if (isset($_SESSION['id'])) {
echo'<form class="logg" action="includes/logout.php" method="POST">
  <button type="submit" name="submit" class="btn">Log out</button>
</form>
<div id="mySidenav" class="sidenav">
<a href="index.php">Home</a>
  <a href="inside/notice.php">Notices</a>
  <a href="inside/lect.php">Video Lectures</a>
  <a href="inside/event.php">UpcommingEvents</a>
  <a href="inside/gallery.php">Gallery</a>
  <a href="inside/attend.php">Attendance</a>

</div>';
}else {
  header('Location: ../index.php');
  exit();
}
 ?>
