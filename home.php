<?php    session_start();  ?>

<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
 background-image: url("/img/1.png");
 background-repeat: no-repeat;
 background-size: cover;
 background-attachment: fixed;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1F3DB0;
  position: scroll;
  
}
.active {
  background-color: #109726;
  opacity: 1.0;
  
}
.active:hover {
  background-color: #109726;
  opacity: 1.0;
  
}

li {
  float: left;
  opacity: 0.5;
  
}
li:hover{
  opacity: 1.0;
  
}
li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: white;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #1F3DB0;
  opacity: 1.0;
  
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #1F3DB0;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

    
    
    
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:60%;
  table-layout: fixed;
}
.tbl-content{
  height:260px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
    
.tbl-content11{
  height:100px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}

td[id="1"]{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
  background-color: rgba(255,255,255,0.15);
}

td[id="0"]{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
    
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
 body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
} 
</style>
</head>
<body>

<ul>
  <li class="active"><a href="home.php"><i class="fa fa-fw fa-home"></i> HOME</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-binoculars"></i> VIEW</a>
    <div class="dropdown-content">
      <a href="view_participants.php">Participants</a>
      <a href="view_events.php">Events</a>
      <a href="view_volunteers.php">Volunteers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-plus"></i>REGISTER</a>
    <div class="dropdown-content">
      <a href="insert_participant.php">Participants</a>
      <a href="insert_event.php">Events</a>
      <a href="insert_volunteer.php">Volunteers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-wrench"></i> MANAGE</a>
    <div class="dropdown-content">
      <a href="manage_participants.php">Participants</a>
      <a href="manage_events.php">Events</a>
      <a href="manage_volunteers.php">Volunteers</a>       
    </div>
  </li>
 

  <li class="dropdown">
    <a href="#" class="dropbtn"><i class="fa fa-dollar"></i> LOGISTICS</a>
    <div class="dropdown-content">
      <a href="view_logistics.php">View</a>
      <a href="insert_logistics.php">Add</a>
      <a href="manage_logistics.php">Manage</a>
    </div>
  </li>                                                  
    
 <li >
    <a href="finance.php"><i class="fa fa-fw fa-dollar"></i> FINANCE</a>
  </li>
<!--  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-user"></i> FINANCE</a>
    <div class="dropdown-content">
      <a href="#">View</a>
      <a href="#">Add</a>
      <a href="#">Remove</a>
      <a href="#">Update</a>
    </div>
  </li>  -->
    
  <li >
    <a href="report.php"> REPORT</a>
  </li>
  <li >
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
  </li>
  <li >
    <a href="about.php"><i class="fa fa-fw fa-info"></i> ABOUT</a>
  </li>
  <li style="float: right">
    <a href="#" onclick="confirm_logout()">Log Out <i class="fa fa-fw fa-user-circle"></i></a>
  </li>
 
</ul>

<script>
    function confirm_logout(){
        if(confirm("Are you sure you want to log out?"))
            redirect()
    }
    function redirect(){
        location.replace("index.php")
    }
    </script>
    
    
    
    <?php
        include "db.php";
        $uname = $_SESSION['username'];
        $sql = "SELECT * FROM APPUSER where username = '$uname'";
        $result = $conn->query("SELECT * FROM APPUSER where username = '$uname'");
        $row = $result->fetch_assoc();    
    
        $sql2 = "CALL HOME_OUT(@TOTAL_PARTICIPANTS,@TOTAL_EVENTS,@TOTAL_VOLUNTEERS,@TOTAL_BUDGET_FEST,@TOTAL_EXPENDITURE_LOGISTICS)";
        $sql3 = "SELECT @TOTAL_PARTICIPANTS AS NO_OF_PARTICIPANTS,@TOTAL_EVENTS AS NO_OF_EVENTS,@TOTAL_VOLUNTEERS AS NO_OF_VOLUNTEERS,@TOTAL_BUDGET_FEST AS FEST_BUDGET,@TOTAL_EXPENDITURE_LOGISTICS AS LOGISTICS_EXPENDITURE";
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        $row2 = $result3->fetch_assoc();
        
    ?>
<section id="profile">

     <h1>FEST DETAILS:</h1>
    
  <div class="tbl-content11">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td id="1">No of participants:</td>
          <td id="0"><?php echo $row2["NO_OF_PARTICIPANTS"]; ?></td>
        </tr>
        <tr>
          <td id="1">No of events:</td>
          <td id="0"><?php echo $row2["NO_OF_EVENTS"]; ?></td>
        </tr>
        <tr>
          <td id="1">No of volunteers:</td>
          <td id="0"><?php echo $row2["NO_OF_VOLUNTEERS"]; ?></td>
        </tr>
<!--        <tr>
          <td id="1">Fest budget:</td>
          <td id="0"><?php //echo $row2["FEST_BUDGET"]; ?></td>
        </tr>            -->
        <tr>
          <td id="1">Logistics expenditure:</td>
          <td id="0"><?php echo $row2["LOGISTICS_EXPENDITURE"]; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
    
    
    
     <h1>PROFILE:</h1>
    
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td id="1">Name:</td>
          <td id="0"><?php $nam=$row["NAME"];echo "$nam"; ?></td>
        </tr>
        <tr>
          <td id="1">Usn:</td>
          <td id="0"><?php echo $row["USN"]; ?></td>
        </tr>
        <tr>
          <td id="1">Branch:</td>
          <td id="0"><?php echo $row["BRANCH"]; ?></td>
        </tr>
        <tr>
          <td id="1">Mobile No:</td>
          <td id="0"><?php echo $row["MOBILE"]; ?></td>
        </tr>
        <tr>
          <td id="1">Email:</td>
          <td id="0"><?php echo $row["EMAIL"]; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
    
    
    
    
</body>
</html>
