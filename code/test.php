<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])
){
include ("db_conn.php");
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$data="uname=".$uname;

if(empty($uname)) {
    $em="user name is required";
    header("Location: register.php?error=$em&$data");
    exit;
}else if(empty($pass)) {
    $em="password is required";
    header("Location: register.php?error=$em&$data");
    exit;
}else{
    $sql="SELECT * FROM users WHERE username=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$uname]);

    if($stmt->rowCount()===1){
        $user= $stmt->fetch();

        $username=$user['username'];
        $password=$user['password'];
        $fname=$user['fname'];
        $id=$user['id'];
        if($username===$uname){
            if(password_verify($pass,$password)){
                $_SESSION['id']=$id;
                $_SESSION['fnamae']=$fname;
                header("Location: home.php");
                exit;


            }else{
                $em="incorrect username or password";
                header("Location: register.php?error=$em&$data");
                exit;
            }

        }else{
        $em="incorrect username or password";
        header("Location: register.php?error=$em&$data");
        exit;
    }

    }else{
        $em="incorrect username or password";
        header("Location: register.php?error=$em&$data");
        exit;
    }
}    

}else {
    header("Location: register.php?error=error");
    exit;
}
?>