<?php
    session_start();

    session_unset();
    session_destroy();

    echo "<script>alert('ออกจากระบบเรียบร้อยแล้ว.');location.href='index.php?pager=0';</script>";
?>