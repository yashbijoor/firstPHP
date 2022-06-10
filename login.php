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

       $server = "localhost";
       $username = "root";
       $password = "";

       $con = mysqli_connect($server, $username, $password);

       if(!$con){
           die("Connection to this database failed due to" . mysqli_connect_error());
       }
       $result;
       $sql = "SELECT `password` FROM `trip`.`trip` WHERE `username`='$user'";
       $result = $con -> query($sql);

       if($result = $pass){
            echo "Successfully logged in";
       } else {
           echo "Error";
       }

       $con->close();
    ?>

    <a href="login.html">Return to home</a>
</body>
</html>