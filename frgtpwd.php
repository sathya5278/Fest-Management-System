<html>
    <head>
        <title>Password Reset</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/frgtpwd_style.css">
    </head>
   
    <?php
        $passwordErr = $cpasswordErr = $secquesErr = "";
        $password = $cpassword = $secques = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
                include('db.php');
	            $secques=$_POST['secques'];
                $username=$_POST['username'];
                $query = $conn->query("SELECT * FROM appuser WHERE username='$username' AND secques='$secques'");
	
	           if ($query->num_rows == 1)
               {
                   // $_SESSION['username']=$username;
                     $password = test_input($_POST["password"]);   
                    if (!preg_match("/^[\S]{4,8}$/",$password))
                        $passwordErr = "White space not allowed";
                   
                    $cpassword = test_input($_POST["cpassword"]);
                    if (!preg_match("/^[\S]{4,8}$/",$password))
                        $cpasswordErr = "White space not allowed";
                   
                    if($cpasswordErr=="" and $passwordErr=="" and $password==$cpassword)
                    {
                        $sql = "UPDATE appuser SET password='$password' WHERE username='$username'";

                        if (mysqli_query($conn, $sql)) 
                        {
                            echo "Record updated successfully";
                            
                            header("refresh:5;url=index.php");
                        }
                        else 
                        {
                            echo "Error updating record: " . mysqli_error($conn);
                            header("refresh:5");
                            header("Location: frgtpwd.php");
                        }
                        mysqli_close($conn);
                    }
               }
                else
                {
		            echo "Security question cannot be validated";
                    $secquesErr = "Security question cannot be validated";
                }
        
        }
                function test_input($data) 
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
        
    ?>
<body>
      <header>RNS INSTITUTE OF TECHNOLOGY</header>
			<br>
            <br>
            
 
			<nav>
            <h1 id="frgtpwd">Password Reset</h1>
            <br>
                
            <form id="resetform" action="" method="POST">  
                
			<input class = "size_input" id="username" type="text" placeholder="Username" name="username" required> 
            <br><br>
                   
            <!--<div>Security question:</div>  -->
                
            <input class = "size_input"  type="text" placeholder="What is your pet name? "name="secques" required>
            <?php if($secquesErr!=""){ ?>
                <span id="errpassrst">* <?php echo $secquesErr; header("refresh: 3");?></span>
            <?php } ?>     
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Reset Password" name="password" required>
            <?php if($passwordErr!=""){ ?>
                <span id="errpassrst">* <?php echo $passwordErr; header("refresh: 3");?></span>
            <?php } ?>   
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Confirm Password" name="cpassword" required>
             <?php if($cpasswordErr!=""){ ?>
                <span id="errpassrst">* <?php echo $cpasswordErr; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
             <input class = "size_button" type="submit" id="submit" value=" Change " >
            </form>
            </nav>
</body>
</html>