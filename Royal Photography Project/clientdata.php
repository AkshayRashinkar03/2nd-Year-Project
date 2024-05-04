<?php

$user $_POST['user'];
$email $_POST['email'];
$mobile $_POST['mobile'];
$message $_POST['message'];

//database connection
$con = new mysqli('localhost','root','clientinfo');
if($con->connect_error){
    die('connection failed' : $con->connect_error);
}else{
    $stmt = $con->preapare("insirt into clientinfo(user, email, mobile, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$user, $email, $mobile, $message);
    $stmt->execute();
    echo "Regestraition Successfully...";
    $stmt->close();
    $con->close();
}





?>