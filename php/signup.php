<?php

if( isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass'])){
    
    include '../db_conn.php';

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&username=".$uname;
   


}