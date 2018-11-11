<title>Important Notices</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
date_default_timezone_set('Asia/Kathmandu');


include '../head.php';

 ?>
<div class="mid">
<p class="texttitle">Notices</p>
<?php
if (isset($_SESSION['uid'])) {
include 'inheader.php';
include 'teachernotice.php';
}
else if (isset($_SESSION['id'])) {
include 'inheader.php';
  include 'stdnotice.php';
}else {
  header('Location: ../index.php');
  exit();
}

include '../footer.php';
 ?>
