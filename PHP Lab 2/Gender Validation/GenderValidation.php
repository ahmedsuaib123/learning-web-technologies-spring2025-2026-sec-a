<?php
    $gender="";

    if(isset($_POST['submit'])){
        $gender=$_POST['gender'];
    }


    
?>

<html lang="en">
<head>
    <title>FORM | GENDER Validation</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend> GENDER </legend>

            <input type="radio" name="gender" value="Male" 
            <?php if(isset($_REQUEST['gender']) && $gender=="Male"){ echo "Checked";} ?>> Male 

            <input type="radio" name="gender" value="Female" 
            <?php if(isset($_REQUEST['gender']) && $gender=="Female"){ echo "Checked";} ?>> Female 

            <input type="radio" name="gender" value="Other" 
            <?php if(isset($_REQUEST['gender']) && $gender=="Other"){ echo "Checked";} ?>> Other 
            <hr>
            <input type="submit" name="submit" value="Submit">

        </fieldset>
    </form>

    <?php
        if(isset($_POST['submit']) && $gender!=""){
            echo "Gender: $gender";
        }
    ?>

</body>
</html>