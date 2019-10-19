<?php
session_start();
if(isset($_SESSION["username"])) {
	$message = "there is session for user <B>".$_SESSION["username"]."</B>";
	?>
	<!DOCTYPE html>
	<html lang="en">
	<body>
		<div class="container">
		    <?php include 'hearder.php'?>
			<?php
			/*POST - Submits data to be processed to a specified resource */
			function Delmar()
			{ 
				define('DB_NAME','library');
				define('DB_USER','root');
				define('DB_PASSWORD','frank');
				define('DB_HOST','localhost');
				$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
				if (isset ($_GET['search']) && !empty ($_GET['search'])){
	               //connent to the database
					echo"<!-- search =" . $_GET['search'] . "-->";
					$mysqli = NEW mySQLi("localhost","root","frank","library");
					$search = $mysqli->real_escape_string($_GET['search']);
		           //Query the database
					$resultset = $mysqli->query(" SELECT * FROM `orderofbooks` LEFT JOIN books on books.id = orderofbooks.booktitle LEFT join reader on reader.id=orderofbooks.readername WHERE title LIKE'%$search%'");
		               //$resultset = $mysqli->query("SELECT * FROM books WHERE id LIKE '%$search%'");
		                //echo "SELECT * FROM books WHERE title LIKE '$search%'";
					if ($resultset->num_rows > 0){
						while($row = $resultset->fetch_assoc())
						{
							$title = $row['title'];
							$name = $row['name'];
							$datebookgive =$row['datebookgive'];
							$dateretruned =$row['dateretruned'];
							echo "<tr>";
							echo  "<td width=100px><center> $name </center></td>";
							echo  "<td width=100px><center> $title</center></td>"; 
							echo "<td width=100px><center> $datebookgive </center></td>";
							echo "<td width=100px><center> $dateretruned </center></td>";
							echo "</tr>";
						}
					}else{
						echo  "<h1>No Results </h1>";
					}
				}
			}
			echo "<center><table border='1' cellspacing ='6' cellpadding='6'>";
			echo "<tr><th>Reader Name</th><th>Book Title</th><th>Date Book Given</th><th>Date Retruned</th></tr>";
			Delmar();
			echo "</table></center>";
			?>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php include 'footer.php'?>g
	</body>
	</html>
	<?php
} else {
	$_SESSION['prev-url'] = '/web-programmimg-php/reader.php';
	header("Location: /web-programmimg-php/longinform.php");
}
?>