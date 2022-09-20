<?php
    $host= "localhost";
    $user = "root";
    $pass = "";
    $datadaseName= "work";

    $connection = mysqli_connect($host,$user,$pass,$datadaseName);

    if ($connection==false )
    {
        echo "some thing wrong ". mysqli_connect_error();
    }
?>