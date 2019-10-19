<!DOCTYPE html>
<html> 
<head>
<link href="css/demo.css" rel="stylesheet" type="text/css"/>
</head>
<body >





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

</body>
</html>
