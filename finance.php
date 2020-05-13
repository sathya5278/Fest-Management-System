<?php
    include "home.php";
//    include "test/user_navbar.php";                       // --test fail
//    include "test/admin_sidebar.php";
    include "db.php";
    

    $sql = "SELECT f_event_id, f_s_id, budget FROM FINANCE";
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
  <h1>FINANCE</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>EVENT ID</th>
          <th>SPONSOR ID</th>
          <th>BUDGET</th>
        </tr>
      </thead>
    </table>
  </div>
        
        
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php      while($row = mysqli_fetch_assoc($result)) {     ?>
        <tr>
          <td><?php echo $row["f_event_id"]; ?> </td>
          <td><?php echo $row["f_s_id"]; ?></td>
          <td><?php echo $row["budget"]; ?></td>
        </tr>
        <?php }  ?> 
      </tbody>
    </table>
  </div>
</section>

<?php }  ?>
    <form method="post" action="finance_add.php">
    <section id="operation">
    <input type="number" name="f_event_id" placeholder="Event ID"><br>
    <input type="number" name="f_s_id" placeholder="Sponsor ID"><br>
    <input type="number" name="budget" placeholder="Budget"><br>
    <button type="submit" ><span style="color:white">ADD</span></button>
    </section>
    </form>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  