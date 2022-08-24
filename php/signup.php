<?php

if( isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass'])){
    
    include '../db_conn.php';

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if(empty($fname)){
        $em = "Full name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } elseif (empty($uname)){
        $em = "User name is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } elseif (empty($pass)){
        $em = "Password is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {
        //Hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        if(isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])){

            $img_name = $_FILES['pp']['name'];
            $tmp_name = $_FILES['pp']['tmp_name'];

            

        }

    }
}