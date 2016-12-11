<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
die("Can't Connect"); $db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$ResultSet = mysql_query("select * from book"); 
?>
<html>
<head>
	<link rel='stylesheet' href='../styles/bootstrap.min.css' type='text/css' />
</head>
<body>
	<div class='jumbotron'>
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><h3>Devon's Library Admin</h3></div>
			</div>
			<form action="addBook.php">
			<div class="row">
				<div class="col-xs-6">
					<h2>Add New Book</h2>
				</div>
				<div class="col-xs-6">
					<input name="isbnInput" placeholder="ISBN" class="form-control" type="text" />
					<input name="titleInput" placeholder="Title" class="form-control" type="text" />
					<input name="authorFInput" placeholder="Author First Name" class="form-control" type="text" />
					<input name="authorLInput" placeholder="Author Last Name" class="form-control" type="text" />
					<input name="imageURLInput" placeholder="Image URL" class="form-control" type="text" />
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<button type="submit" id="addBtn" class="btn btn-default">Submit</button>
				</div>
			</div>
			</form>
			<form action="deleteBook.php">
				<div class="row">
					<div class="col-xs-6">
					<h2>Delete Book</h2>
					</div>
					<div class="col-xs-6">
						<input name="deleteInput" placeholder="Title of book to delete" class="form-control" type="text" />	
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<button type="submit" id="deleteBtn" class="btn btn-default">Delete</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<div class="container">
<div class="col-sm-10 offset-sm-2" id="listCol">
<?php echo "<h2>Inventory</h2>"; 
while($rs = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
{
echo	"<div class='row'>";
echo		"<div class='col-xs-3'>";
echo			"<img width='90' height='100' src='".$rs["imageURL"]."'>";
echo		"</div>";
echo "<div class='col-xs-9'>";
echo "<span class='title'>".$rs["isbn"]."</span><br />";
echo "<span>".$rs["title"]."</span><br />";
echo "<span>".$rs["authorLName"]."</span><br />";
echo "<span>".$rs["authorFName"]."</span></br />";
echo "</div>";
echo	"</div>";
}
?>
</div>
</div>
</body></html>
