<?php
    session_start();
    
	include('db.php');
	
    $nameErr = $usnErr = $branchErr = $mobileErr = $emailErr = $usernameErr = $passwordErr = $cpasswordErr = $secquesErr = "";
    $name = $usn = $branch = $mobile = $email = $username = $password = $cpassword = $secques = "";

    $flag = 0;

 /*   $name=$_POST['name'];
    $usn=$_POST['usn'];
    $branch=$_POST['branch'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $username=$_POST['username'];
	$password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $secques=$_POST['secques'];                     */

                $name = test_input($_POST["name"]); 
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $nameErr = "Only letters and white space allowed";
                    $_SESSION["nameErr"] =  $nameErr;
                    $flag=1;
                }

                $usn = test_input($_POST["usn"]); 
                if (!preg_match("/^[A-Z0-9]*$/",$usn))
                {
                    $usnErr = "Invalid format";
                    $_SESSION["usnErr"] =  $usnErr;
                    $flag=1;
                }
            
                $branch = test_input($_POST["branch"]);
                if (!preg_match("/^[a-zA-Z]*$/",$branch))
                {
                    $branchErr = "Only letters allowed";
                    $_SESSION["branchErr"] =  $branchErr;
                    $flag=1;
                }
            
                $mobile = test_input($_POST["mobile"]);  
                if (!preg_match("/^[0-9]*$/",$mobile))
                {
                    $mobileErr = "Only numbers allowed";
                    $_SESSION["mobileErr"] = $mobileErr;
                    $flag=1;
                }
            
                $email = test_input($_POST["email"]);  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $emailErr = "Invalid email format";
                    $_SESSION["emailErr"] = $emailErr;
                    $flag=1;
                }
            
                $username = test_input($_POST["username"]);  
                if (!preg_match("/^[a-zA-Z0-9]*$/",$username))
                {
                    $usernameErr = "Only letters and white space allowed";
                    $_SESSION["usernameErr"] = $usernameErr;
                    $flag=1;
                }
                
                $password = test_input($_POST["password"]);   
                if (!preg_match("/^[\S]{4,8}$/",$password))
                {
                    $passwordErr = "White space not allowed";
                    $_SESSION["passwordErr"] =  $passwordErr;
                    $flag=1;
                }
                   
                $cpassword = test_input($_POST["cpassword"]);
                if (!preg_match("/^[\S]{4,8}$/",$password))
                {
                    $cpasswordErr = "White space not allowed";
                    $_SESSION["cpasswordErr"] = $cpasswordErr;
                    $flag=1;
                }
                   
                $secques = test_input($_POST["secques"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $secquesErr = "Only letters and white space allowed";
                    $_SESSION["secquesErr"] = $secquesErr;
                    $flag=1;
                }
            

       

    if($flag==0)
    {
	        $sql = "INSERT INTO APPUSER VALUES('$name', '$usn', '$branch', $mobile, '$email', '$username', '$password', '$secques');";
            if ($conn->query($sql) === TRUE) 
            {
                echo "New record created successfully";
                 header("refresh:5;url=index.php");
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("refresh:5;url=mysignup.php");
                session_unset();
            }
            $conn->close();
    }
    else
    {
        header("refresh:5;url=mysignup.php");
       // session_unset();
    }
	 function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
		
?>


        