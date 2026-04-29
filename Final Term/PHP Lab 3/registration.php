<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>XCompany - Registration</title>

</head>
<body>
  <div >
  <header>
        <span><b>XCompany</b> </span>
      <nav>
        <a href="home.php"><u>Home</u></a>
        <span >|</span>
        <a href="login.php"><u>Login</u></a>
        <span>|</span>
        <a href="reg.php"><u>Registration</u></a>
      </nav>
    </header>
    <main>
        <fieldset>
            <legend>REGISTRATION</legend>
            <br>
    <form enctype="multipart/form-data"  action="registrationCheck.php" method="post">
       
                <label>Name</label>
                
                    <input type="text" name="name">
                    <br>
                    <br>

                <hr>

                <label>Email</label>
                 <input type="text" name="email" >
                    <br>
                    <hr>
                    
                    <label>User Name</label>
               
                    <input type="text" name="username">
                    <br>
                    <br>
               <hr>


                <label>Password</label>
                
                    <input type="password" name="password">
                    <br>
                    <br>
               <hr>


                <label>Confirm Password</label>
                
                    <input type="password" name="confirmpassword">
                    <br>
                    <br>
                <hr>

           
                <fieldset>
                    <legend name="g">Gender</legend>
                    <input type="radio" name="gender"  value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                    </fieldset>
                    <br>
            <!-- Date of Birth -->
            <fieldset>
            <legend name="dob">Date of Birth</legend>
                
                    <input type="text" name="dob_day" size="2" maxlength="2" > /
                    <input type="text" name="dob_month" size="2" maxlength="2" > /
                    <input type="text" name="dob_year" size="4" maxlength="4"> (dd/mm/yyyy)
                    </fieldset>
                   <br>
                   <br>
                   <hr>

                   <input type="submit" value="Submit">
                   <input type="reset" value="Reset">
                   <br><br>

    </form>
    </fieldset>
    </main>

    <footer>
      Copyright &copy; 2017
    </footer>

  </div>

</body>
</html>