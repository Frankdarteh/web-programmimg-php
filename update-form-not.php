<!DOCTYPE html> 
<html>
<head>
<link href="css/demo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="bee">
<h2><a href="reader.php">Reader</a><br/>
<a href="demo-form.php">Enter BOOKS Info</a><h2>


<h2>Upate BOOKS informations</h2>
</div>

<form class="sect" action="update.php" method="post">
<p>ID TO Upate <input type="text" name="id"></p>
<p>Title:<input type="text" name="title"/> </p>
<p>Author Name:<input type="text" name="author"/></p>
<p>Year Of Publication:<input type="text" name="yearofpublication"/></p>
<p>Number Of Copies:<input type="text" name="numberofcopies"/></p>
<p>Brief Abstract:<textarea rows="10" cols="15" name="briefabstract"></textarea></p>
<input type="submit" name="update" value="Update Data"/>
<input type="submit" name="delete" value="Delete"/>
 </form>
 <?php include 'footer.php'?>
</body>
</html>