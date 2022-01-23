<!-- print hello world! -->
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
// print all the data from post
echo "<b>Username:</b>".$_POST['username']."<br>";
echo "<b>Email:</b>".$_POST['email']."<br>";
echo "<b>Password:</b>".$_POST['password']."<br>";

?>


<script>
    console.log("Username: ","<?php echo $_POST['username']; ?>");
    console.log("Email: ","<?php echo $_POST['email']; ?>");
    console.log("Password: ","<?php echo $_POST['password']; ?>");
</script>
</body>
</html>
