
<?php
session_start();
include("connecter/conndb.php");

$page = @$_REQUEST['pager'];

$lv = 0;

 ?>
<style>
  table, tr, td{
    border-collapse: collapse;
    border: 1px solid black;
  }
  #main{
    width: 960px;
  }
</style>

<table id="main" align=center>
  <tr>
    <td colspan=2>header</td>
  </tr>
  <tr>
    <td colspan=2>menu</td>
  </tr>
  <tr height=500>
  <td> 
    <?php
      if($page==0 or ""){
      include("login_form.php");
      }
      elseif ($page==1) {
        include("register_form.php");
      }
      elseif ($page==2) {
        
        $nameuser = $_SESSION['name'];
        $lv = $_SESSION['lv'];
        include("userdata.php");

      }
      ?>
    </td>
    <td width=75%>
    <?php 
      
      if($lv == 0 or $lv == 99){
        include("contantall.php");
      }
      elseif($lv == 1){
        include('contant_admin.php');
      }
    
     
    ?>
    </td>
  </tr>
  <tr>
    <td colspan=2>footer</td>
  </tr>
</table>
