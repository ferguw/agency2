<?php
  include('../_init.php');
    $idc = $_SESSION['idc'];
      if (!$idc) {
          echo "<script>alert('Anda Belum Login!');window.location='../'</script>";
      }else {
        $query_check_client = mysqli_query($conn, "SELECT * FROM talent WHERE idt = '$idc'") or die(mysql_error());
        if (mysqli_num_rows($query_check_client) == 0) {
          echo "<script>alert('Maaf Data anda tidak ditemukan di sistem kami');window.history.back();</script>";
        }else{

        }
      }
?>