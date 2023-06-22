<?php
session_start();
require "connect.php";

define('TIMEZONE', 'Asia/Jakarta');
date_default_timezone_set(TIMEZONE);

if(isset($_POST["username"]) && isset($_POST["password"])){
    $password = $_POST["username"];
    $username = $_POST["password"];
}

// $substring = substr($_POST["username"], 0, 2);
// $password = $substring . $_POST["password"];

// $username = hash('sha256',$_POST["username"]);
// $password = hash('sha256', $password);
// var_dump($password);

$response = $_POST['g-recaptcha-response'];
$secret = '6LeS0wclAAAAAFIHjtIva-rcge-_fgC_GGjC3Sws';
$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array(
    'secret' => $secret,
    'response' => $response
);

$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query($data),
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
    )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$responseJson = json_decode($result);

if ($responseJson->success == true) {
    // tindakan yang diambil saat reCAPTCHA valid
    $sql = "SELECT * FROM account WHERE username=:username AND password=:password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $_SESSION["id"] = $row["nik"];
        $_SESSION["full_name"] = $row["full_name"];
        $_SESSION["username"] = $_POST["username"];
        $client_ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d H:i:s');
        $id = $row["id"];

        $sqlQ = "UPDATE account SET last_login=:last_login, last_login_ip=:last_login_ip WHERE nik=:id";
        $stmtQ = $conn->prepare($sqlQ);
        $stmtQ->bindParam(':last_login', $date);
        $stmtQ->bindParam(':last_login_ip', $client_ip);
        $stmtQ->bindParam(':id', $id);
        $stmtQ->execute();

        // echo $client_ip;

        // $queryCheckRole = "SELECT b.id AS branch_id, e.full_name, r.role_name, r.id, b.branch_name, e.id AS eID
        // FROM role r 
        // JOIN account a ON r.id = a.role_id
        // JOIN employee e ON e.account_id = a.id
        // JOIN branch b On b.id = e.branch_id
        // WHERE a.id=:id";
        // $stmt = $conn->prepare($queryCheckRole);
        // $stmt->bindParam(':id', $id);
        // $stmt->execute();

        // if ($result_role_name = $stmt->fetch(PDO::FETCH_ASSOC)){
        //     $_SESSION["role_name"] = $result_role_name["role_name"];
        //     $_SESSION["role_id"] = $result_role_name["id"];
        //     $_SESSION["eID"] = $result_role_name["eID"];
        //     $_SESSION["full_name"] = $result_role_name["full_name"];
        //     $_SESSION["branch_id"] = $result_role_name["branch_id"];
        //     $_SESSION["branch_name"] = $result_role_name["branch_name"];
            // echo $_SESSION["role_name"];
            header("Location: ../dashboard.php");
        // }

    } else {
        header("Location: ../login?stats=0");
    }
} else {
    // tindakan yang diambil saat reCAPTCHA tidak valid
    header("Location: ../?alert=reCAPTCHA%20Invalid%20!!");
}

$conn = null;

die();
