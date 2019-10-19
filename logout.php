<?php
	session_start();
	session_destroy();
	header("Location: /web-programmimg-php/libraryhome.php");
?>