<html>
	<head>
		<title>Fest Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mysignup_style.css">
	</head>
	<body> 
            <?php session_start(); 
                if(!isset( $_SESSION['nameErr'] ) )
                    $_SESSION["nameErr"] = "";
                if(!isset( $_SESSION['usnErr'] ) )
                    $_SESSION["usnErr"] =  "";
                if(!isset( $_SESSION['branchErr'] ) )
                    $_SESSION["branchErr"] =  "";
                if(!isset( $_SESSION['mobileErr'] ) )
                    $_SESSION["mobileErr"] = "";
                if(!isset( $_SESSION['emailErr'] ) )
                    $_SESSION["emailErr"] = "";
                if(!isset( $_SESSION['usernameErr'] ) )
                    $_SESSION["usernameErr"] = "";
                if(!isset( $_SESSION['passwordErr'] ) )
                    $_SESSION["passwordErr"] =  "";
                if(!isset( $_SESSION['cpasswordErr'] ) )
                    $_SESSION["cpasswordErr"] = "";
                if(!isset( $_SESSION['secquesErr'] ) )
                    $_SESSION["secquesErr"] = "";
        
            ?>
            <!--RNSIT logo has to be inserted-->
            <header>RNS INSTITUTE OF TECHNOLOGY</header>
			<br>
			<nav>
            <h1 id="login">Signup</h1>
            <br>
          
            <form method="post" action="mysignupdb.php"> 
              
                
			<input class = "size_input"  type="text" placeholder="Name" name="name" required > 
             <?php if($_SESSION["nameErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["nameErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
              
			<input class = "size_input"  type="text" placeholder="University Seat No" name="usn" required>
             <?php if($_SESSION["usnErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["usnErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Branch" name="branch" required>
             <?php if($_SESSION["branchErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["branchErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Mobile No" name="mobile" required>
             <?php if($_SESSION["mobileErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["mobileErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Email address" name="email" required>
             <?php if($_SESSION["emailErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["emailErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <input class = "size_input"  type="text" placeholder="Username" name="username" required>
             <?php if($_SESSION["usernameErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["usernameErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <input class = "size_input"  type="password" placeholder="Password" name="password" required>
            <?php if($_SESSION["passwordErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["passwordErr"]; header("refresh: 3");?></span>
            <?php } ?>   
            <br><br>
                
            <input class = "size_input"  type="password" placeholder="Confirm Password" name="cpassword" required>
             <?php if($_SESSION["cpasswordErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["cpasswordErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
                
            <div>Security question:</div>
                
            <input class = "size_input"  type="text" placeholder="What is your pet name? "name="secques" required>
             <?php if($_SESSION["secquesErr"]!=""){ ?>
                <span id="errsignup">* <?php echo $_SESSION["secquesErr"]; header("refresh: 3");?></span>
            <?php } ?>  
            <br><br>
            
          
            <input class = "size_button" type="submit" id="submit" value="Signup" >
    
            </form>
			</nav>      
        
        
        
        
       
	</body>
</html>