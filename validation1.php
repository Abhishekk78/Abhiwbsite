<?php
$unameError = "";
$passError = "";
if(isset($_GET['Submit'])){
    $uname= $_GET['Username'];
    $pass= $_GET['Password'];

if(empty($uname)){
    $unameError = "Name Is Reqired";
}

}
?>