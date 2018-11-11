<?php
if (isset($_SESSION['uid'])) {
  echo '<div class="mid">
  <div class="d-flex flex-row-reverse align-items-center justify-content-md-around" style="
     margin-left: 260;
     width: 75%;
  ">
   <div class="Holder">
     <a href="inside/event.php">
   <img width="240px" height="240px"src="http://www.edmition.com/wp-content/uploads/2015/11/events.png" class="rounded" alt="">

     <div class="texts">
       School Events
     </div>

  </a>
  </div>
  <div class="Holder">
   <a href="inside/lect.php">
   <img width="240px" height="240px"class="rounded"src="https://ubisafe.org/images/coursed-clipart-classroomclip-2.png" alt="">

     <div class="texts">
       Video Lessons
     </div>

  </a>
  </div>
  <div class="Holder">
   <a href="inside/notice.php">
   <img width="240px" height="240px"class="rounded"src="https://vignette.wikia.nocookie.net/mlp/images/8/88/Students_around_a_bulletin_board_EG3.png/revision/latest?cb=20151101183132" alt="">

     <div class="texts">
      Important Notices
     </div>

  </a>
  </div >
  <div class="Holder">
   <a href="inside/gallery.php">
   <img style="margin-top:50px;margin-bottom:8.9px;"width="240px" height="240px"src="http://www.richesonart.com/gallery/IMG/zsabo.jpg" class="rounded"alt="">

     <div class="texts">
       Picture Gallery
     </div>

  </a>
   <a href="inside/attend.php"> <div class="Holder">
     <img width="240px" height="240px"src="https://www.jagranjosh.com/imported/images/E/Articles/aTten.jpg" class="rounded"alt="">

     <div class="texts">
       Student Attendance
     </div>

  </a>
  </div>
  </div>
  </div>
  </div>
';
}elseif (isset($_SESSION['id'])) {
  echo '<div class="mid">
  <div class="d-flex flex-row-reverse align-items-center justify-content-md-around" style="
     margin-left: 260;
     width: 75%;
  ">
   <div class="Holder">
     <a href="inside/event.php">
   <img width="240px" height="240px"src="http://www.edmition.com/wp-content/uploads/2015/11/events.png" class="rounded" alt="">

     <div class="texts">
       School Events
     </div>

  </a>
  </div>
  <div class="Holder">
   <a href="inside/lect.php">
   <img width="240px" height="240px"class="rounded"src="https://ubisafe.org/images/coursed-clipart-classroomclip-2.png" alt="">

     <div class="texts">
       Video Lessons
     </div>

  </a>
  </div>
  <div class="Holder">
   <a href="inside/notice.php">
   <img width="240px" height="240px"class="rounded"src="https://vignette.wikia.nocookie.net/mlp/images/8/88/Students_around_a_bulletin_board_EG3.png/revision/latest?cb=20151101183132" alt="">

     <div class="texts">
      Important Notices
     </div>

  </a>
  </div >
  <div class="Holder">
   <a href="inside/gallery.php">
   <img style="margin-top:50px;margin-bottom:8.9px;"width="240px" height="240px"src="http://www.richesonart.com/gallery/IMG/zsabo.jpg" class="rounded"alt="">

     <div class="texts">
       Picture Gallery
     </div>

  </a>
   <a href="inside/attend.php"> <div class="Holder">
     <img width="240px" height="240px"src="https://www.jagranjosh.com/imported/images/E/Articles/aTten.jpg" class="rounded"alt="">

     <div class="texts">
       Student Attendance
     </div>

  </a>
  </div>
  </div>
  </div>
  </div>
  ';
}else {
    header('Location:.../index.php');
    exit();
}
 ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
