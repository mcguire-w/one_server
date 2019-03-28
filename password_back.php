<?php
     include('connet_db.php');
     header('Access-Control-Allow-Origin:*');
     $user = $_GET['user'];
     $sql_name = "SELECT * FROM `user` where username = '$user'";
     $sql_phone= "SELECT * FROM `user` where phone = '$user'";
     $db = new DB();
     $result_name = $db -> fetch($sql_name,'object');
     $result_phone = $db -> fetch($sql_phone,'object');
     if($result_name){
         $arr = array('code'=>200,'data'=>array('id'=>$result_name->id,'username'=>$result_name->username,"password" =>$result_name->password));
     }else if($result_phone){
         $arr = array('code'=>200,'data'=>array('id'=>$result_phone->id,'username'=>$result_phone->username,"password" =>$result_name->password));
     }else{
         $arr = array('code'=>0);
     }
     echo json_encode($arr);

?>