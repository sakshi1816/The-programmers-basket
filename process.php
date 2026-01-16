<?php 

$email= $_POST['a'];
$query=$_POST['b']; 
$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "pbl";
$conn="";

$conn= mysqli_connect($servername,$username,$db_password,$dbname);

if($conn->connect_error) {
    die("Connection Failed".$conn->connect_error);
}

echo "Connected successfully"."<br>";


    $sql= "INSERT INTO query VALUES ('$email', '$query')";
    $result = mysqli_query($conn,$sql);

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
