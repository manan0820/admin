<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-top: 10%;
            margin-left:35%;
            background-image: url("images/wallapaper2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            max-width: 100%;
        }
    </style>
</head>
<body>
<?php
$un=$_POST["un"];
$op=$_POST["op"];
$np=$_POST["np"];
       
        
$servername = "localhost"; 
$username = "root";   
$password = "manan";  
$dbname = "registration"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM regdata WHERE username = '$un' AND password = '$op'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
$sql = "UPDATE regdata
set password = $np where username = '$un'";
 echo"<img src='images/submits.png'>"
    ."<h3 style='margin-left: 180px;'>Submit Successfull</h3>";

}
else{
    echo"<img src='images/wrongdata.jpg'>"
    ."<h3 style='margin-left: 120px;'>Invalid Credentials</h3>";
}
mysqli_close($conn);

?>
</body>
</html>