<?php 

    require_once('db.php');

function login( $username, $password){
    $conn = getConnection();
	$sql = "select * from users where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count >0 ){
        return true;
    }else{
        return false;
    }
}

function signup($user){
    $conn = getConnection();
	$sql = "insert into users values('', '{$user['username']}, '{$user['password']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
?>