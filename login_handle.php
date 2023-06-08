<?php
declare(strict_types=1);
if( isset( $_POST['submit']) ==false){
    header("location:login.php");
    exit();
}

include_once "modules.php";
//doc du lieu nhap ben trang login
$empID = $_POST["empID"];
$password = $_POST["password"];

$user = ModuleDAO::getByid($empID);
if($user==false){
    echo "<b>Invalid Username ! Plz, try again ! </b>";
}
else if($user->password != $password) {
    echo "<b>Invalid Password ! Plz, try again ! </b>";
}
else if($user->role==1){
    header("location:staff.php");
}
else {
    header("location:admin.php");
}

?>