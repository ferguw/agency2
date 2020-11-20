<?php
  include('../_init.php');
    $idt = $_SESSION['idt'];
      if (!$idt) {
          echo "<script>alert('Anda Belum Login!');window.location='../'</script>";
      }else {
        $query_check_talent = mysqli_query($conn, "SELECT * FROM talent WHERE idt = '$idt'") or die(mysql_error());
        if (mysqli_num_rows($query_check_talent) == 0) {
          echo "<script>alert('Maaf Data anda tidak ditemukan di sistem kami');window.history.back();</script>";
        }else{

        }
      }
?>