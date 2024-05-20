
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
    <title>Tanants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php include'nav.php' ?>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">s_no</th>
                <th scope="col">First Name</th>
                <th scope="col">Last name</th>
                <th scope="col">Property Type</th>
                <th scope="col">Rooms</th>
                <th scope="col">Address</th>
                <th scope="col">State</th>
                <th scope="col">Rent</th>
                <th scope="col">Contact</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                    include'connect.php';
                    $display_data = "SELECT * FROM property_info";
                    $result = mysqli_query($conn, $display_data);
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $sno = $sno + 1;
                        echo "<tr>
                                    <th scope='row'>".$sno."</th>
                                    <td>".$row['f_name']."</td>
                                    <td>".$row['l_name']."</td>
                                    <td>".$row['property_t']."</td>
                                    <td>".$row['bed_room']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['state']."</td>
                                    <td>".$row['rent']."</td>
                                    <td>".$row['contact']."</td>
                                </tr>";
                    }

                ?>
              
            </tbody>
          </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>