<!doctype html>
<html lang="en">
<body id="the">
    <?php include 'hearder.php'?>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<form role="form"  action="longin.php" method="POST">
					<div class="input-group input-group-lg">
						<span class="input-group-addon" id="sizing-addon1">User Name</span>
						<input type="text"  name="username" class="form-control" placeholder="User Name" aria-describedby="sizing-addon1">
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">Password</span>
						<input type="password"  name="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
					</div>
					<input type="submit"  name="submit" value="longin">
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'?>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>