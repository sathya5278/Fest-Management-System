<?php
    include "db.php";
    include "home.php";
     $s = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS";
     $s1 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' CSE'";
     $s2 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' ECE'";
     $s3 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' ISE'";
     $s4 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' EEE'";
     $s5 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' EIE'";
     $s6 = "SELECT COUNT(*) AS COUNT FROM PARTICIPANTS WHERE BRANCH=' ME'";
    
  
    $r = $conn->query($s);
   
    $r1 = $conn->query($s1);
    $r2 = $conn->query($s2);
    $r3 = $conn->query($s3);
    $r4 = $conn->query($s4);
    $r5 = $conn->query($s5);
    $r6 = $conn->query($s6);

    $row = $r->fetch_assoc();
    $row1 = $r1->fetch_assoc();
    $row2 = $r2->fetch_assoc();
    $row3 = $r3->fetch_assoc();
    $row4 = $r4->fetch_assoc();
    $row5 = $r5->fetch_assoc();
    $row6 = $r6->fetch_assoc();
 
    $res1 = $row1["COUNT"]/$row["COUNT"]*100;
    $res2 = $row2["COUNT"]/$row["COUNT"]*100;
    $res3 = $row3["COUNT"]/$row["COUNT"]*100;
    $res4 = $row4["COUNT"]/$row["COUNT"]*100;
    $res5 = $row5["COUNT"]/$row["COUNT"]*100;
    $res6 = $row6["COUNT"]/$row["COUNT"]*100;

$dataPoints = array( 
	array("label"=>"COMPUTER SCIENCE ENGINEERING", "symbol" => "CSE","y"=>$res1),
	array("label"=>"ELECTRONICS AND COMMUNICATION ENGINEERING", "symbol" =>  "ECE","y"=>$res2),
	array("label"=>"INFORMATION SCIENCE ENGINEERING", "symbol" => "ISE","y"=>$res3),
	array("label"=>"ELECTRICAL AND ELECTRONICS ENGINEERING", "symbol" => "EEE","y"=>$res4),
	array("label"=>"ELECTRONICS AND INSTRUMENTATION ENGINEERING", "symbol" => "EIE","y"=>$res5),
	array("label"=>"MECHANICAL ENGINEERING", "symbol" => "ME","y"=>$res6),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
    backgroundColor:"transparent",
	animationEnabled: true,
	title: {
		text: "Average Composition of Participants"
   
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} - {y}",
		yValueFormatString: "#,##0.0\"%\"",
		showInLegend: true,
		legendText: "{label} : {y}",
        
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
 <script>
        document.getElementById("profile").innerHTML="";
    </script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>              