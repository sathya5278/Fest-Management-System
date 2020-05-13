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
    <form action="insert_participant_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the Participant details :</h1>
        </div>
            
            <div >
                <label>USN :</label>
                <input name="p_usn" size="30" type="text" required />
            </div>
            <br>
        
            <div>
                <label>Name :</label>
                <input name="p_name" size="30" type="text" required />
            </div>
            <br>
            
            <div >
                <label>Mobile No :</label>
                <input name="p_mobile" size="30" type="number" required />
            </div>
            <br>
        
            <div >
                <label>Branch :</label>
                <select name="p_branch">
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ISE">ISE</option>
                    <option value="EEE">EEE</option>
                    <option value="EIE">EIE</option>
                    <option value="ME" >ME </option>           
                </select>
            </div>
            <br>
            <br>
            <div >
                <label>Event ID :</label>
                <input name="p_eventid" size="30" type="number" required />
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
