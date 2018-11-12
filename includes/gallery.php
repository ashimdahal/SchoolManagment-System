<?php
if (isset($_POST['submit'])) {
  $newfilename=$_POST['filename'];

  $imageuploader = $_POST['user'];
  $imageevent = $_POST['event'];
  $imagedesc = $_POST['desc'];
  $file = $_FILES['file'];

  $filename = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileExt = explode(".", $filename);
  $fileRealExt = strtolower(end($fileExt));

  $allowed = array("jpg","jpeg","png","JPG");
  if (in_array($fileRealExt,$allowed)) {
    $imageFullName = $newfilename . "." . uniqid("", true) . "." . $fileRealExt;

    $imagedestination = "../uploads/image/" . $imageFullName;
    if (empty($imageevent) || empty($imagedesc)) {
      header('Location: ../inside/gallery.php?upload=empty');
      // code...
    }else {
      include 'dbcon.php';
      $sql = "SELECT * FROM images";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
            $resultCheck = mysqli_num_rows($result);
            $imageorder = $resultCheck + 1;

            $sql="INSERT INTO images(imageevent,imagedesc,uploader,orderid,imagename) VALUES(?,?,?,?,?)";
            mysqli_stmt_prepare($stmt,$sql);
            mysqli_stmt_bind_param($stmt,"sssss",$imageevent,$imagedesc,$imageuploader,$imageorder,$imageFullName);
            mysqli_stmt_execute($stmt);
            move_uploaded_file($fileTempName,$imagedestination);
            header('Location: ../inside/gallery.php?upload=success');

    }

  }else {
      header('Location: ../inside/gallery.php?upload=not_supported');
  }
}
