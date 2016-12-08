<?php
    //open connection to mysql db
    $connection = mysql_connect("localhost","root","P@ssw0rd");
    if(!$conection)
        die("Can't connect");

    $db = mysql_select_db("lend_lib");
    if(!$db)
        die("Can't open the database");
    //fetch table rows from mysql db
    $sql = "select * from lend_lib";
    $result = mysql_query($sql);

    //create an array
    $libArray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $libArray[] = $row;
    }
    echo json_encode($libArray);

    //close the db connection
    mysqli_close($connection);
?>