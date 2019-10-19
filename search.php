<!DOCTYPE html> 
<html>
<body >
    <?php include 'hearder.php'?>
		<h1> Book  We have Informations</h1>
		<div class="search">
			<?php
			/*POST - Submits data to be processed to a specified resource */
			echo "<center><table border='1' cellspacing ='5' cellpadding='5'>";
			echo "<tr><th>Title</th><th> Author Name</th><th> Number Of Cpies </th></tr>";
			Delmar();
			echo "</table></center>";
			function Delmar()
			{ 
				define('DB_NAME','library');
				define('DB_USER','root');
				define('DB_PASSWORD','frank');
				define('DB_HOST','localhost');
				$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
                    //$output =NULL;
				if ( isset ($_GET['submit']) && !empty($_GET['search'])){
	               //connent to the database
					echo "<!-- search =" . $_GET['search'] . "-->";
					$mysqli = NEW mySQLi("localhost","root","frank","library");
					$search = $mysqli->real_escape_string($_GET['search']);
		              //Query the database
					$resultset = $mysqli->query("SELECT * FROM books WHERE title LIKE '%$search%'");
		              //$resultset = $mysqli->query("SELECT * FROM books WHERE id LIKE '%$search%'");
		                  //echo "SELECT * FROM books WHERE title LIKE '$search%'";
					if ($resultset->num_rows > 0){
						while($row = $resultset->fetch_assoc())
						{
							$title = $row['title'];
							$author = $row['author'];
							$numberofcopies =$row['numberofcopies'];
							echo "<tr>";
							echo  "<td width=100px><center> $title </center></td>";
							echo  "<td width=100px><center> $author</center></td>"; 
							echo "<td width=100px><center> $numberofcopies </center></td>";
							echo "</tr>";
						}
					}else{
						echo "<h1>No Results</h1> ";
					}
				}
			}
			?>
		</div>
	<?php include 'footer.php'?>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>   