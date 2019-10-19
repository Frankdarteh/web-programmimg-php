<?php
session_start();
if(isset($_SESSION["username"])) {
  $message = "there is session for user <B>".$_SESSION["username"]."</B>";
  ?>
  <!DOCTYPE html> 
  <html lang="en">
  <body>
    <?php include 'hearder.php'?>
    <div class="container">
      <div class="doing"><h2>Upate or Delete BOOKS informations</h2></div>
      <div class="row" id="good">
        <div class="col-lg-5">
          <form class="update" class="ben" role="form" action="update.php" method="post">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"> Enter ID TO Upate</span>
              <input type="text" name="id" class="form-control" placeholder="Enter ID TO Upate or delete" aria-describedby="sizing-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2">Title</span>
              <input type="text" name="title" class="form-control" placeholder="Title" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2">Author Name</span>
              <input type="text"  name="author" class="form-control" placeholder="author" aria-describedby="sizing-addon3">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2">Year Of Publication:</span>
              <input type="text" name="yearofpublication" class="form-control" placeholder="Year Of Publication" aria-describedby="sizing-addon4">
            </div>
            <div class="input-group input-group-sm">
              <span class="input-group-addon" id="sizing-addon3">Number Of Copies</span>
              <input type="text"  name="numberofcopies" class="form-control" placeholder="Number Of Copies" aria-describedby="sizing-addon5">
            </div> 
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon3">Brief Abstract</span>
              <input type="text" name="briefabstract"  rows="10" cols="15" class="form-control" placeholder="brief abstract" aria-describedby="sizing-addon6">
            </div>
            <input type="submit" name="update" value="Update Data"/>
            <input type="submit" name="delete" value="Delete"/>
          </form>
        </div>
        <div class="col-lg-7">
         <img src="image/ss.jpg" width="100%" class="img-thumbnail">
       </div>
     </div>
    </div>

    <?php
    define('DB_NAME','library');
    define('DB_USER','root');
    define('DB_PASSWORD','frank');
    define('DB_HOST','localhost');
    $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
    $db_selected = mysql_select_db (DB_NAME,$link);
    if(isset($_POST['update']))
    {
     $id = $_POST['id'];
     $title = $_POST['title'];
     $author = $_POST['author'];
     $yearofpublication = $_POST['yearofpublication'];
     $numberofcopies = $_POST['numberofcopies'];
     $briefabstract = $_POST['briefabstract'];
     $query= 'UPDATE `books` SET `title`="'.$title.'",`author`="'.$author.'",`yearofpublication`="'. $yearofpublication.'",`numberofcopies`="'.$numberofcopies.'",`briefabstract`="'.$briefabstract.'" WHERE `id`='.$id;
     $result= mysql_query($query);
     if($result){ 
      echo "Data updated"; }  

      else
      {
       echo"Data Not Updated";
     }
   }
   $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
   $db_selected = mysql_select_db (DB_NAME,$link);
   if(isset($_POST['delete'])) {

     $id= $_POST['id'];
     $query= 'DELETE FROM `books` WHERE `id`='.$id;
     $result =  mysql_query($query);
           //if($result){ 
     if(mysql_affected_rows($link)>0){
       echo "Data Deleted";    
     }
     else{         
       echo"Data Not Deleted".$query;
     }
   }
   ?>
   
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <?php include 'footer.php'?>
 </body>
 </html> 
 <?php
} else {
  $_SESSION['prev-url'] = '/web-programmimg-php/reader.php';
  header("Location: /web-programmimg-php/longinform.php");
}
?> 