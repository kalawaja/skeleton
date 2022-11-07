
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

# Close the Connection
// The connection will be closed automatically when the script ends. To close the connection before, use the following:

/*
MySQLi Object-Oriented:
$conn->close();
*/
?>