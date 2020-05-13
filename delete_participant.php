<?php
    include "home.php";
    include "db.php";
    $usn = $_GET["p_usn"];
    $sql = "DELETE FROM PARTICIPANTS WHERE P_USN = '$usn'";
?>
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insert_event_style.css">
</head>

<body>
    <script>
        document.getElementById("profile").innerHTML="";
    </script>
    <?php 
     if (($conn->query($sql) === TRUE)) { ?>
         <script>
            alert("Deleted record successfully!");
    </script>
     
    <?php } else { ?>
         <script>alert("<?php echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?>");
        </script>
    <?php  
      } 
        $conn->close(); ?>
    <script>
        window.location.href = "home.php";
    </script>
    </body>
</html>