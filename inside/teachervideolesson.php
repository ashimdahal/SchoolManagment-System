<?php
if (isset($_SESSION['uid'])) {
  echo '<form action="../includes/video.php" method="POST" enctype="multipart/form-data">
    <div class="uploadvid">
      <input type="hidden" name="filename" value="lesson">
      <input type="hidden" name="user" value="'.$_SESSION['first'].'"><br>
      <input type="text" name="class" placeholder="Which class is it recommended??"><br>
      <input type="text" name="title" placeholder="Topic of video??"><br>
      <input type="text" name="desc" placeholder="short Description"><br>
      <label for="file">

          <span class="glyphicon glyphicon-folder-open" style="margin-bottom:5px;cursor:pointer;font-size:30px;"aria-hidden="true"> Select Video</span>
          <input type="file" name="file" id="file" style="display:none">
        </label><br>
      <button type="submit" name="submit">Upload <i class="fas fa-cloud-upload-alt"></i></button>
    </div>
  </form>';
}
 ?>
