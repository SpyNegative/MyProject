<?php
    session_start();

    include("connecter/conndb.php");

    $user = $_REQUEST['user'];
    $password = $_REQUEST['pass'];

    $sql = "select * from users where user = '$user' and pass = '$password'";

    $rows = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($rows);
    $data = mysqli_fetch_array($rows);

    if($count==1){

        $_SESSION['name'] = $data['name'];
        $_SESSION['lv'] = $data['level'];

        echo "<script>alert('Wellcome ".$data['name'].".');location.href='index.php?pager=2';</script>";

    }
    else{
        echo "<script>alert('UserID or Password incorrect.');location.href='index.php?pager=0';</script>";
    }
?>