<?php
    include "home.php";
    include "db.php"
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
$event_name = mysqli_real_escape_string($conn, $_POST["event_name"]);
$event_venue = mysqli_real_escape_string($conn, $_POST["event_venue"]);
$event_time = mysqli_real_escape_string($conn, $_POST["event_time"]);
$event_date = mysqli_real_escape_string($conn, $_POST["event_date"]);
$sql = "INSERT INTO EVENTS VALUES($event_id, '$event_name', '$event_venue',' $event_date', '$event_time')";
?>
    
<body>
        <div >
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <p id="info"><?php echo "Event created successfully !\n"; ?></p>
        </div>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>

        
        <?php $conn->close(); ?>

        <div >
            <a href="insert_event.php" class="button" >Add Again</a>
        </div>


</body>
</html>
