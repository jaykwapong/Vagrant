<?php
$con = new mysqli("192.168.100.32", "admin", "password", "fiifi");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{

echo 'Connected to Mysql successfully';
}
?>
<html>
<head>
  <title> Fiifi's website</title>

  <h1> Added changes to test git</h1>
</head>


<body style="background-image: url('background.png');">
    <h1>My first Apache</h1>
  <p> Testing devops skills </p>

</html>