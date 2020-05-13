<?php
    include "home.php";
    include "db.php";
    $id = $_SESSION["modify"];
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
    
    $event_id = mysqli_real_escape_string($conn, $_POST["event_id"]);
    $e_name = mysqli_real_escape_string($conn, $_POST["e_name"]);
    $e_venue = mysqli_real_escape_string($conn, $_POST["e_venue"]);
    $e_date = mysqli_real_escape_string($conn, $_POST["e_date"]);
    $e_time = mysqli_real_escape_string($conn, $_POST["e_time"]);
    $sql = "UPDATE EVENTS SET EVENT_ID=$event_id,E_NAME= '$e_name',E_VENUE = '$e_venue',E_DATE='$e_date',E_TIME = '$e_time' WHERE EVENT_ID = $id";
?>
    
<body>
        <script>
        document.getElementById("profile").innerHTML="";
        </script>
        <div >
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <p id="info"><?php echo "Event details updated successfully !\n"; ?></p>
        </div>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>

        
        <?php $conn->close(); ?>

        <div >
            <a href="manage_events.php" class="button" >MANAGE</a>
        </div>


</body>
</html>
