<html>
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
 background-image: url("1.png");
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

</style>
</head>
<body>

<ul>
  <li class="active"><a href="#home"><i class="fa fa-fw fa-home"></i> HOME</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-binoculars"></i> VIEW</a>
    <div class="dropdown-content">
      <a href="#">Participants</a>
      <a href="#">Events</a>
      <a href="#">Volunteers</a>
      <a href="#">Teachers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-plus"></i> ADD</a>
    <div class="dropdown-content">
      <a href="#">Participants</a>
      <a href="#">Events</a>
      <a href="#">Volunteers</a>
      <a href="#">Teachers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-wrench"></i> UPDATE</a>
    <div class="dropdown-content">
      <a href="#">Participants</a>
      <a href="#">Events</a>
      <a href="#">Volunteers</a>
      <a href="#">Teachers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-trash"></i> REMOVE</a>
    <div class="dropdown-content">
      <a href="#">Participants</a>
      <a href="#">Events</a>
      <a href="#">Volunteers</a>
      <a href="#">Teachers</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-dollar"></i> LOGISTICS</a>
    <div class="dropdown-content">
      <a href="#">View</a>
      <a href="#">Add</a>
      <a href="#">Remove</a>
      <a href="#">Update</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-user"></i> FINANCE</a>
    <div class="dropdown-content">
      <a href="#">View</a>
      <a href="#">Add</a>
      <a href="#">Remove</a>
      <a href="#">Update</a>
    </div>
  </li>
  <li >
    <a href="#"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
  </li>
  <li >
    <a href="#"><i class="fa fa-fw fa-info"></i> ABOUT</a>
  </li>
  <li style="float: right">
    <a href="#" onclick="confirm_logout()">Log Out <i class="fa fa-fw fa-user-circle"></i></a>
  </li>
 
</ul>
<?php ?>
<script>
    function confirm_logout()
    {
        if(confirm("Are you sure you want to log out?"))
            location.replace("index.php");          
    }
    </script>
</body>
</html>
