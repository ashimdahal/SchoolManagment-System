<?php
if (isset($_POST['delete'])) {
  include 'dbcon.php';
$cid = mysqli_real_escape_string($conn,$_POST['commentid']);
$sql = "DELETE FROM notices WHERE COMMENTid = $cid";
$result = mysqli_query($conn,$sql);
header('Location:../inside/notice.php');
}
 ?>
