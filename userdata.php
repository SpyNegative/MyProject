<?php
    //session_start();

    //include("connecter/conndb.php");

    

    $sql = "select * from users where name = '$nameuser'";

    $rows = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($rows);
    $data = mysqli_fetch_array($rows);

?>

NAME : <?php echo $data['name']; ?> <br>
LASTNAME : <?php echo $data['lname']; ?> <br>

<a id="linker" onclick="linkregist();">ออกจากระบบ</a>

<style>
  #linker:hover{
    cursor: pointer;
    color: red;
  }
</style>
<script>
  function linkregist(){
    location.href='logout.php';
  }
</script>