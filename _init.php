<?php
  error_reporting(0);
  ini_set('display_errors', 0);

    //Database Connection
        $server = "localhost"; //server location
        $userdb = "root";  //Username for database
        $passdb= "";  //password for database
        $dbname = "agency";  //database name for website
        $conn = mysqli_connect($server, $userdb, $passdb, $dbname);

    //Sign-in client
        if (isset($_POST['login_client'])) {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $query_login_client = mysqli_query($conn, "SELECT * FROM client WHERE username = '$username'") or die(mysqli_error($conn));
            if (mysqli_num_rows($query_login_client) == 0) {
                echo "<script>alert('Kami Tidak Menemukan Data Anda Hubungi Admin!'); document.location='index';</script>";
            }else {
                $data_login_client = mysqli_fetch_assoc($query_login_client);
                if (password_verify($password, $data_login_client['password'])) {
                        $_SESSION['idc']=$data_login_client['idc'];
                        header('location:client/');
                }else {
                    echo "<script>alert('Password Anda Salah'); document.location='signin-client';</script>";
                }
            }
        }

    //Sign-in talent
        if (isset($_POST['login_talent'])) {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $query_login_talent = mysqli_query($conn, "SELECT * FROM talent WHERE username = '$username'") or die(mysqli_error($conn));
            if (mysqli_num_rows($query_login_talent) == 0) {
                echo "<script>alert('Kami Tidak Menemukan Data Anda Hubungi Admin!'); document.location='index';</script>";
            }else {
                $data_login_talent = mysqli_fetch_assoc($query_login_talent);
                if (password_verify($password, $data_login_talent['password'])) {
                        $_SESSION['idt']=$data_login_talent['idt'];
                        header('location:talent/');
                }else {
                    echo "<script>alert('Password Anda Salah'); document.location='signin-talent';</script>";
                }
            }
        }




    //Sign-Up
        $options = ['cost' => 10,];

    //Sign-up Client
        if (isset($_POST['signup_client'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
            $fname = $_POST['name'];
            $email = $_POST['email'];
            $user_client = $email;
            mysqli_query($conn, "INSERT INTO client (`idc`,`fname`,`username`,`password`,`email`,`deskripsi`)
            VALUES (NULL, '$fname','$lname','$user_client','$password','$email','Input Deskripsi ...')");
            header('location:signin-client');
        }


    //Sign-up Talent
        if (isset($_POST['signup_talent'])) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options);
            $fname = $_POST['fname'];
            $lname = $_POST ['lname'];
            $email = $_POST['email'];
            $user_talent= $email;
            mysqli_query($conn, "INSERT INTO talent (`idt`,`name`,`username`,`password`,`email`,`deskripsi`);
            VALUES (NULL, '$fname','$lname','$user_talent','$password','$email','Input Deskripsi ...')");
            header('location:signin-talent');
        }

    //Talent Notifikasi
        $idt = $_SESSION['idt'];
        $query_notifikasi_talent = mysqli_query($conn, "SELECT * FROM notif WHERE idu = '$idt'");

    //Talent Tawaran Project Notifikasi
        $idt = $_SESSION['idt'];
        $query_tawaran_project_notif = mysqli_query($conn, "SELECT * FROM tawaran WHERE idu = '$idt'");

    //Talent Index
        $query_list_job_limit = mysqli_query($conn, "SELECT * FROM job LIMIT 6");

    //Talent List-Job
        $query_list_job = mysqli_query($conn, "SELECT * FROM job");

    //Talent View-Project
        $idj = $_GET['idj'];
        $query_view_project = mysqli_query($conn, "SELECT * FROM job WHERE idj = '$idj'");
        $data_view_project = mysqli_fetch_assoc($query_view_project);

    //Talent List Tawaran Job
        $idt = $_SESSION['idt'];
        $query_list_tawaran = mysqli_query($conn, "SELECT * FROM tawaran WHERE idu = '$idt'");

    //Talent View Tawaran Job
        $query_view_tawaran_tabel = mysqli_query($conn, "SELECT * FROM tawaran WHERE idu = '$idt' AND idj ='$idj'");
        $data_view_tawaran_table = mysqli_fetch_assoc($query_view_tawaran_tabel);
        $query_view_tawaran = mysqli_query($conn, "SELECT * FROM job WHERE idj = '$idj'");
        $data_view_tawaran =mysqli_fetch_assoc($query_view_tawaran);

    //Talent Terima / Tidak Job
    if (isset($_POST['terima'])) {
        $id_tawaran = $_POST['id_tawaran'];
        mysqli_query($conn, "UPDATE tawaran SET twsts='terima' WHERE idt = '$id_tawaran'");
        header("location:tawaran-job");
    }elseif (isset($_POST['tolak']))  {
        $id_tawaran = $_POST['id_tawaran'];
        mysqli_query($conn, "UPDATE tawaran SET twsts='tolak' WHERE idt = '$id_tawaran'");
        header("location:tawaran-job");
    }else {

    }





    //Client List-Job
        $idc = $_SESSION['idc'];
        $query_client_list_project = mysqli_query($conn, "SELECT * FROM job WHERE idc = '$idc'");


    //Client Project Send
        if(isset($_POST['sendproject'])){
          $idc = $_SESSION['idc'];
          $projectname = $_POST['projectname'];
          $projectdescription = $_POST['projectdescription'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $companywebsite = $_POST['companywebsite'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $location = $_POST['location'];
          $dtstart = date("Y-m-d H:i:s", strtotime($_POST["dtstart"]));
          $dtend = date("Y-m-d H:i:s", strtotime($_POST["dtend"]));
          $workday = $_POST['workday'];
          $numday = $_POST['numday'];
          $grandtotal = 0;
            mysqli_query($conn, "INSERT INTO job (`idj`, `idc`, `judul`, `deskripsi`, `phone`, `email`, `start`, `end`,
               `lokasi`, `compweb`, `address`, `city`, `workday`, `numday`, `grandtotal`, `status`)
                VALUES (NULL, '$idc', '$projectname', '$projectdescription', '$phone', '$email', '$dtstart', '$dtend', '$location', '$companywebsite',
                  '$address', '$city', '$workday', '$numday', '$grandtotal', 'pending')");
            $query_add_project_cari = mysqli_query($conn, "SELECT * FROM job WHERE idc='$idc' AND judul='$projectname'");
            $data_add_project_cari = mysqli_fetch_assoc($query_add_project_cari);
            $idj = $data_add_project_cari['idj'];
          header("location:add-project-cekout?idj=$idj");

        }

    // Client Detail/Edit project
      $idj = $_GET['idj'];
      $query_client_detail_project = mysqli_query($conn, "SELECT * FROM job WHERE idj = '$idj'");
      $data_client_detail_project = mysqli_fetch_assoc($query_client_detail_project);

    //Update Project info
      if (isset($_POST['update_project_info'])) {
        $idj = $_GET['idj'];
        $projectname = $_POST['projectname'];
        $projectdescription = $_POST['projectdescription'];
        $address = $_POST['address'];
        $location = $_POST['lokasi'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $companywebsite = $_POST['compweb'];
        mysqli_query($conn, "UPDATE `job` SET `judul`='$projectname', `deskripsi`='$projectdescription', `address`='$address', `lokasi`='$location',
          `phone`='$phone', `email`='$email', `compweb`='$companywebsite' WHERE `idj` ='$idj' ");

      }

    //Client add project cekout
      $query_show_project_on_cekout = mysqli_query($conn, "SELECT * FROM job WHERE idj = '$idj' ");
      $data_show_project_on_cekout = mysqli_fetch_assoc($query_show_project_on_cekout);




?>
