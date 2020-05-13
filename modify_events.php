<?php
    include "home.php";
    include "db.php";
    $eid = $_GET["eid"];
    $_SESSION["modify"] = $eid;
    $result = $conn->query("SELECT * FROM EVENTS WHERE EVENT_ID= $eid");
    $row = $result->fetch_assoc();
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
    <form action="modify_events_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">EDIT:</h1>
        </div>
            
            <div >
                <label>EVENT ID :</label>
                <input name="event_id" size="30" type="number" value="<?php echo $row["EVENT_ID"];?>"required />
            </div>
            <br>
        
            <div>
                <label>Name :</label>
                <input name="e_name" size="30" type="text" value="<?php echo $row["E_NAME"];?>"required />
            </div>
            <br>
            
            <div >
                <label>Venue :</label>
                <input name="e_venue" size="30" type="text" value="<?php echo $row["E_VENUE"];?>"required />
            </div>
            <br>
        
           
            <div >
                <label>Date :</label>
                <input name="e_date" size="30" type="date" value="<?php echo $row["E_DATE"];?>"required />
            </div>
        
            <br>
        
            <div >
                <label>Time:</label>
                <input name="e_time" size="30" type="time" value="<?php echo $row["E_TIME"];?>"required />
            </div>
        
            <br>
            <br>
        
            <span >
                <button type="submit" onclick>Submit</button>
            </span>
            
         
            <span >
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </span>

    </form>
    
    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>
