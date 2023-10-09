$id = $_GET['id'];
        $uname = $_GET['username'];
        $pass = $_GET['password'];
        
        
         
     
       $sql = "INSERT INTO `form`(`id`, `username`, `password`) 
       VALUES ('[$id]','[$uname]','[$pass]')";
    
       $result = mysqli_query($con,$sql);

       if($result){
        
        echo "Data Submited";
       }
       else{
        echo "error..";
       }