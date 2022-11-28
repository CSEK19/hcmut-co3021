<?php
    require_once "mvc/utility/utility.php";
    $user = getUserToken();
    if($user != null) {
        if($user["role_id"] == 1) {
            header('Location: http://localhost/bkstore/Home');
        }
        else {
            header('Location: http://localhost/bkstore/admin');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/bkstore/public/css/login.css">
    <title>Login</title>
</head>

<body>

    <form id="form_login" action="http://localhost/bkstore/Login/UserLogin" method="post">
        <h4>SIGN IN</h4>
        <div class="md-form md-outline mt-0">
            <label for="form19">Email</label>
            <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Password...">
        </div>
        <?php 
            if(isset($data["result"])){
                if(!$data["result"])
                    echo '<h6 style="color:red">Email or Password incorrect!!!</h6>';
            }
               
        ?>
        <div>
            <a id="link_register" href="http://localhost/bkstore/Register">Create an account</a>
            <button type="submit" onclick="checkLogin()" name="btnLogin" class="btn btn-primary">Login</button>
            <a id="link_register" href="http://localhost/bkstore/Home">Back to home</a>
        </div>
    </form>

<script type="text/javascript">
    function checkLogin() {
        var email = document.getElementById("form19").value;
        var password = document.getElementById("password").value;
        if(email == '' || password == '') 
          alert("Please fill all forms!!!");
        else if(password.length < 6)
          alert("Password must have at least 6 characters!!!");
    }
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>