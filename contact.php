//html
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center; 
        align-items: center;
        height: 100vh; 
    }

    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-container textarea {
        resize: vertical;
    }

    .form-container input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 3px;
    }

    .form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>

    <title>Contact Us Form</title>
    </head>
    <body>
    <div class="form-container">
    <h2>Contact Us</h2>


    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>
        
        <input type="submit" value="Submit">
    </form>
    </div>
    </body>
</html>



<?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['description'];
        
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $database = "contact_us";

        $conn = mysqli_connect($serverName, $userName, $password, $database);
        
        
        $creation_table = "CREATE TABLE IF NOT EXISTS contact_table(
        s_no int not null AUTO_INCREMENT,
        name varchar(15) not null,
        email varchar(30) not null,
        dest text,
        PRIMARY KEY(s_no)
    );";


    mysqli_query($conn, $creation_table);

    if(mysqli_query($conn, $creation_table)){
        // echo "Table created successfully<br>";
    }
    else
    {
        echo "There's a problem".mysqli_error($conn);
    }


    $insert_into = "INSERT INTO contact_table(name,email,dest) values ('$name', '$email', '$desc');";

    mysqli_query($conn, $insert_into);
    if(mysqli_query($conn, $insert_into)){
        // echo "Data inserted into table successfuly<br>";
    }
    else
    {
        echo "There a problem-->".mysqli_error($conn);
    }

    mysqli_close($conn);

    }

?>


