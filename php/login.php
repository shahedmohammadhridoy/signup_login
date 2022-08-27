<?php
session_start();
if(isset($_POST['uname']) && isset($_POST['pass'])){
    
    include '../db_conn.php';

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = 'uname='.$uname;

    if(empty($uname)){
        $em = "User name is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } elseif(empty($pass)){
        $em = "Password is required";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            
            $id = $user['id'];
            $fname = $user['fname'];
            $username = $user['username'];
            $password = $user['password'];
            $pp = $user['pp'];

            if($username == $uname){
                if(password_verify($pass,$password)){
                    
                    

                }else{
                    $em = "Incorrect User name or password";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }


            } else {
                $em = "Incorrect User name or password";
                header("Location: ../login.php?error=$em&$data");
                exit;
            }
            
        } else {
            $em = "Incorrect User name or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }
        
    }

} else {
    exit;
}