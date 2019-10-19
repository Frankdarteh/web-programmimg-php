<?php
session_start();
if(isset($_SESSION["username"])) {
	$message = "there is session for user <B>".$_SESSION["username"]."</B>";
	?>
	<!DOCTYPE html> 
	<html>
	<body>
	    <?php include 'hearder.php'?>
		<div class="container">
			<div class="doing"><h1>Enter Book informations</h1></div>
			<div class="row" id="good">
				<div class="col-lg-5">
					<form   role="form" action="demo.php" method="post">
						<div class="input-group input-group-lg">
							<span class="input-group-addon" id="sizing-addon1">Title:</span>
							<input type="text" name="title" class="form-control" placeholder="title" aria-describedby="sizing-addon1">
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon2">Author Name</span>
							<input type="text"  name="author" class="form-control" placeholder="author" aria-describedby="sizing-addon2">
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon2">Year Of Publication:</span>
							<input type="text" name="yearofpublication" class="form-control" placeholder="Year Of Publication" aria-describedby="sizing-addon2">
						</div>
						<div class="input-group input-group-sm">
							<span class="input-group-addon" id="sizing-addon3">Number Of Copies</span>
							<input type="text"  name="numberofcopies" class="form-control" placeholder="Number Of Copies" aria-describedby="sizing-addon3">
						</div> 
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3">Brief Abstract</span>
							<input type="text" name="briefabstract"  rows="10" cols="15" class="form-control" placeholder="briefabstract" aria-describedby="sizing-addon4">
						</div>
						<input type="submit" value="submit"/>
					</form>
				</div>
				<div class="col-lg-7">
					<img src="image/a.jpg" width="100%" height="200px" class="img-thumbnail">
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
			if (isset ($_POST['title'])){
				$value = $_POST['title'];
				$value2 = $_POST['author'];
				$value3 = $_POST['yearofpublication'];
				$value4 = $_POST['numberofcopies'];
				$value5 = $_POST['briefabstract'];
				$sql = "INSERT INTO books(title,author,yearofpublication,numberofcopies,briefabstract) VALUES ('$value','$value2','$value3','$value4','$value5')";
				echo 'Informations Submited';
				if (!mysql_query($sql)){
					die('Error: ' . mysql_error());
				}
			}
			mysql_close();

			?>
		</div>
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
