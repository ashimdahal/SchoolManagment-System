<?php
if (isset($_SESSION['id'])) {
  include '../includes/dbcon.php';
  $sql ="SELECT * FROM notices ORDER BY COMMENTid DESC ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
          // code...
          echo "SQL Statemant Error";
        }else {
          echo '<div class="d-flex flex-column bd-highlight mb-3 "style="
    text-align: center;
    margin-top:15px;
    background-color:white;
    width:886;
    margin-left: 328px;
    border:1px sloid black;
    overflow-y: scroll; height:750px;
    overflow-x:hidden;
  ">';
          // code...
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          while ($row= mysqli_fetch_assoc($result)) {
            echo '<div style="border:1px solid black;">
    <div class="p-2 bd-highlight"><p class = "dates">'.$row['insert_date'].'</p></div>
    <div class="p-2 bd-highlight"><p class = "naau">Notice Issued By '.$row['user'].'</p></div>
    <div class="p-2 bd-highlight"><p class = "notice">'.$row['notice'].'</p></div>
  </div>';
  // code...
  }
  }
}

?>
