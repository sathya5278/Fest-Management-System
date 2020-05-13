<?php
    include "home.php";
    include "db.php";
    $l_id = $_GET["l_id"];
    $_SESSION["modify"] = $l_id;
    $result = $conn->query("SELECT * FROM LOGISTICS WHERE L_ID = $l_id");
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
    <form action="modify_logistics_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">EDIT:</h1>
        </div>
            
            <div >
                <label>LOGISTICS ID :</label>
                <input name="l_id" size="30" type="number" value="<?php echo $row["L_ID"];?>"required />
            </div>
            <br>
        
            <div>
                <label>Company Name :</label>
                <input name="comp_name" size="30" type="text" value="<?php echo $row["COMP_NAME"];?>"required />
            </div>
            <br>
            
            <div >
                <label>Purpose :</label>
                <input name="purpose" size="30" type="text" value="<?php echo $row["PURPOSE"];?>"required />
            </div>
            <br>
        
             <div >
                <label>Event ID :</label>
                <input name="cost" size="30" type="number" value="<?php echo $row["COST"];?>"required />
            </div>
            <br>
            <div >
                <label>Event ID :</label>
                <input name="l_event_id" size="30" type="number" value="<?php echo $row["L_EVENT_ID"];?>"required />
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
