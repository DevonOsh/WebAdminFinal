<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
die("Can't Connect"); $db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$sql = "select * from book where title = '".htmlspecialchars($_GET['searchInput'])."'";
$ResultSet = mysql_query($sql); 
?>
<html>
<head>
	<link rel='stylesheet' href='styles/bootstrap.min.css' type='text/css' />
</head>
<body>
	<div class='jumbotron'>
		<div class="container">
			<h1>Search Results</h1>
			<button id="backBtn" class="btn btn-default">Back</button>
		</div>
	</div>
<div class="container">
<div class="col-sm-10 offset-sm-2" id="listCol">
<?php 
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
