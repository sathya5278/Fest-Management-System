<?php
    include "home.php";
    include "db.php";
    $usn = $_GET["v_usn"];
    $_SESSION["modify"] = $usn;
    $result = $conn->query("SELECT * FROM VOLUNTEERS WHERE V_USN='$usn'");
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
    <form action="modify_volunteers_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">EDIT:</h1>
        </div>
            
            <div >
                <label>USN :</label>
                <input name="v_usn" size="30" type="text" value="<?php echo $row["V_USN"];?>"required />
            </div>
            <br>
        
            <div>
                <label>Name :</label>
                <input name="v_name" size="30" type="text" value="<?php echo $row["V_NAME"];?>"required />
            </div>
            <br>
            
            <div >
                <label>Mobile No :</label>
                <input name="v_mobile" size="30" type="number" value="<?php echo $row["V_MOBILE"];?>"required />
            </div>
            <br>
        
            <div >
                <label>Event ID :</label>
                <input name="v_eventid" size="30" type="number" value="<?php echo $row["V_EVENT_ID"];?>"required />
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
