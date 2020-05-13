<html>
	<head>
		<title>Fest Management System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index_style.css">
	</head>
	<body> 
            
            <!--RNSIT logo has to be inserted-->
            <header>RNS INSTITUTE OF TECHNOLOGY</header>
			<br>
            <br>
            
 
			<nav>
            <h1 id="login">Login</h1>
            <br>
                
            <form id="loginform" action="auth.php" method="POST">  
                
			<input class = "size_input" id="username" type="text" placeholder="Username" name="username" required> 
            <br>
            <br>
			<input class = "size_input" id="password" type="password" placeholder="Password" name="password" required>
            <br>
            <br>   
			<input class = "size_button" type="submit" id="submit" value=" Login " >
            <br>
            <p>Don't have an account?</p>
            <input class = "size_button" type="submit" id="submit" value="Signup" onclick="window.location.href = 'mysignup.php';" >
            <br>
            <br>
                
            <a href="frgtpwd.php" >Forgot password?</a>
                
             </form> 
			</nav>      
          
	</body>
</html>