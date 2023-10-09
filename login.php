
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body{
        background: #e4e9f7;

    }

    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }
    
    .box{
        background: #fdfdfd;
        display: flex;
        flex-direction: column;
        padding: 25px 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                   0 32px 64px -48px rgba(0, 0, 0, 0.5);
    }

    .form-box{
        width: 450px;
        margin: 0px 10px;

    }

    .form-box header{
        font-weight: 600;
        font-size: 25px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
        margin-bottom: 10px;
    }

    .form-box form .field{
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
    }

    .form-box form .input input{
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    .btn{
        height: 35px;
        background: rgba(76, 68, 182, 0.8);
        border: 0;
        border-radius: 5px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        transition: all .3s;
        margin-top: 10px;
        padding: 0px 10px;

    }

    .btn:hover{
        opacity: 0.82;
    }
     
    .submit{
        width: 100%;

    }

   .link{
    margin-bottom: 15px;
   }


</style>
<center>
<body>
    <div class="container">
        <div class="form form-box">
            <header>Login</header>
            <form action="login1.php" method="post">
                

                <div class="field input">
                    <label for="username">Username: </label>
                    <input type="text" name="Username" id="username" required>
                    
                </div>
                <br>
                <div class="field input">
                    <label for="password">Password: </label>
                    <input type="password" name="Password" id="password" required>

                    
                </div>
                <br>
                <div class="field">

                    <input type="submit" class="btn" name="Submit" id="submit" value="submit" >
                </div>
                <div class="link">
                    Don't Have Account ? <a href="registration.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</center>
</html>

<script>
    alert('Login Here');
</script>
