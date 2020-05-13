<?php
    include "home.php";
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
    <form action="insert_event_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the Event details :</h1>
        </div>
            
            <div >
                <label>Event ID :</label>
                <input name="event_id" size="30" type="number" required />
            </div>
            <br>
        
            <div>
                <label>Event Name :</label>
                <input name="event_name" size="30" type="text" required />
            </div>
            <br>
        
            <div >
                <label>Event Venue :</label>
                <input name="event_venue" size="30" type="text" required />
            </div>
            <br>
        
            <div >
                <label>Event Date :</label>
                <input name="event_date" size="30" type="date" required />
            </div>
            <br>
        
            <div >
                <label>Event Time :</label>
                <input name="event_time" size="30" type="time" required />
            </div>
            <br>
            <br>
            <span >
                <button type="submit">Submit</button>
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
