
<?php
//logout
session_start();
session_destroy();
header('location:home.php');
?>
