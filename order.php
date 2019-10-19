<?php
session_start();
if(isset($_SESSION["username"])) {
    $message = "there is session for user <B>".$_SESSION["username"]."</B>";
    ?>
    <!DOCTYPE html> 
    <html lang="en">
    <body id="order"> 
        <?php include 'hearder.php'?>
        <div class="container">
            <div class="doing"> <h2>Enter Order Of Books In The library.</h2></div>
            <div class="row" id="good">
                <div class="col-lg-5">
                    <form  class="ben" action="order.php" method="post">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">Enter reader ID</span>
                            <input type="text"  name="readername" class="form-control" placeholder="Enter reader ID" aria-describedby="sizing-addon1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Enter Book ID</span>
                            <input type="text"  name="booktitle" class="form-control" placeholder="Enter Book ID" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Date Book Was Given</span>
                            <input type="text" name="datebookgive" class="form-control" placeholder="Enter Date Book Was Given" aria-describedby="sizing-addon2">
                        </div>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon" id="sizing-addon3">Date Retruned </span>
                            <input type="text"  name="dateretruned" class="form-control" placeholder="Enter Date Retruned" aria-describedby="sizing-addon3">
                        </div> 
                        <input type="submit" value="submit"/>
                    </form>
                </div>
                <div class="col-lg-7">
                    <img src="image/ii.jpg" width="100%" height="200px" class="img-thumbnail">
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
 //$value =$_POST[FOREIGN KEY (readername) REFERENCES reader(id)];
        if (isset ($_POST['readername'])){
            $readername=$_POST['readername'];
            $booktitle=$_POST['booktitle'];
            $datebookgive=$_POST['datebookgive'];
            $dateretruned=$_POST['dateretruned'];

            $sql = "INSERT INTO orderofbooks(readername ,booktitle,datebookgive,dateretruned) VALUES ('$readername int `10` UNSIGNED FOREIGN KEY `readername` REFERENCES `reader``id` ','$booktitle int `10` UNSIGNED FOREIGN KEY `booktitle` REFERENCES `books` `id`','$datebookgive','$dateretruned')";
            echo 'Informations Submited';
            if (!mysql_query($sql)){
                die('Error: ' . mysql_error());
                echo 'Informations Not Submited';
            }
        }
        mysql_close();
        ?>
    </div>
    <?php include 'footer.php'?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
} else {
    $_SESSION['prev-url'] = '/web-programmimg-php/order.php';
    header("Location: /web-programmimg-php/longinform.php");
}
?> 