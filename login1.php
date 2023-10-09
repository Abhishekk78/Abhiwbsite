
<?php

  
     
    $servername = "localhost";
    $useraname = "root";
    $password = "";
    $dbname = "loginform";

    $con =  mysqli_connect($servername,$useraname,$password,$dbname);
    
    if(!$con){
        echo "not connected";
    }

   

        if(isset($_POST['Submit'])){
     
        $id =   $_POST['Id'];
        $uname = $_POST['Username'];
        $pass = $_POST['Password'];
       
      
       $sql = "INSERT INTO `userdata`(`Id`, `Username`, `Password`) VALUES ('[$id]','[$uname]','[$pass]')";
    
     
        

       $result= mysqli_query($con,$sql);

       if($result){
        
        echo "Data Submited";
       }
       else{
        echo "error..";
       }
       
    }
    
    ?>
    <script>
        alert('Login Successfully');
    </script>


    <?php

    header('location:index.php');
      
    ?>


    
