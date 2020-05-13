<?php
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
$f_event_id = mysqli_real_escape_string($conn, $_POST["f_event_id"]);
$f_s_id = mysqli_real_escape_string($conn, $_POST["f_s_id"]);
$budget = mysqli_real_escape_string($conn, $_POST["budget"]);

$sql = "INSERT INTO FINANCE VALUES($f_event_id, $f_s_id, $budget)";
?>
    
<body>
        
            <?php
            if (($conn->query($sql) === TRUE)) { ?>
                <script>
                    alert("Record created successfully.");
                </script>
        
            <?php
            } else { ?>
                <script>
                    alert("Record not inserted.Try again.\n"+"<?php echo $conn->error ?>");
                </script>
            <?php } ?>

        
        <?php $conn->close(); 
              header("refresh:3;url=finance.php");?>

        


</body>
</html>
