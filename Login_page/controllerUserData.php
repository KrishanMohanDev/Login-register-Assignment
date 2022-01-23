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
    session_start();
    require "connection.php";


    //if user signup button
    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $insert_data = "INSERT INTO users_data (username, email, password) values('$name', '$email', '$password')";
        $data_check = mysqli_query($con, $insert_data);
        // print all the data from post
        echo "<b>Username:</b>" . $name . "<br>";
        echo "<b>Email:</b>" . $email . "<br>";
        echo "<b>Password:</b>" . $password . "<br>";
    }
    ?>


    <script>
        console.log("Username: ", "<?php echo $_POST['username']; ?>");
        console.log("Email: ", "<?php echo $_POST['email']; ?>");
        console.log("Password: ", "<?php echo $_POST['password']; ?>");
    </script>
</body>

</html>