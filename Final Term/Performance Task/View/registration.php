<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB PORTAL | Registration</title>
</head>
<body>
    <form method="POST" action="authentication.php" enctype="">
        <fieldset>
            <legend> Registration Form </legend>
            Employer Name: <input type="text" name="employeeName" id="employeeName" value=""> <br> <br>
            Company Name: <input type="text" name="companyName" id="companyName" value=""> <br> <br>
            Contact No: <input type="tel" name="contactNo" id="contactNo" value=""> <br> <br>
            User Name: <input type="text" name="username" id="username" value=""> <br> <br>
            Password: <input type="password" name="password" id="password" value=""> <br> <br>
        </fieldset>
        <input type="submit" name="register" value="Register">
    </form>
    <a href="login.php">Login</a>
</body>
</html>