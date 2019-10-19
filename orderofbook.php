<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
}
}


mysql_close();

?>
</body>
</html>