<?php
$conn= mysql_connect("localhost","root","P@ssw0rd");
if(!conn)
		die("Can't Connect");
$db = mysql_select_db("lend_lib");
if(!db)
		die("Can't open database");
$sql= "update book set checkedOut = true where title = '" 
. htmlspecialchars($_GET['checkOutInput']) . "'";
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
