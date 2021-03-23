<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_POST["sub"]))
{
    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $Gender=$_POST["gen"];
    $UserName=$_POST["uname"];
    $Password=$_POST["pswd"];
    $Email=$_POST["email"];
    $RecoveryEmail=$_POST["remail"];
    if(empty($FirstName) or empty($LastName) or empty($Gender) or
    empty($UserName) or empty($Password) or empty($Email) or empty($RecoveryEmail) )
    {
       echo "Please fillup all the informations <br>";
    }
    else{
      echo "Registration successfull <br>";
    }  
}
?>

<form method="POST">

<h1>Registration Form</h1>
<p>Basic Information:</p>
<label>FirstName: <input type="text" name="fname"></label>
<br>
<br>

<label> LastName: <input type="text" name="lname"></label>
<br>
<br>
<label for="gen">Gender:</label>
 <input type="radio" name="gen" id="Male"> 
    <label for="m">Male</label>   
    <input type="radio" name="gen" id="Female"> 
    <label for="f">Female</label>
    <br>
    <br>
    <label> Email: <input type="email" name="email"></label>
<br>
<br>   
<p>User Information</p>

<label> UserName: <input type="text" name="uname"></label>
<br>
<br>
<label> Password: <input type="password" name="pswd"></label>
<br>
<br>
<label> RecoveryEmail: <input type="email" name="remail"></label>
<br>
<br>
<input  type="Submit" name="sub" value="Submit">
</form>
</body>
</html>