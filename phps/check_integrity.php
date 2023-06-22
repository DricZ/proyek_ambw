<?php
    session_start();

    // header("Refresh: 1; url=$_SERVER[REQUEST_URI]");

    if (isset($_SESSION["id"]) && isset($_SESSION["username"]) && isset($_SESSION["full_name"])){
        $valid = true;
    }else{
        $valid = false;
    }

    $_SESSION['LAST_ACTIVITY'] = time(); // update terakhir aktivitas
    
    session_regenerate_id();

    if(!$valid){
        header("Location: ./login.php?stats=4");
      }
    else{
        $id = $_SESSION["id"];
        $date = date('Y-m-d H:i:s');
        $sqlQ = "UPDATE account SET last_login=:last_login WHERE nik=:id";
        $stmtQ = $conn->prepare($sqlQ);
        $stmtQ->bindParam(":last_login", $date);
        $stmtQ->bindParam(":id", $id);
        $stmtQ->execute();
    
        function format_tanggal($tanggal_mysql) {
            $tanggal = date('d/m/Y', strtotime($tanggal_mysql));
            return $tanggal;
        }
        
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
            // jika lebih dari 1 jam sejak terakhir aktivitas, hapus session
    
            session_unset();
    
            // Destroy the session
            session_destroy();
            header("Location: ./login.php?stats=3");
        }
    }
?>