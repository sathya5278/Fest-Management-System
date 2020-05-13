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
    
    $p_usn = mysqli_real_escape_string($conn, $_POST["p_usn"]);
    $p_name = mysqli_real_escape_string($conn, $_POST["p_name"]);
    $p_mobile = mysqli_real_escape_string($conn, $_POST["p_mobile"]);
    $p_branch = mysqli_real_escape_string($conn, $_POST["p_branch"]);
    $p_eventid = mysqli_real_escape_string($conn, $_POST["p_eventid"]);
    $sql = "UPDATE PARTICIPANTS SET P_USN='$p_usn',P_NAME= '$p_name',P_MOBILE =$p_mobile,BRANCH=' $p_branch',P_EVENT_ID= $p_eventid WHERE P_USN = '$usn'";
?>
    
<body>
        <script>
        document.getElementById("profile").innerHTML="";
        </script>
        <div >
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <p id="info"><?php echo "Participant details updated successfully !\n"; ?></p>
        </div>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>

        
        <?php $conn->close(); ?>

        <div >
            <a href="manage_participants.php" class="button" >MANAGE</a>
        </div>


</body>
</html>
