<?php
// Include the database connection script
include 'db_connect.php';
// Perform an update query
$sql = "UPDATE users SET email = 'john.doe@example.com' WHERE name = 'John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully. Affected rows: " . $conn->affected_rows;
} else {
    echo "Error: " . $conn->error;
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';
// Perform a delete query
$sql = "DELETE FROM users WHERE name = 'John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully. Affected rows: " . $conn->affected_rows;
} else {
    echo "Error: " . $conn->error;
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';
// Perform a query
$sql = "SELECT * FROM non_existent_table";
$result = $conn->query($sql);
if (!$result) {
    echo "Error: " . $conn->error; // Alternative to mysqli_error()
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';
// Perform a query
$sql = "SELECT * FROM non_existent_table";
$result = $conn->query($sql);
if (!$result) {
    echo "Error code: " . $conn->errno; // Fetches the error number
}
// Close the connection
$conn->close();
?>


<?php
// Include the database connection script
include 'db_connect.php';

// Perform a query
$sql = "SELECT * FROM non_existent_table";
$result = $conn->query($sql);
if (!$result) {
    echo "SQLSTATE: " . $conn->sqlstate; // Fetches the SQLSTATE error code
}
// Close the connection
$conn->close();
?>


<?php
// Attempt to connect to the database
$conn = new mysqli("localhost", "invalid_user", "invalid_password", "test_db");
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error; // Alternative to mysqli_connect_error()
}
// Close the connection
$conn->close();
?>


<?php
// Attempt to connect to the database
$conn = new mysqli("localhost", "invalid_user", "invalid_password", "test_db");
if ($conn->connect_error) {
    echo "Connection error code: " . $conn->connect_errno; // Fetches the connection error number
}
// Close the connection
$conn->close();
?>
