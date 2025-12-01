<?php
    //DB connection
    $connection = new mysqli('localhost','root','','team');

    //query
    $sql = "SELECT * from devlopers";
    $data = $connection -> query($sql);

    while($developers = $data -> fetch_object ()){
        echo $developers ->name;

    }

?>
