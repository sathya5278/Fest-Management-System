<?php
    session_start();
    //Connect to database
	include('db.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = $conn->query("SELECT * FROM appuser WHERE username='$username' AND password='$password'");
	//Validate the user
	if ($query->num_rows == 1)
    {
        $_SESSION['username']=$username;
        header("location:home.php");
    }
	else{ 
        session_destroy(); ?>
       <script>
           alert("Wrong username or password.");
           window.location="index.php";
        </script>
<?php   }        ?>