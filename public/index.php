<?php

$servername = "db";
$username = "concrete_admin";
$password = "umeO&9Rk26qC0P;d.?[geYeI";
$dbname = "concrete";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<pre>' . var_export($result->fetch_assoc(), true) . '</pre>';
} else {
  echo "0 results";
}
$conn->close();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concrete Confessions</title>
  <link href="/css/output.css" rel="stylesheet">
</head>

<body>
  <p>Confess your sins UEA...</p>
</body>

</html>