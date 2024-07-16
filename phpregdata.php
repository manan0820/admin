<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-top: 7%;
            margin-left: 40%;
            background-image: url("images/jerry.webp");
            background-size: cover;
            background-repeat: no-repeat;
            max-width: 100%;
        }
    </style>
</head>
<body>
<?php
$un=$_POST["un"];
$up=$_POST["up"];
$dob=$_POST["dob"];
$hq=$_POST["hq"];
$hp=$_POST["hp"];


 
        $servername = "localhost"; 
        $username = "root";   
        $password = "manan";  
        $dbname = "registration"; 
        

       
        $conn = new mysqli($servername, $username, $password, $dbname);
       

        $sql = "SELECT * FROM regdata where username = '$un'";
        $result = $conn->query($sql);
         if ($result->num_rows > 0) 
{
        echo "User already Exists";
}
       else{
        $sql = "INSERT INTO regdata
        SELECT '$un','$up','$dob','$hq','$hp' ";

        $conn->query($sql);
        echo "Submit succefully"
        ."<img src='images/submits.png' height='500px' width='500px'>";
       }
          mysqli_close($conn);
    

?>
</body>
</html>