<?php
if (isset($_SESSION['uid'])) {
  echo '   <form action="../includes/gallery.php" method="POST" enctype="multipart/form-data">
       <div class="uploadpic">
         <input type="hidden" name="filename" value="image">
         <input type="hidden" name="user" value="'.$_SESSION['first'].'"><br>
         <input type="text" name="event" placeholder="Which Event is it related with??"><br>

         <input type="text" name="desc" placeholder="Short Description"><br>
         <label for="file">

             <span class="glyphicon glyphicon-folder-open" style="margin-bottom:5px;cursor:pointer;font-size:30px;"aria-hidden="true"> Select Picture</span>
             <input type="file" name="file" id="file" style="display:none">
           </label><br>
         <button type="submit" name="submit">Upload <i class="fas fa-cloud-upload-alt"></i></button>
       </div>
     </form>';
}
