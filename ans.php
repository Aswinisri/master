<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $user_id = $_SESSION["user_id"];
    $user = $_SESSION["first_name"]; 
    $lawyer_id = "Lawyer6571beee182b9";
    $lawyer = "ben";

    // Include database connection code here
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'lawyermanagement';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  
    $stmt = $conn->prepare("INSERT INTO messages (user, user_id, lawyer, lawyer_id, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $user, $user_id, $lawyer, $lawyer_id, $message);

if ($stmt->execute()) {
    echo "<script type='text/javascript'>window.location.href='an.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}
}

$stmt->close();