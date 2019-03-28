<?php
    include('connet_db.php');
    header('Access-Control-Allow-Origin:*');
    $username = $_GET['username'];
    $phone = $_GET['phone'];
    if($username != ''){
        $sql = "SELECT * FROM `user` where username = '$username'";
    }
    if($phone != ''){
        $sql = "SELECT * FROM `user` where phone = '$phone'";
    }
    $db = new DB();
    $result = $db -> fetch($sql,'object');
    if($result){
        $arr = array('code'=>200,"data" => array("id" => $result->id), "msg" => "",'boo'=>'true');
    }else{
        $arr = array("code"=>0, "msg" => "",'boo'=>'false');
    };
    echo json_encode($arr);
?>