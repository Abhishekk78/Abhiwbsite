<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
   echo "No Connection";
}

mysqli_select_db($con, 'users');

$user = $_POST['User'];
$email = $_POST['Email'];
$mobile = $_POST['Mobile'];
$comment = $_POST['Comment'];

$query = " insert into  userinfodata (User , Email , Mobile , Comment ) 
values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

echo "$query";

header('location:index.php');

?>