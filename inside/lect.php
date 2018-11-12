<title>Video Lectures</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

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

<?php
if (isset($_SESSION['uid'])) {
  include 'teachervideolesson.php';
}

include 'videolessons.php';

 ?>


</div>
