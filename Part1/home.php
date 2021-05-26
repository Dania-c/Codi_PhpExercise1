<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
</style>
</head>
<body>


<div style="display:flex;">
    
    <form method="post" autocomplete="on" id="inputs" style="display:grid;width:20%;padding:40px;margin:100px;border:1px solid grey;">
    <input type="text" name="full-name" placeholder="Full Name"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email" autocomplete="off"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="password" name="confirm-pass" placeholder="Confirm your password"><br>
    <input type="tel" name="phone" placeholder="Phone"><br> 
    <input type="date" name="birth" placeholder="Birth-date"><br> 
    <input type="number" name="social-security" placeholder="Social Security"><br>
    <input type="submit">
    </form>
    

    
    <form method="post" action="safe.php" autocomplete="on" id="inputs" style="display:grid;width:30%;padding:40px;margin:100px;border:1px solid grey;">
    <input type="text" name="log-username" placeholder="Username"style="";><br>
    <input type="password" name="log-pass" placeholder="Password"><br>
    <input type="submit" value="Login" id="login">
    
</div>
</body>
</html>
