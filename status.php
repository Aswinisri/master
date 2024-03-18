<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel="stylesheet" href="stat/style.css">

</head>
<body>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>

<body class="profile-page">
<?php

// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user ID is provided in the query parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch user details by ID
    $sql = "SELECT * FROM appointment WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['ap_name'];
        $respodent = $row['res_name'];
        $content = $row['content'];
        $postedby = $row['posted_by'];
        $document_name = $row['document_name'];
       

     
    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?> 
    
    <div class="main main-raised" style="margin-top:100px;">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="logo lawyer.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
                        
	                            <h3 class="title"><?php echo $name; ?></h3>
								<h6><?php echo $respodent; ?></h6>
								   </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <p><?php echo $content; ?></p>
                    <i>Posted By - <?php echo $postedby; ?></i>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  Studio
                                </a>
                            </li> -->
                            <li class="nav-item" >
                                                          
                                <a class="nav-link" style="text-decoration:none; " role="tab" href="download_img.php?id=<?php echo $document_name; ?>" download> 
                                <i class="material-icons">download</i>
                                Download
                                </a>


                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    Favorite
                                </a>
                            </li> -->
                          </ul>
                        </div>
    	    	</div>
            </div>
        
          <div class="tab-content tab-space">
            
            
            
          </div>

        
            </div>
        </div>
	</div>
	
	<footer class="footer text-center ">
        <p></p>
    </footer>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


   

</body>
<!-- partial -->
  <script  src="stat/script.js"></script>

</body>
</html>