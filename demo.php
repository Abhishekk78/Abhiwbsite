<?php

error_reporting(0);

$servername = "localhost";
$useraname = "root";
$password = "";
$dbname = "user1";

$con = new mysqli($servername, $useraname, $password, $dbname);

if (!$con) {
?>
    <script>
        alert("not connected");
    </script>
<?php
}



$id = $_GET['id'];
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$age = $_GET['age'];
$email = $_GET['email'];
$pass = $_GET['password'];
$cpass = $_GET['confirmpassword'];
$ph = $_GET['phonenumber'];
$add = $_GET['address'];
$gen = $_GET['gender'];
$lang = $_GET['language'];



$sql = "INSERT INTO `form`(`id`, `firstname`, `lastname`, `age`, `email`, `password`, `confirmpassword`, `phonenumber`, `address`, `gender`,`language`) 
       VALUES ('[$id]','[$fname]','[$lname]','[$age]','[$email]','[$pass]','[$cpass]','[$ph]','[$add]','[$gen]','[$lang]')";

$result = mysqli_query($con, $sql);

if ($result) {

?>
    <script>
        alert("Data Submited");
    </script>
<?php
} else {
?>
    <script>
        alert("error..");
    </script>
<?php
}


?>
<script>
    alert("Regisrtation Successfully...");
</script>
<?php

header("location:index.php");


?>

