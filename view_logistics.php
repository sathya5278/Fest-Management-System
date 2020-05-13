<?php
    include "home.php";
    include "db.php";
    

    $sql = "SELECT * FROM LOGISTICS";
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
  <h1>LOGISTICS DETAILS:</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>LOGISTICS ID</th>
          <th>COMPANY NAME</th>
          <th>PURPOSE</th>
          <th>COST</th>
          <th>EVENT ID</th>
        </tr>
      </thead>
    </table>
  </div>
        
        
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php      while($row = mysqli_fetch_assoc($result)) {     ?>
        <tr>
          <td><?php echo $row["L_ID"]; ?> </td>
          <td><?php echo $row["COMP_NAME"]; ?></td>
          <td><?php echo $row["PURPOSE"]; ?></td>
          <td><?php echo $row["COST"]; ?></td>
          <td><?php echo $row["L_EVENT_ID"]; ?></td>
        </tr>
        <?php }  ?> 
      </tbody>
    </table>
  </div>
</section>
<?php }  ?>

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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  