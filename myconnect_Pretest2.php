<?php

// tạo hàm kết nối với CSDL
function getConnect(){
    $host = "localhost:3306";
    $uid = "root";
    $pwd = "";
    $dbName = "phpdb2";
    
    //thiet lap ket noi tu ung dung PHP -> DB Server MySQL
    $cn =  new mysqli($host, $uid, $pwd,$dbName);
    
    //kiem tra
    if($cn->connect_error){
        //ket noi that bai
        echo "<h3> Connect to MySQL failed ! </h3>";
        die ("<p> Loi sai: " . $cn->connect_error);
    }
    return $cn;
}