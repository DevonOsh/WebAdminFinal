<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
die("Can't Connect"); $db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$ResultSet = mysql_query("select * from book"); 
?>
<html>
<head>
	<link rel='stylesheet' href='styles/bootstrap.min.css' type='text/css' />
</head>
<body>
	<div class='jumbotron'>
		<div class="container">
			<h1>Devon's Library</h1>
			<form action = "search.php" method="get">
			<div class="col-sm-6">
			<input id="searchInput" name="searchInput" class="form-control" type="text" />
			</div>
			<button type="submit" id="searchBtn" class="btn btn-default">Search</button>
			</form>
		</div>
	</div>
<div class="container">
<div class="row">
	<div class="col-sm-10 offset-sm-2" id="listCol">
	<?php echo "<h2>Devon's Library Inventory</h2>"; 
	while($rs = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
	{
	echo	"<div class='row'>";
	echo		"<div class='col-xs-3'>";
	echo			"<img width='90' height='100' src='".$rs["imageURL"]."'>";
	echo		"</div>";
	echo "<div class='col-xs-9'>";
	echo "<span>".$rs["title"]."</span><br />";
	echo "<span>".$rs["authorLName"]."</span><br />";
	echo "<span>".$rs["authorFName"]."</span></br />";
	if($rs["checkedOut"] == true) {
		echo "<span class='glyhpicon glyphicon-remove-sign'> Currently Checked out</span>";
	}
	echo "</div>";
	echo	"</div>";
	}
	?>
	<div>
</div>
<div class="row">
	<div class="col-sm-10">
		<form action="checkOut.php">
		<h3>Check Out Books</h3><br />
		<h4>Please enter the title of the book you wish to check out</h5>
		<input name="checkOutInput" placeholder="Title" class="form-control" type="text" />
		<button type="submit" class="btn btn-default">Checkout</button>
		</form>
	</div>
</div>
</div>
</body></html>
