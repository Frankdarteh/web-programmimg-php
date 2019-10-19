<!DOCTYPE html> 
<html>
<head>
<link href="css/demo.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="navbar">
            <ul class="nav"><h1>
                <li class="active">
                    <a href="update.php">Update Book</a>
                </li>
                <li>
                    <a href="reader.php">Reader </a>
                </li>
                <li>
                    <a href="order.php">Order Of Book </a></h1>
                </li>
            </ul>
    </div>

<h2>Enter BOOKS informations</h2>
</div>

<form class="sect" action="demo.php" method="post">
<p>Title:<input type="text" name="title"/> </p>
<p>Author Name:<input type="text" name="author"/></p>
<p>Year Of Publication:<input type="text" name="yearofpublication"/></p>
<p>Number Of Copies:<input type="text" name="numberofcopies"/></p>
<p>Brief Abstract:<textarea rows="10" cols="15" name="briefabstract"></textarea></p>
<p>upload Image:<input typpe="file" name="image" enctype="multipart/form-data" value="upload"></p>
<input type="submit" value="submit"/>
 </form>
 
</body>
</html>