
/**
 * Created by PhpStorm.
 * User: 1513072
 * Date: 15/03/2016
 * Time: 09:30
 */
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css />"
</head>

<body>
<h1>PHP Login Form with session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>username:</label><br>
        <input type="text" name="username" placeholder="username" />
    <br><br>
        <label>password:</label><br>
        <input type="password" name="password" placeholder="password" />
    <br><br>
        <input type="submit" name="submit" value="login"/>
    </form>
    <div class="erro"><?php ?><?php ?></div>
</div>
</body>
</html>
