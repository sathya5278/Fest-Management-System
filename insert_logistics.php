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
    <form action="insert_logistics_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the Logistics details :</h1>
        </div>
            
            <div >
                <label>Logistics ID :</label>
                <input name="l_id" size="30" type="number" required />
            </div>
            <br>
        
            <div>
                <label>Company Name :</label>
                <input name="comp_name" size="30" type="text" required />
            </div>
            <br>
        
            <div >
                <label>Purpose :</label>
                <input name="purpose" size="30" type="text" required />
            </div>
            <br>
        
            <div >
                <label>Cost :</label>
                <input name="cost" size="30" type="number" required />
            </div>
            <br>
        
            <div >
                <label>Event ID :</label>
                <input name="l_event_id" size="30" type="number" required />
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
