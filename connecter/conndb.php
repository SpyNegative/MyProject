<?php
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "WebBall";

    $conn = mysqli_connect($host,$user,$pass,$db);

    mysqli_query($conn,"SET character_set_connection = utf8");
    mysqli_query($conn,"SET character_set_client = utf8");
    mysqli_query($conn,"SET character_set_results = utf8");