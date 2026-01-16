<?php 

    $name = $_POST['name'];
    $password = $_POST['password'];
    $servername = "localhost";
    $username = "root"; // username of your device
    $db_password = ""; // password for MySQL connection
    $dbname = "pbl"; // database name
    $conn="";

    // create connection
    $conn = mysqli_connect($servername, $username, $db_password, $dbname);

    if ($conn->connect_error)
    {
        die("Connection failed: ".$conn->connect_error);
    }

    echo "Connected successfully"."<br>";


        $sql= "INSERT INTO login_details VALUES ('$name', '$password')";
        $result = mysqli_query($conn,$sql);

    echo "Values inserted successfully";

    exit();

    if($result)
    {
    echo "Values inserted succesfully";

    }
    else
    {
    echo "\nSome error in database creation".$conn->error;
    }

    $conn->close();

?>


