<title>Video Lectures</title>

<?php
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



<div class="mid">
<p class="texttitle">Video Lectures</p>
</div>
