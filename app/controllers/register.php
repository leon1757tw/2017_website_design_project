<?php
require_once("../model/account.php");

extract($_POST);
$user = new Account();

if(!$user->isUserExist($username)){
    if($password == $passwordCheck){
        $user->username = $username;
        $user->password = $user->encryptPassword($password);
        $user->email = $email;
        $user->phone = $phone;
        if($user->createAccount()){
            echo("Account Create Success!");
            header("Location:");
        } 
        else{
            echo("Request Error! Please Try Again");
            header("Location:");
        }
    }
    else{
        echo("Create Failed! Password Input Error");
        header("Location:");
    }
} 
else{
    echo("Create Failed! User is Already Exists!");
    header("Location:");
}

?>