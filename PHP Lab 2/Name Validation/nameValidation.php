<?php
    $name="";

    if(isset($_POST['submit'])){
        $name=$_POST['name'];

        $invalidChar = false;

        for($i = 0; $i < strlen($name); $i++){
            $ch = $name[$i];

            if(!(($ch >= 'A' && $ch <= 'Z') || ($ch >= 'a' && $ch <= 'z') || $ch == '.' || $ch == '-' || $ch == ' ')){
                $invalidChar = true;
                break;
            }
        }

        if($name == ""){
            echo "Cannot be empty!";
        }else if($invalidChar){
            echo "Only a-z, A-Z, dot(.), dash(-) allowed!";
        } 
        else if(!(($name[0] >= 'A' && $name[0] <= 'Z') || ($name[0] >= 'a' && $name[0] <= 'z'))){
            echo "Must start with a letter!";
        } 
    }
?>

<html lang="en">
<head>
    <title> FORM | NAME Validation</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend> NAME </legend>
            <input type="text" name="name" id="name" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>


    <?php
        if(isset($_POST['submit']) && $name!=""){
            echo "Name: $name";
        }
    ?>
</body>
</html>