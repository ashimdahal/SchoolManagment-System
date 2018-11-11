<title>Upcomming events</title>
<?php
include '../fonts.php';
include_once '../head.php';
if (isset($_SESSION['uid'])) {
  include 'inheader.php';
  }else if (isset($_SESSION['id'])) {
  include 'inheader.php';
  }else {
  header('Location: ../index.php');
  exit();
}
include '../footer.php';
 ?>


<p class="texttitle">Upcomming Events</p>
