<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lawyermanagement";

    // Create connection
    $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if 'id' is set in the URL parameters
    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        // SQL to delete record
        $sql = "DELETE FROM lawyer WHERE id='" . $id . "'";

        if ($con->query($sql) === TRUE) {
            // Set a session variable for success message
            session_start();
            $_SESSION["delete_message"] = "Record deleted successfully";

            // Redirect back to the same page
            header("Location: ".$_SERVER['HTTP_REFERER']);
            exit;
        } else {
            echo "Error deleting record: " . $con->error;
        }
    } else {
        echo "No 'id' parameter provided.";
    }

    // Close connection
    $con->close();
?>
