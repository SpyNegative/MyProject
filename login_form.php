
<form name="login" action="login_prcs.php" method="POST">
<table align=center>
  <tr>
    <td>เข้าสู่ระบบ</td>
  </tr>
  <tr>
    <td><input type="text" name="user"></td>
  </tr>
  <tr>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td><input type="submit" value="เข้าสู่ระบบ"></td>
  </tr>
  <tr>
    <td><a id="linker" onclick="linkregist();">สมัครสมาชิกใหม่</a></td>
  </tr>
</table>
</form>

<style>
  #linker:hover{
    cursor: pointer;
    color: red;
  }
</style>
<script>
  function linkregist(){
    location.href='index.php?pager=1';
  }
</script>
