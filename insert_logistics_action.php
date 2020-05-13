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
$l_id = mysqli_real_escape_string($conn, $_POST["l_id"]);
$comp_name = mysqli_real_escape_string($conn, $_POST["comp_name"]);
$purpose = mysqli_real_escape_string($conn, $_POST["purpose"]);
$cost = mysqli_real_escape_string($conn, $_POST["cost"]);
$l_event_id = mysqli_real_escape_string($conn, $_POST["l_event_id"]);
$sql = "INSERT INTO LOGISTICS VALUES($l_id, '$comp_name', '$purpose', $cost, $l_event_id)";
?>
    
<body>
        <div >
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <p id="info"><?php echo "Logistics data added successfully !\n"; ?></p>
        </div>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>"; ?></p>
            <?php } ?>

        
        <?php $conn->close(); ?>

        <div >
            <a href="insert_logistics.php" class="button" >Add Again</a>
        </div>


</body>
</html>
