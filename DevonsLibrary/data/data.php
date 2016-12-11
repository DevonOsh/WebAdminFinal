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

    <?php while($result = mysql_fetch_array($ResultSet, MYSQL_ASSOC))
        {
        echo "<tr>";
        echo "<td>".$rs["ssn"]."</td>";
        echo "<td>".$rs["firstname"]."</td>";
        echo "<td>".$rs["lastname"]."</td>";
        echo "<td>".$rs["salary"]."</td>";
        echo "</tr>"; }
        echo "</table>";
    ?>
?>