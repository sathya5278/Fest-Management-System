<?php
    include "home.php";
    include "db.php";
    $usn = $_SESSION["modify"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action_style.css">
    <style>
        p{
            color: papayawhip;
            font-family: sans-serif;
            font-size: 30px;
        }
        .button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
    </style>
</head>

<?php
    
    $v_usn = mysqli_real_escape_string($conn, $_POST["v_usn"]);
    $v_name = mysqli_real_escape_string($conn, $_POST["v_name"]);
    $v_mobile = mysqli_real_escape_string($conn, $_POST["v_mobile"]);
    $v_eventid = mysqli_real_escape_string($conn, $_POST["v_eventid"]);
    $sql = "UPDATE VOLUNTEERS SET V_USN='$v_usn',V_NAME= '$v_name',V_MOBILE =$v_mobile,V_EVENT_ID= $v_eventid WHERE V_USN = '$usn'";
?>
    
<body>
        <script>
        document.getElementById("profile").innerHTML="";
        </script>
        <div >
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <p id="info"><?php echo "Volunteer details updated successfully !\n"; ?></p>
        </div>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>

        
        <?php $conn->close(); ?>

        <div >
            <a href="manage_volunteers.php" class="button" >MANAGE</a>
        </div>


</body>
</html>
