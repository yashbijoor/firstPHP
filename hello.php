<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

       $server = "localhost";
       $username = "root";
       $password = "";

       $con = mysqli_connect($server, $username, $password);

       if(!$con){
           die("Connection to this database failed due to" . mysqli_connect_error());
       }

       $sql = "INSERT INTO `trip`.`trip`(`username`, `password`, `fname`, `lname`) VALUES ('$user','$pass','$firstName','$lastName')";

       if($con -> query($sql) == true){
        echo "Successfully inserted";
       } else {
           echo "Error";
       }

       $con->close();
    ?>

    <a href="index.html">Return to home</a>
</body>
</html>