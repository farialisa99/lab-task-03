<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>File-Handling-Reg</title>
    <style>

          table,td {
        border: 2px solid black;
        
    }
    </style>
</head>
<body >

  
    <?php
        
        $firstNameErr = $lastNameErr = $emailErr = $genderErr = $userNameErr = $passwordErr = $recoveryEmailErr = "";
        $firstName = $lastName = $email = $gender = $userName = $password = $recoveryEmail = "";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if(empty($_POST['fname'])) 
            {
                $firstNameErr = "Please enter 'First Name'";
            }
            else
            {
                $firstName = $_POST['fname'];
                $count++;
            }

            if(empty($_POST['lname'])) 
            {
                $lastNameErr = "Please enter 'Last Name'";
            }
            else
            {
                $lastName = $_POST['lname'];
                $count++;
            }

            if(empty($_POST['email'])) 
            {
                $emailErr = "Please enter 'Email'";
            }
            else
            {
                $email = $_POST['email'];
                $count++;
            }

         

            if(isset($_POST['gender']))
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }
                
            }


            else {
                $genderErr = "Please select Gender";
            }


            if(empty($_POST['uname'])) 
            {
                $userNameErr = "Please enter 'UserName'";
            }
            else
            {
                $userName = $_POST['uname'];
                $count++;
            }

            if(empty($_POST['password'])) 
            {
                $passwordErr = "Please enter 'Password'";
            }
            else
            {
                $password = $_POST['password'];
                $count++;
            }

            if(empty($_POST['remail'])) 
            {
                $recoveryEmailErr = "Please enter 'Recovery Email'";
            }
            else
            {
                $recoveryEmail = $_POST['remail'];
                $count++;
            }


            if ($count >= 7)
            {
            
		    $arr1 = array('userName' => $userName, 'password' => $password, 'firstName' => $firstName,'lastName' => $lastName, 'email' => $email, 'gender' => $gender, 'recoveryEmail' => $recoveryEmail);
		    $json_encoded_text =  json_encode($arr1); 
            $filepath = "login_data.txt";
            $f = fopen($filepath,'a');
            fwrite($f,$json_encoded_text);
            fwrite($f,"\n");
            fclose($f);


            }
            
        }

    ?>





<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

        <table width="50%" align="center">

            <tr >

                <td colspan="2" align="center">

                    <i>
                    <h2>Basic Information</h2>  

                </td>



            </tr>

            <tr>

                <td width="42%" align="center">

                   <b> <p style="font-size: 15px;">First Name</p>

                </td>

                <td width="50%"align="center">

                    <input type="text" name="fname" value="" placeholder="Type First Name" size="30px">
                    <p style="color:red"><?php echo $firstNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 15px;">Last Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="lname" value="" placeholder="Type Last Name" size="30px" >
                    <p style="color:red"><?php echo $lastNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 15px;">Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="email" id="" value="" placeholder="Type Your Email" size="30px" >
                    <p style="color:red"><?php echo $emailErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td align="center" width="30%">

                <b> <p style="font-size: 15px;">Gender</p>


                </td>

                <td align="center" width="60%">
                    
            <input type="radio" name="gender" value="Male" >  Male 
            <input type="radio" name="gender" value="Female" > Female
            <p style="color:red"><?php echo $genderErr; ?></p>
            


                </td>


                <td width="10%">



                </td>

            </tr>

            <tr>

            </tr>

             <tr >

                <td colspan="2" align="center">

                    <i>
                    <h2>User Account Information</h2>
                    

                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 15px;">UserName</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="uname" value="" placeholder="Type User Name" size="30px">
                    <p style="color:red"><?php echo $userNameErr; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 15px;">Password</p>

                </td>

                <td width="60%"align="center">

                    <input type="password" name="password" value="" placeholder="Type Password" size="30px">
                    <p style="color:red"><?php echo $password; ?></p>

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 15px;">Recovery Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="remail" value="" placeholder="Type Recovery Email" size="30px">
                    <p style="color:red"><?php echo $recoveryEmail; ?></p>

                </td>

                <td width="40%">
                </td>
            </tr>

            <tr height="50px">

                <td align="right"  colspan="3">

                    <input type="submit" name="" value="Submit"> 
                    <input type="reset" name="" value="Reset">

                </td>

            </tr>

        </table>
    </form>   
</body>
</html>