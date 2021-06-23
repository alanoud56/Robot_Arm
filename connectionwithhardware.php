
<!DOCTYPE html>
   <html lang="en">
   <head>
       <title>Engines</title>
   </head>
   <body>
   <?php

  $conn = new mysqli('localhost','root','','robot_arm');

  $stmt=$conn->prepare("SELECT * FROM robotArmAngles ORDER BY ID DESC LIMIT 1");
  $stmt->execute();
  $result = $stmt->get_result();
  while($row=$result->fetch_assoc()){
    echo "Base: ".$row["MOTOR1"]." Shoulder: ".$row["MOTOR2"]." Elbow: ".$row["MOTOR3"]." Wrist: "
     .$row["MOTOR4"]." Gripper: ".$row["MOTOR5"]." Engine: ".$row["MOTOR6"];
  }
?>
