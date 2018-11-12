<?php
if (isset($_POST['submit'])) {
  include 'dbcon.php';

    $newfilename = $_POST['filename'];
    $newfilename = strtolower(str_replace(" ","_",$newfilename));

    $videotitle = $_POST['title'];
    $videodesc = $_POST['desc'];
    $uploader = $_POST['user'];
    $recommended = $_POST['class'];
$videoorder=1;
    $video = $_FILES['file'];

    $videoname = $video['name'];
    $videotype = $video['type'];


    $videotempname = $video['tmp_name'];
    $videosize = $video['size'];

    $fileExt = explode(".", $videoname);
    $fileRealExt = strtolower(end($fileExt));

    $allowed = "mp4";

  if ($fileRealExt == $allowed) {
$videofullname = $newfilename .".". uniqid("",true) .".".$fileRealExt;

$videodestiny = "../uploads/video/" . $videofullname;

if (empty($videotitle) || empty($videodesc) || empty($recommended)) {
  header('Location:../inside/lect.php?upload=empty');
  exit();
}else {
  $sql = "SELECT * FROM videolect;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header('Location:../inside/lect.php?upload=codefailes');
    exit();

  }else {
    mysqli_stmt_execute($stmt);
    $result =  mysqli_stmt_get_result($stmt);
    $resultcheck = mysqli_num_rows($result);


    $sql= "INSERT INTO videolect(videotitle,description,videofullname,ordervideo,recommended,uploadedby) VALUES (?,?,?,?,?,?);";
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header('Location:../inside/lect.php?upload=sqlfails');
      exit();

        }else {
          mysqli_stmt_bind_param($stmt, "ssssss",$videotitle,$videodesc,$videofullname,$videoorder,$recommended,$uploader);
          mysqli_stmt_execute($stmt);

          move_uploaded_file($videotempname,$videodestiny);
          header('Location:../inside/lect.php?upload=success');
        }

  }

}

}else {
  header('Location:../inside/lect.php?upload=notmp4');
  exit();
}

}
