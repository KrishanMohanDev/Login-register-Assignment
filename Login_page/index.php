<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment</title>

    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://use.fontawesome.com/1b11fef4da.js"></script>
</head>

<body>
    <div class="background">
        <div class="f-box">
            <div class="b-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="s-icon">
                <a href="#"><img src="./assets/image/fb.png" alt="facebook"></a>
                <a href="#"><img src="./assets/image/gp.png" alt="google"></a>
                <a href="#"><img src="./assets/image/tw.png" alt="twitter"></a>
            </div>
            <form action="" class="input-group" id="login">
                <input type="email" class="input-field" placeholder="Enter email" required>
                <input type="text" class="input-field" placeholder="Enter password" required>
                <input type="checkbox" class="checkbox" required><span>I agree to the <a href="#">terms &
                        conditions</a>.</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form action="/submitForm.php" method="POST" class="input-group" id="register">
                <input name="username" type="text" id="username" class="input-field" placeholder="User Name" required>
                <input name="email" type="email" id="email" class="input-field" placeholder="Enter email" required>
                <input name="password" type="password" id="password" class="input-field" placeholder="Enter password" required>
                <input type="checkbox" class="checkbox" required><span>I am asuring
                    given details are correct.</span>
                <button type="submit" id="signup" class="submit-btn">Sign up</button>
            </form>
        </div>
    </div>

    <script src="./assets/js/main.js"></script>
    <script>


    </script>
</body>

</html>