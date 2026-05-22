<?php

include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users(username,password)
VALUES('$username','$password')";

$result = mysqli_query($conn,$query);

if($result)
{
    header("Location: home.php");
}
else
{
    echo "Login Failed";
}

?>