<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>login</h1>
        <form action="do_login.php" method="post" autocomplete="off">
            <div class="txt-field">
                <input type="text" name="user" id="user" required>
                <label for="user">Username</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit">Login</button>
            <a class="forget" href="forget_password.php">Forget Password</a>
            <div class="signup-link">Nat a member ? <a href="register.php">Sign Up</a></div> 
        </form>
    </div>
    
</body>
</html>