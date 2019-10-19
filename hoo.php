<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar">-</span>
        <span class="icon-bar">-</span>
        <span class="icon-bar">-</span>                        
      </button>
      <img src="image/logosf.jpg" width="100px">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li ><a href="author.php">AUTHORS</a></li>
         <li class="active"><a href="Libraryhome.php">Home</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Librarian Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="update.php" id="up">Update Book</a></li>
		    <li><a href="order.php" id="or">Order Of Book</a></li>
			<li><a  href="demo.php" id="bo">Books</a></li>
			<li><a href="reader.php" id="re">Reader</a></li>
            <li><a href="searchbookgiven.php" id="bg">BOOK Given</a></li>
          </ul>
         </li>
         <form class="navbar-form navbar-left" id="color" name="form1" role="search"  action="search.php">
		   <div class="form-group">
			 <input type="text"  name="search" class="form-control"    placeholder="Search Book">
		   </div>
			<button type="submit"  name="submit" value="search" class="btn btn-default">Search</button>
		</form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" id="k"><?php echo 'Logout'; ?></a><span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="longinform.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>