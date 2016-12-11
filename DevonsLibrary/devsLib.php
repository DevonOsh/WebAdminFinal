<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
	die("Can't Connect"); 
$db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$ResultSet = mysql_query("select * from book"); ?>

<html>

		<?php
		while($rs = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
		{
		echo			"<span class='title'>".$rs["title"]."</span><br />"
		echo			"<span class='author'>".$rs["authorLName"]."</span>"
		}
		?>
	</body>
</html>
