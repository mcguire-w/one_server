<?php
    include('connet_db.php');
    header('Access-Control-Allow-Origin:*');
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $db = new DB();
    $sql ="INSERT into user (`username`,`password`,`phone`) VALUE ('$username','$password',$phone)";
    $result = $db -> fetch($sql);
    if($result){
        echo $result;
    }else{
        echo $result; 
    }
?>