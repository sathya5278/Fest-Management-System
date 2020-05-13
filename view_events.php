<?php
    include "home.php";
    include "db.php";
    

    $sql = "SELECT event_id,e_name,e_venue,e_date,e_time FROM EVENTS";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/finance_style.css">
</head>

<body>
    <script>
        document.getElementById("profile").innerHTML="";
    </script>
    <?php    if (mysqli_num_rows($result) > 0) {     ?>
<section>
  <h1>EVENTS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>EVENT ID</th>
          <th>NAME</th>
          <th>VENUE</th>
          <th>DATE</th>
          <th>TIME</th>
        </tr>
      </thead>
    </table>
  </div>
        
        
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php      while($row = mysqli_fetch_assoc($result)) {     ?>
        <tr>
          <td><?php echo $row["event_id"]; ?> </td>
          <td><?php echo $row["e_name"]; ?></td>
          <td><?php echo $row["e_venue"]; ?></td>
          <td><?php echo $row["e_date"]; ?></td>
          <td><?php echo $row["e_time"]; ?></td>
        </tr>
        <?php }  ?> 
      </tbody>
    </table>
  </div>
</section>
<?php } else{  ?>
     <h1>EVENTS</h1>
    <br>
    <br>
     <h1>NO DATA FOUND</h1>
<?php }   ?>

<!--   
    <section id="operation">
    <input type="text" name="f_event_id" placeholder="Event ID"><br>
    <input type="text" name="f_s_id" placeholder="Sponsor ID"><br>
    <button type="submit"  ><span style="color:white">DELETE</span></button>
    </section>
-->  
<script>
    $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();  
</script>
</body>
</html>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  