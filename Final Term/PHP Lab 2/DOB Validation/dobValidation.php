<?php
    $day="";
    $month="";
    $year="";

    if(isset($_POST['submit'])){
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        
        if($day=="" || $month=="" || $year==""){
            echo "Cannot be empty";
        } else if($day<1 || $day>31 || $month<1 || $month>12 || $year<1953 || $year>1998){
            echo "Must be valid numbers (day: 0-31, month: 1-12, year: 1953-1998)";
        } 
    }
?>

<html lang="en">
<head>
    <title>FORM | Date Of Birth Validation</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend> DATE OF BIRTH </legend>

            &nbsp;&nbsp;&nbsp; dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br> <br>

            <input type="text" name="day" size="2">  / 
            <input type="text" name="month" size="2">  / 
            <input type="text" name="year" size="4"> 
            <br> 
            <hr>
            <input type="submit" name="submit" value="Submit"> 
        </fieldset>

    </form>

    <?php
        if(isset($_POST['submit']) && $day != "" && $month != "" && $year != ""){
            echo "DOB: $day/$month/$year";
        }
    ?>
</body>
</html>