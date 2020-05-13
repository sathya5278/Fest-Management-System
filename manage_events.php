<?php
    include "home.php";
?>
   
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/manage_participants_style.css">
</head>

<body>
    <script>
        document.getElementById("profile").innerHTML="";
    </script>
    <div class="search-bar-wrapper">
        <div class="search-bar">
                <form action="" method="post">
                <div>
                    <span>
                        <input name="search" size="30" type="text" placeholder="Search Events..." />
                    </span>

                    <span>
                        <button type="submit" name="submit" id="search">SEARCH</button>
                    </span>
                    </div>
                    <div>
                    <span>
                        <label>By :</label>
                    </span>

                    <span>
                        <select name="by">
                            <option value="event_id">Event ID</option>
                            <option value="name">Name</option>
                        </select>
                    </span>
                    </div>
                </form>
        </div>
    </div>
    
    
    <?php
            //include "home.php";
            include "db.php";
        if (isset($_POST['submit'])) 
        {
            $back_button = TRUE;
            $search = $_POST['search'];
            $by = $_POST['by'];

            if ($by == "name") 
            {
                $sql = "SELECT * FROM EVENTS
                WHERE E_NAME LIKE '%".$search."%'";
            }
            else 
            {
                $sql = "SELECT * FROM EVENTS
                WHERE EVENT_ID = $search";
            }
        }
        else 
        {
            $back_button = FALSE;
            //$sql = "SELECT P_USN,P_NAME,P_MOBILE,BRANCH,P_EVENT_ID FROM PARTICIPANTS";
        }
        if(isset($_POST['submit'])) {
            $result = $conn->query($sql);
            if ($result->num_rows>0) 
            {
            // output data of each row
            $i = 0;    ?>
            
 <section>
            <h1>SEARCH</h1>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <thead>
                            <tr>
                              <th>NO</th>
                              <th>EVENT ID</th>
                              <th>NAME</th>
                              <th>VENUE</th>
                              <th>DATE</th>
                              <th>TIME</th>
                              <th>MANAGE</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
            <?php
            while($row = $result->fetch_assoc()) {
                $i++; ?>
        
              <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                    <tr>
                      <td><?php echo $i; ?> </td>
                      <td><?php echo $row["EVENT_ID"]; ?> </td>
                      <td><?php echo $row["E_NAME"]; ?></td>
                      <td><?php echo $row["E_VENUE"]; ?></td>
                      <td><?php echo $row["E_DATE"]; ?></td>
                      <td><?php echo $row["E_TIME"]; ?></td>
                      <td class="dropdown1">
                            <!--We are dynamically naming each dropdown for every entry in the loop and
                                passing the respective integer value in the dropdown_func().
                                This creates adynamic anchor for each button-->
                          <button onclick="dropdown_func(<?php echo $i ?>)" class="dropbtn1">...</button>
                          <div id="dropdown1<?php echo $i ?>" class="dropdown-content1">
                            <!--Pass the customer trans_id as a get variable in the link-->
                            <a href="modify_events.php?eid=<?php echo $row["EVENT_ID"] ?>">Edit</a>
                            <a href="delete_events.php?eid=<?php echo $row["EVENT_ID"] ?>"
                                 onclick="return confirm('Are you sure?')">Delete</a>
                          </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
</section>

    
    

            <?php }
            } else {  ?>
                <p id="none"> No results found :(</p>
            <?php } }
            if ($back_button) { ?>
                    <div >
                        <button onclick="window.location.href='manage_events.php';" id="search">Go Back</button>
                    </div>
            <?php }
            $conn->close(); ?>
    <script>
    /*  The problem with lots of menus sharing same anchor(dropdown-content) is that clicking on
        any of the buttons produces the same output as clicking the first button. Thus only the
        menu associated with the first button opens. This is BIG PROBLEM when we have lots of menus
        inside the while-loop.
        Hence, solve this problem using dynamic naming to create different anchors for different
        buttons.
        This is a proper solution and NOT a hack/workaround */
    function dropdown_func(i) {
        // Dynamic naming of the dropdown #id
        var doc_id = "dropdown1".concat(i.toString());

        var dropdowns = document.getElementsByClassName("dropdown-content1");
        var i;

        // Close any menus, if opened, before opening a new one
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
        }

        document.getElementById(doc_id).classList.toggle("show");
        return false;
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn1')) {
        var dropdowns = document.getElementsByClassName("dropdown-content1");
        var i;

        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
</body>
</html>
