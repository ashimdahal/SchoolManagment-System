<div class="d-flex justify-content-around" style="margin-left:250;">
<?php
include_once '../includes/dbcon.php';

        $sql= 'SELECT * FROM videolect ORDER BY ordervideo DESC;';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
       // code...
       echo "SQL Statemant Error";
     }else {
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       while ($row = mysqli_fetch_assoc($result)) {
         echo ' <div style="margin:5px">

<video width="400" controls>
 <source src="../uploads/video/'.$row['videofullname'].'" type="video/mp4">

 Your browser does not support HTML5 video.
</video>
             <h2>'.$row['videotitle'].'</h2>
             <h3>Description:  '.$row['description'].'</h3>
             <h4>uploaded by :   '.$row['uploadedby'].'</h4>
             <h5>For class: '.$row['recommended'].'</h5>
             <br><br><br>


           </div>';
       }
     }
 ?>


  </div>
