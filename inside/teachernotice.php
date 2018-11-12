<?php
if (isset($_SESSION['uid'])) {
  include '../includes/dbcon.php';
  echo '<div class="comment">
    <form class="notice" action="../includes/notice.php" method="POST">

      <input type="hidden" name="username" value="'.$_SESSION['first'].'">
      <br>
      <input type="hidden" name="date" value="'.date('Y-m-d h:i:s').'">
      <br>
      <textarea name="notice" id="notice" placeholder="Write Information Here To Publish It"></textarea>
      <br>
    <button type="submit" id="publish" name="submit">Publish</button>
    </form>
  </div>';
  $sql ="SELECT * FROM notices ORDER BY COMMENTid DESC ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
        // code...
        echo "SQL Statemant Error";
      }else {
        echo '<div class="d-flex flex-column bd-highlight mb-3 "style="
  text-align: center;
  margin-top:125px;
  background-color:white;
  width:886;
  margin-left: 328px;
  border:1px sloid black;
  overflow-y: scroll;
  overflow-x: hidden;
  height:600px;
  ">';
        // code...
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row= mysqli_fetch_assoc($result)) {
          echo '<div style="border:1px solid black;position:relative;">
          <div class="p-2 bd-highlight"><p class = "dates">'.$row['insert_date'].'</p></div>
          <div class="p-2 bd-highlight"><p class = "naau">Notice Issued By  : '.$row['user'].'</p></div>
          <div class="p-2 bd-highlight"><p class = "notice">'.$row['notice'].'</p></div>
          <p>
          <form class = "delete_form" action="../includes/delete.php" method="POST">
          <input type="hidden" name ="commentid" value="'.$row['COMMENTid'].'"<br>
          <button name ="delete" type = "submit">Delete</button><br>
          </form><br><br>
  </div>

  </P>';
  }echo '</div>';
  }
}
 ?>
