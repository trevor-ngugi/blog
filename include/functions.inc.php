<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result="";
    if(empty($name)||empty($email)||empty($username)||empty($pwd)||empty($pwdRepeat)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result=" ";
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result=" ";
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result=" ";
    if($pwd !==$pwdRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn,$username,$email){
    $sql="SELECT * FROM userss WHERE userssUid=? or userssEmail=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailedfuction");
        exit();

    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;

    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$username,$pwd){
    $sql="INSERT INTO userss (userssName,userssEmail,userssUid,userssPwd)VALUES(?,?,?,?) ;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();

    }

    $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedPwd);
    //mysqli_stmt_bind_param($stmt,"ssss",$name,$username,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../login.php?error=none");
        exit();
    
}

function emptyInputlogin($username,$pwd){
    $result="";
    if(empty($username)||empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function loginUser($conn,$username,$pwd){
    $uidExists=uidExists($conn,$username,$username);

    if($uidExists===false){
        header("location: ../login.php?error=wronglogin");
        exit();

    }
    $pwdHashed=$uidExists["userssPwd"];
    $checkPwd=password_verify($pwd,$pwdHashed);

    if($checkPwd===false){
        header("location: ../login.php?error=wrongloginf");
        exit();

    }
    else if($checkPwd===true){
        session_start();
        $_SESSION["userssid"]=$uidExists["userssId"];
        $_SESSION["userssuid"]=$uidExists["userssUid"];
        header("location: ../index.php?");
        exit();

    }
}
