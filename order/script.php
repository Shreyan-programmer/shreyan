<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
</head>
<body>
    
</body>
</html>

<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "myform";

    $conn = mysqli_connect($server,$username, $pass, $db);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $food_name = $_POST['food'];
    

    $sql = "INSERT INTO `food` (`Name`, `Email`, `Phone_Number`, `Food_name`, `Date of submiting`) VALUES ('$name', '$email', '$phone_number', '$food_name', current_timestamp());;
    ";

    if($conn->query($sql)==true){
        echo "<h1>We will contact you on your email or phone, Then the food will delivered</h1>";
    }
?>
