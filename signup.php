<?php
include 'connect.php';
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsqli = "SELECT * FROM user_data where username = '$username'";
    $result = mysqli_query($conn, $existsqli);
    $num = mysqli_num_rows($result);
    if($num>0)
    {
        $showError = "username already exists";
    }
    else 
    {
        if($password == $cpassword)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $inserData = "INSERT INTO user_data(username, password, tstamp) VALUES 
            ('$username', '$hash', current_timestamp())";

            $result = mysqli_query($conn, $inserData);
            if($result)
            {
                $showAlert = true;
                header("location: login.php");
            }
        } 
        else
        {
            $showError = "password didn't match";
        }   
    }

}

?>

<?php 
    if($showAlert){
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong> You account created successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

    if($showError){
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>error! </strong> '.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script>
        function validation() {
            var result = true;
            var e = document.getElementById('username').value;
            if (e.length < 4) {
                result = false;
            }
            return result; 
        }
    </script>
    <style>
        .form{
            max-width: 600px;
            margin: 30px auto;
            
        }

        .position{
            display: flex;
            align-items: center;
            justify-content: center;
        }


    </style>
  </head>
  <body>
  
      
        
    <?php  require 'nav.php' ?>
    <div class="form">
      <div class="container my-4">
          <h1 class="text-center">Sign up</h1>
      
            <form action="signup.php" method="post" onsubmit=" return validation()">
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>