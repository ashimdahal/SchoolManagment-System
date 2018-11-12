<?php
if (isset($_POST['delete'])) {
  include 'dbcon.php';
$cid = mysqli_real_escape_string($conn,$_POST['imgid']);
$sql = "DELETE FROM images WHERE imageid = $cid";
$result = mysqli_query($conn,$sql);
header('Location:../inside/gallery.php');
}
 ?>
