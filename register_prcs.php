<?php

    include("connecter/conndb.php");

    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $user = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    echo $sql = "insert into users (name, lname, user, pass, level)
            values ('$name','$lastname','$user','$password','99')";

    mysqli_query($conn,$sql);

?>

<script>alert("Register Success.");location.href='index.php?pager=0';</script>