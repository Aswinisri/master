<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert email and hashed password into the database
    $sql = "INSERT INTO admin(email, password) VALUES (?, ?)";

    // Check if the query is prepared successfully
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param('ss', $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location:adminhome1.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
