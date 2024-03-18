<?php
session_start();
require_once("./db_con/dbCon.php");
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyermanagement";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
<?php include 'navbaradmin.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">

<style>
  .header-area .main-header .main-menu ul li a {
	text-decoration: none;
	border-radius: 35px;
    height: 11px;
    color: #d3d9e5;
    font-weight: 600;
    padding: 39px 28px;
    display: block;
    font-size: 16px;
    -webkit-transition: all .3s ease-out 0s;
    -moz-transition: all .3s ease-out 0s;
    -ms-transition: all .3s ease-out 0s;
    -o-transition: all .3s ease-out 0s;
    transition: all .3s ease-out 0s;
    text-transform: capitalize;
    position: relative;
    font-family: "Josefin Sans", sans-serif;
}
ol, ul, dl {
    margin-top: 0;
    margin-bottom: 0rem;
}
    </style>
   
    
</head>
<body>

	
<div class="container_display">
<style>
table {
    margin-left: -181px;
    width: 133%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
</style>
<body>

<!-- <h2>TR elements define table rows</h2> -->

<div class="container"><br>
    <!-- <h2>Lawyer Management</h2> -->
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>University / College Name</th>
                <th>Degree</th>
                <th>Passing Year</th>
                <th>Full Address</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Practise Length</th>
                <th>Case Handle</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetching data from the database and populating the table
            $res = mysqli_query($con, "SELECT * FROM lawyer");
            while ($row = mysqli_fetch_array($res)) {
                echo '<tr>
                        <td>' . $row['first_Name'] . '</td>
                        <td>' . $row['last_Name'] . '</td>
                        <td>' . $row['contact_number'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['password'] . '</td>
                        <td>' . $row['university_College'] . '</td>
                        <td>' . $row['degree'] . '</td>
                        <td>' . $row['passing_year'] . '</td>
                        <td>' . $row['full_address'] . '</td>
                        <td>' . $row['city'] . '</td>
                        <td>' . $row['zip_code'] . '</td>
                        <td>' . $row['practise_Length'] . '</td>
                        <td>' . $row['case_handle'] . '</td>
                        <td style="background-color: red;">
                            <a style="color: wheat;" href="delete_lawyer.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
</div>
    
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


</body>
</html>