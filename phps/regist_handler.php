<?php
    session_start();
    include ('connect.php');
    //dapatkan data user dari form register
    $user= [
    	'full_name' => $_POST['full_name'],
    	'username' => $_POST['username'],
    	'password' => $_POST['password'],
    ];
    //check apakah user dengan username tersebut ada di table users  
    $query = "select * from account where username = ? limit 1";                                                    
    $stmt = $mysqli->stmt_init();                                                                                                                                       
    $stmt->prepare($query);
    $stmt->bind_param('s', $user['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);
    //jika username sudah ada, maka return kembali ke halaman register.
    if($row != null){
    	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
    	$_SESSION['full_name'] = $_POST['full_name'];
    	$_SESSION['password'] = $_POST['password'];
    	header("Location:register.php");
    	return;
    }else{
    	//hash password
    	$password = password_hash($user['password'],PASSWORD_DEFAULT);
    	//username unik. simpan di database.
    	$query = "insert into users (nama, username, password) values  (?,?,?)";
    	$stmt = $mysqli->stmt_init();
    	$stmt->prepare($query);
    	$stmt->bind_param('sss', $user['full_name'],$user['username'],$password);
    	$stmt->execute();
    	$result = $stmt->get_result();
    	var_dump($result);
    	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
    	header("Location:register.php");
    }
    ?>