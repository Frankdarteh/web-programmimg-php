<?php
session_start();
if(isset($_SESSION["username"])) {
    $message = "there is session for user <B>".$_SESSION["username"]."</B>";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <body id="reader">
        <?php include 'hearder.php'?>
        <div class="container">
            <div class="doing"><h1>Enter Reader informations</h1><br></div>
            <div class="row" id="good">
                <div class="col-lg-5">
                <form  role="form" action="reader.php" method="post">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"> Name</span>
                            <input type="text" name="name" class="form-control" placeholder="readername" aria-describedby="sizing-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Occupation:</span>
                            <input type="text" name="Occupation" class="form-control" placeholder="Occupation" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">library number</span>
                            <input type="text" name="librarycardnumber" class="form-control" placeholder="library number" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon" id="sizing-addon3">Phone Number</span>
                            <input type="text"  name="phonenumber" class="form-control" placeholder="Phone Number" aria-describedby="sizing-addon3">
                        </div> 
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon3">Address</span>
                            <input type="text" name="Address"  class="form-control" placeholder="Address" aria-describedby="sizing-addon4">
                        </div>
                        <div class="input-group input-group-so">
                            <span class="input-group-addon" id="sizing-addon3">Date of bith</span>
                            <input type="text" name="dateofbith"  class="form-control" placeholder="Date of bith" aria-describedby="sizing-addon5">
                        </div>
                        <input type="submit" value="submit"/>
                    </form>
                </div>
                <div class="col-lg-7">
                   <img src="image/t.jpg" width="100%" height="200px" class="img-thumbnail">
               </div>
           </div>
        </div>
        <?php
        define('DB_NAME','library');
        define('DB_USER','root');
        define('DB_PASSWORD','frank');
        define('DB_HOST','localhost');

        $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

        if(!$link){
            die('could not connect:'.mysql_error());
        }
        $db_selected = mysql_select_db (DB_NAME,$link);

        if(!$db_selected){
            die('can\'t use'.$dbname.':'.mysql_error()); 
        }
        if (isset ($_POST['name'])){
            $name=$_POST['name'];
            $occupation=$_POST['Occupation'];
            $librarycardnumber=$_POST['librarycardnumber'];
            $phonenumber=$_POST['phonenumber'];
            $Address=$_POST['Address'];
            $dateofbith= $_POST['dateofbith'];

            $sql = "INSERT INTO reader(name,Occupation,librarycardnumber,phonenumber,Address,dateofbith) VALUES ('$name','$occupation','$librarycardnumber','$phonenumber','$Address','$dateofbith')";
            echo 'Informations Submited';
            if (!mysql_query($sql)){
                die('Error: ' . mysql_error());
            }
        }

        mysql_close();

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