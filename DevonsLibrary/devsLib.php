<html>
	<head>
		<title>Devon's Library</title>

		<!--Styles-->
		<link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css" />

		<!--Scripts-->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>

	<div class="jumbotron">
		<div class="container">
			<h1>Devon's Library</h1>
			<div class="col-sm-6">
			<input id="searchInput" class="form-control" type="text" />
			</div>
			<button id="searchBtn" class="btn btn-default">Search</button>
		</div>
	</div>

	<?php
    //open connection to mysql db
    $connection = mysql_connect("localhost","root","P@ssw0rd");
    if(!$connection)
        die("Can't connect");

    $db = mysql_select_db("lend_lib");
    if(!$db)
        die("Can't open the database");
    //fetch table rows from mysql db
    $sql = "select * from book";
    $result = mysql_query($sql);
    ?>

	<div class="container">
		<div class="col-sm-10 offset-sm-2" id="listCol">
			<div class="row">
				<?php while($result = mysql_fetch_array($ResultSet, MYSQL_ASSOC))	
					{
					echo "<div class='col-xs-3'>"
						"<img width='90' height='100' src=".$result["imageURL"].">
					</div>
					<div class='col-xs-9'>
						
						
						 <span class='title'>".$result["title"]."</span><br />
						<span class='author'>".$result["authorFName"]. .$result["authorLName"]."</span>
						
						
					</div>"
					}
				?>
			</div>
		</div>
	</div>
		
	</body>
</html>