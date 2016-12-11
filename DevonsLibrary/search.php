<?php $conn=mysql_connect("localhost","root","P@ssw0rd"); 
if(!$conn)
die("Can't Connect"); $db = mysql_select_db("lend_lib");
if(!$db)
die("Can't open database");
$ResultSet = mysql_query("select * from book"); 
?>
<html><body>
<?php echo "<TABLE><tr><th>SSN</th><th>First</th><th>Last</th><th>Salary</th></tr>"; 
while($rs = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
{
echo "<tr>";
echo "<td>".$rs["isbn"]."</td>";
echo "<td>".$rs["title"]."</td>";
echo "<td>".$rs["authorLName"]."</td>";
echo "<td>".$rs["authorFName"]."</td>";
echo "</tr>"; }
echo "</table>";
?>
</body></html>
