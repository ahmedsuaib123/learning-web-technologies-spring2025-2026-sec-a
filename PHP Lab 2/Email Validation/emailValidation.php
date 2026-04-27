<?php
    $email="";

    if(isset($_POST['submit'])){
        $email=$_POST['email'];

        if($email==""){
            echo "Cannot be empty";
        }
    }

?>

<html lang="en">
<head>
    
    <title> FORM | Email Validation </title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend> EMAIL </legend>
            <input type="email" name="email" id="email">

            <hr>

            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php
        if(isset($_POST['submit']) && $email!=""){
            echo "Email: $email";
        }
    ?>
</body>
</html>