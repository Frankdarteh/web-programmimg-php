<?php
session_start();
if(isset($_SESSION["username"])) {
	$message = "there is session for user <B>".$_SESSION["username"]."</B>";
	?>
	<!DOCTYPE html> 
	<html lang="en">
	<body id="bgi">
	    <?php include 'hearder.php'?>  
		<div class="container" id="given">
				<div class="row">
					<div class="col-lg-4">
						<li>
							<form class="navbar-form navbar-left"  name="form1" role="search" action="searchofliborder.php">
								<div class="form-group">
									<input type="text"  name="search" class="form-control" placeholder="Search Book given">
								</div>
								<button type="submit"  name="submit" value="search" class="btn btn-default">search </button>
							</form>
						</li>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<img src="image/dog.jpg" class="img-thumbnail" width="50%">
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<img src="image/r2.jpg" class="img-thumbnail">
				</div>
				<div class="col-lg-4">
					<img src="image/r3.jpg"class="img-thumbnail">
				</div>
				<div class="col-lg-4">
					<img src="image/r4.jpg" class="img-thumbnail">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<img src="image/r5.jpg" class="img-thumbnail">
				</div>
				<div class="col-lg-4">
					<img src="image/r6.jpg" class="img-thumbnail">
				</div>
				<div class="col-lg-4">
					<img src="image/r9.jpg" class="img-thumbnail">
				</div>
			</div>
		</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php include 'footer.php'?>
	</body>
	</html> 
	<?php
} else {
	$_SESSION['prev-url'] = '/web-programmimg-php/searchbookgiven.php';
	header("Location: /web-programmimg-php/longinform.php");
}
?>