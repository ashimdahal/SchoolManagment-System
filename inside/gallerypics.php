<div class="gallery-container" style="margin-left:255px;">
  <?php
  include '../includes/dbcon.php';
  $sql =  "SELECT * FROM images ORDER BY orderid";
  $stmt = mysqli_stmt_init($conn);
  mysqli_stmt_prepare($stmt,$sql);
  mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

   while ($row = mysqli_fetch_assoc($result)) {
     echo '
       <div style="border:1px solid black">
     <a href="#" >
     <div style="
     width:320px;
     height:260px;
     background-repeat:no-repeat;
     background-size:cover;
     background-image:url(../uploads/image/'.$row["imagename"].');
     border-bottom:1px solid black;

     " class="imageholder" >
     </div>
       <h2>Event: '.$row["imageevent"].'</h2>
       <h3>Description: '.$row["imagedesc"].'</h3>
       <h4>Uploaded by: '.$row["uploader"].'</h4>
       </a>
       <form method="POST" action="../includes/deletepic.php" style="
         float:right;
       ">
       <input type="hidden" value="'.$row["imageid"].'" name="imgid"></input>
       <button type="submit" name="delete" id="deletepic">Delete</button></form>
</div>
     ';
   }


   ?>
