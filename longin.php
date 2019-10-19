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
	if (isset ($_POST['submit']))
	{
		$username=mysql_escape_string($_POST['username']);
		$password=mysql_escape_string($_POST['password']);
			//echo'You did not complete all of the required fields'

		$sql ="SELECT * FROM `user` WHERE `username`= '$username' AND `password` = '$password'";
		//echo $sql;
	    $result= mysql_query($sql);

		if(mysql_num_rows($result)==1){
			$message = 'login succasfully';
			session_start();
			$_SESSION['username'] = $username;
			if(isset($_SESSION['prev-url'])) {
				header("Location: ".$_SESSION['prev-url']);	
			} else {
				header("Location: /web-programmimg-php/libraryhome.php");
			}
		}
		else
		{
			$message = 'wrong username password combination.please re-enter';
?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php echo $message; ?>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
		}
	}
	mysql_close();
?>