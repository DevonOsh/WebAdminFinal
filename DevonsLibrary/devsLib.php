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
			<div class="col-sm-6">
			<input id="searchInput" class="form-control" type="text" />
			</div>
			<button id="searchBtn" class="btn btn-default">Search</button>
		</div>
	</div>
<div class="container">
<div class="col-sm-10 offset-sm-2" id="listCol">
<?php echo "<p>Here is Devon's Library</p>"; 
while($rs = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
{
echo	"<div class='row'>";
echo		"<div class='col-xs-3'>";
echo			"<img width='90' height='100' src='https://68.media.tumblr.com/avatar_ef515c5bca68_128.png'>";
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
