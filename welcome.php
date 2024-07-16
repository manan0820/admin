<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login data</title>
    <style>
        body{
            margin-top: 7%;
            margin-left: 40%;
            background-image: url("images/minions.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            max-width: 100%;
        }
        h2{
          color: black;
        }
    </style>
</head>
<body>
<?php
 $nm=$_POST["nm"];
 $pw=$_POST["pw"];

$servername = "localhost";
$username = "root";
$password = "manan";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM regdata where username = '$nm' and password = '$pw' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 echo "<h2>Welcome : ".$nm."</h2>";
 echo"<h3> Want to Change password? <a href='changepassword.html'>Change Now</a></h3>    ";
} else {
 echo "Access denied";
}
$conn->close();
?>
   


    
</body>
</html>