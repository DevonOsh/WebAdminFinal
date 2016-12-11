<?php
$conn= mysql_connect("localhost","root","P@ssw0rd");
if(!conn)
		die("Can't Connect");
$db = mysql_select_db("lend_lib");
if(!db)
		die("Can't open database");
$sql= "insert into book values ('" 
. htmlspecialchars($_GET['isbnInput']) . "' , '" 
. htmlspecialchars($_GET['titleInput']) . "' , '" 
. htmlspecialchars($_GET['authorLInput']) . "' , '" 
. htmlspecialchars($_GET['authorFInput']) . "' , '" 
. htmlspecialchars($_GET['imageURLInput']) . "' , 
false)";
$Ret = mysql_query($sql);
if (!Ret) {die(mysql_error());}
?>
<html><body>
<?php
echo "inserted" . "<BR>";
echo $sql       . "<BR>";
$RetStr = ($Ret) ? 'true':'false';
echo $RetStr    . "<BR>";
?>
</body></html>
