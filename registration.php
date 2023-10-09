<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color:skyblue;">Registration Form</title>
    
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-align: center;
    }

    body{
     background: url("images/50.jpg");
     background-size: 280%;
     background-position:  -400px 0px;
    }

    div.main{
        width: 400px;
        margin: 100px auto 0px auto;
    }
    h2{
        text-align: center;
        padding: 20px;
        font-family: sans-serif;

    }
    div.register{
        background-color: rgb(0, 0, 0,0.5);
        width: 100%;
        font-size: 18px;
        border-radius: 10px;
        border: 1px solid rgb(0, 0, 0,0.3);
        box-shadow: 2px 2px 15px rgb(0, 0, 0,0.3);
        color: #fff;
        
    }
    
     form#register{
        margin: 40px;

     }
     
    label{
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
        
    }

    input#name{
        width: 300px;
        border: 1px solid #ddd;
        border-radius: 3px;
        outline: 0;
        padding: 7px;
        background-color: #fff;
        box-shadow:inset 1px 1px 5px rgb(0, 0, 0,0.3);

    }

    input#submit{
        width: 200px;
        padding: 7px;
        font-size: 16px;
        font-family: sans-serif;
        font-weight: 600;
        border-radius: 3px;
        background-color: rgb(250, 100, 0,0.8);
        color: #fff;
        cursor: pointer;
        border: 1px solid rgb(255, 255, 255,0.3);
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        margin: 20px;
    }

    label,span,h2{
        text-shadow: 1px 1px 5px rgb(0, 0, 0,0.3);
    }


</style>

<body>
    <div class="main">
        <div class="register">
            <h2>Register Here</h2>
            <form action="demo.php" method="get">
               <label for="fname">First Name : </label>
               <br>
               <input type="text" name="firstname" id="name" placeholder="Enter Your First Name" required>
               <br><br>

               <label for="lname">Last Name : </label>
               <br>
               <input type="text" name="lastname" id="name" placeholder="Enter Your Last Name" required>
               <br><br>

               <label for="age">Your Age : </label>
               <br>
               <input type="number" name="age" id="name" placeholder="How Old Are You? " required>
               <br><br>

               <label for="email">Email : </label>
               <br>
               <input type="email" name="email" id="name" placeholder="Enter Your Valid Email" required>
               <br><br>

                 
               <label for="password">Password : </label>
               <br>
               <input type="password" name="password" id="name" placeholder="Enter Your Valid password" required>
               <br><br>

                 
               <label for="password">Confirm password : </label>
               <br>
               <input type="password" name="confirmpassword" id="name" placeholder="Confirm - password" required>
               <br><br>

               
               <label for="phone">Phone Number : </label>
               <br>
               <input type="text" name="phonenumber" id="name" placeholder="Enter Your Valid Phone number" required>
               <br><br>


               
               <label for="address">Address : </label>
               <br>
              <textarea name="address" id="address" cols="30" rows="10" required></textarea>
               <br><br>

               <label for="ge">Gender : </label>
              
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                </select>
                &nbsp;&nbsp;&nbsp;
                <br><br>
                
                
               <label for="language">Known language</label>
                <select name="language"  required>
                <option value="" >Select</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Gujarati">Gujarati</option>
                </select>
                &nbsp;&nbsp;&nbsp;
                <br><br>
         
              
        

                <input type="submit" value="Register" name="register" id="submit">
            
                <a href="index.php"></a>
                
                
                
            </form>
        </div>
    </div>
    
    
           
</body>
<script>
                  alert('Regster Here');
             </script>

</html>

 

   