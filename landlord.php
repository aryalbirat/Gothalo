<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landlord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .form{
            max-width: 1100px;
            margin: 30px auto;
            
        }

        .position{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1{
            width: 500px;
            margin: auto;
            padding: 10px;

        }


    </style>
  </head>
  <body>

    <?php require'nav.php' ?>
    <div class="form">
        <div><h1>Register Your Property</h1></div>
        <form class="row g-3 position" action="landlord.php" method="post">
            <div class="col-md-5">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>

            <div class="col-md-5">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>

            <div class="col-md-5">
                <label for="contact_info" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="contact_info" name="contact_info">
            </div>
            <div class="col-md-5">
                <label for="propertyType" class="form-label">Type of property</label>
                <input type="text" class="form-control" id="propertyType" name="propertyType">
            </div>

            <div class="col-md-5">
                <label for="bed_room" class="form-label">No.of bedrooms</label>
                <input type="number" class="form-control" id="bed_room" name="bed_room">
            </div>

            <div class="col-md-5">
                <label for="rent" class="form-label">Rent in NC</label>
                <input type="number" class="form-control" id="rent" name="rent">
            </div>

            <div class="col-7">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
            </div>
            
            <div class="col-md-3" id="state" name="state">
                <label for="state" class="form-label">State</label>
                <select id="state" name="state" class="form-select">
                <option selected>Choose a state</option>
                <option value="1">1. Koshi</option>
                <option value="2">2. Madhesh</option>
                <option value="3">3. Bagmati</option>
                <option value="4">4. Gandaki</option>
                <option value="5">5. Lumbini</option>
                <option value="6">6. Karnali</option>
                <option value="7">7. Sudurpashchim</option>
                </select>
            </div>
            
            <div class="col-12 position">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    agree to terms and conditions
                </label>
                </div>
            </div>
            <div class="col-12 position">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>


<?php

include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact = $_POST['contact_info'];
    $propertyType = $_POST['propertyType'];
    $bed_room = $_POST['bed_room'];
    $rent = $_POST['rent'];
    $address = $_POST['address'];
    $state = $_POST['state'];


    $inserDATA = "INSERT INTO 
    property_info(f_name, l_name, contact, property_t, bed_room, address, rent, state) VALUES 
    ('$first_name', '$last_name', '$contact', '$propertyType', '$bed_room',  '$address', '$rent','$state')";

    $result = mysqli_query($conn, $inserDATA);

    if($result)
    {
        echo 'Data inserted successfuly';
    }
    else
    {
        echo 'cannot inserted data : '.mysqli_error($result);
    }
}



?>