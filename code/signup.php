<?php

if(isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass'])
){
include ("db_conn.php");
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$data="fname=".$fname."uname=".$uname;


if(empty($fname)) {
    $em="Full name is required";
    header("Location: login.php?error=$em&$data");
    exit;

}else if(empty($uname)) {
    $em="user name is required";
    header("Location: login.php?error=$em&$data");
    exit;
}else if(empty($pass)) {
    $em="password is required";
    header("Location: login.php?error=$em&$data");
    exit;
}else{
    $pass=password_hash($pass,PASSWORD_DEFAULT);
    $sql="INSERT INTO users(fname,username,password) VALUES(?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$fname,$uname,$pass]);

    header("Location: login.php?success=your account has been succesfully created");
    exit;

}    

}else {
    header("Location: login.php?error=error");
    exit;
}
