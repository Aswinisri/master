<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="an.css">
    <style>
        
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
   
    <section class="msger" style="margin-top:200px; width:1200px;">
        <header class="msger-header">
            <div class="msger-header-title">
                <i class="fas fa-comment-alt"></i> Case Clarification
            </div>
            <div class="msger-header-options">
                <span><i class="fas fa-cog"></i></span>
            </div>
        </header>

        <main class="msger-chat">
            <?php
            // Include database connection code here
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'lawyermanagement';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (!isset($_SESSION["user_id"])) {
                // Redirect to login page or handle the case where user_id is not set
                header("Location: login.php");
                exit();
            }

            $uid = $_SESSION["user_id"];
            $lawyer_id = "Lawyer6571beee182b9"; // Replace with the desired lawyer_id

            // Modify your query to filter messages for the session user and specific lawyer_id
            $sql = "SELECT * FROM messages WHERE (user_id = '$uid' AND lawyer_id = '$lawyer_id') OR (user_id = '$lawyer_id' AND lawyer_id = '$uid')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $data_id = $row["user_id"];
                    $user = $row["user"];
                    $lawyer = $row["lawyer"];
                    $message = $row["message"];

                    if ($uid != $data_id) {
                        echo '
                          <div class="msg left-msg">
                            <div class="msg-bubble">
                              <div class="msg-info">
                                <div class="msg-info-name">' . $lawyer . '</div>
                              </div>
                              <div class="msg-text">
                                ' . $message . '
                              </div>
                            </div>
                          </div>';
                    } elseif ($uid == $data_id) {
                        echo '
                          <div class="msg right-msg">
                            <div class="msg-bubble">
                              <div class="msg-info">
                                <div class="msg-info-name">' . $user . '</div>
                              </div>
                              <div class="msg-text">
                                ' . $message . '
                              </div>
                            </div>
                          </div>';
                    }
                }
            } else {
                die("Error in SQL query: " . mysqli_error($conn));
            }

            mysqli_close($conn);
            ?>
            <!-- Messages will be displayed here -->
        </main>

        <form action="ans.php" method="post" class="msger-inputarea">
            <input type="text" class="msger-input" name="message" placeholder="Enter your message...">
            <button type="submit" class="msger-send-btn">Send</button>
        </form>
    </section>
</body>
</html>
