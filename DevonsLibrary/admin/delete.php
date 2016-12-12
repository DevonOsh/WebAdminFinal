<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
die("Can't Connect"); $db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$sql = "delete from book where title = '".htmlspecialchars($_GET['deleteInput'])."'";
$ResultSet = mysql_query($sql); 
?>
<html>
<head>
	<link rel='stylesheet' href='styles/bootstrap.min.css' type='text/css' />
</head>
<body>
<?php
if(!ResultSet) {
	die("Unable to delete data");
}
?>
	<div class='jumbotron'>
		<div class="container">
			<h1>Book Deleted</h1>
			<button id="backBtn" class="btn btn-default">Back</button>
		</div>
	</div>
</body></html>
