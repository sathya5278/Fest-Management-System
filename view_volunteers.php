<?php
    include "home.php";
    include "db.php";
    

    $sql = "SELECT v_usn,v_name,v_mobile,v_event_id FROM VOLUNTEERS";
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
  <h1>VOLUNTEERS</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>USN</th>
          <th>NAME</th>
          <th>MOBILE</th>
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
          <td><?php echo $row["v_usn"]; ?> </td>
          <td><?php echo $row["v_name"]; ?></td>
          <td><?php echo $row["v_mobile"]; ?></td>
          <td><?php echo $row["v_event_id"]; ?></td>
        </tr>
        <?php }  ?> 
      </tbody>
    </table>
  </div>
</section>
<?php } else{  ?>
     <h1>VOLUNTEERS</h1>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  