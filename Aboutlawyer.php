
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile Page</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Exploit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="alawyer/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="alawyer/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="alawyer/css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
 <link rel="stylesheet" href="alawyer/css/jquery.gallery.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="alawyer/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Cormorant+Upright:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts --> 
<style>
	
/* CSS */
.button-24 {
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.button-24:hover,
.button-24:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.button-24:active {
  opacity: .5;
}
.stats-grid {
    text-align: center;
    background: #244065;
    padding: 4em 3em;
}
.stats-grid.w3lgrid2 {
    background: #2a4974;
}
.stats-grid.w3lgrid3 {
    background: #244065;
}
.stats-grid.w3lgrid4 {
    background: #2a4974;
}
</style>
</head>
<body> 
	<br><br><br>
<?php include 'navbar.php'; ?>
	
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
    $sql = "SELECT * FROM lawyer WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['first_Name'];
        $lname = $row['last_Name'];
        $email = $row['email'];
        $case = $row['case_handle'];
        $image = $row['image'];
        $city = $row['city'];
        $fees = $row['fees'];
        $exp = $row['practise_Length'];
        $full_address = $row['full_address'];
        $degree = $row['degree'];
        $clg = $row['university_College'];
        $cn = $row['contact_number'];
        $zipcode = $row['zip_code'];
      
    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?>
	<!-- about -->
	<div id="about" class="about">
		<div class="container">
			<div class="agileits-title">
				<h3>Senior Litigation Attorney</h3>
				<p>MR. <?php echo $name; ?></p>
			</div>
			<div class="w3l-about-grids">
				<div class="col-md-6 w3ls-about-right">
					<img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" class="img-responsive" alt=""> 
				</div>
				<div class="col-md-6 w3ls-about-left">
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>About Me</h5>
							<p>Dedicated to the pursuit of justice,<?php echo $name; ?> is a seasoned attorney 
                                known for their unwavering commitment to clients and the legal profession.
                                 With a wealth of experience spanning <?php echo $exp; ?> years, <?php echo $lname; ?>
                                 has earned a reputation for providing exceptional legal counsel and representation.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-heart" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Expertise:</h5>
							<p>Specializing in <?php echo $case; ?>, <?php echo $name; ?> brings a profound understanding
                                 of the intricacies within this field. Their expertise in <?php echo $case; ?>, 
                                 and they have successfully handled numerous cases 
                                 with diligence and precision.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="agileits-icon-grid">
						<div class="icon-left hvr-radial-out">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Education</h5>
							<p><?php echo $name; ?> holds a   <?php echo $degree; ?>  , earned from
                            <?php echo $clg; ?>. Their academic background, coupled with ongoing professional
                                  development, ensures they stay at the forefront of evolving legal landscapes.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- Stats -->
	<div class="stats">  
		<div class="stats-info agileits-w3layouts">
			<div class="col-sm-3 col-xs-6 stats-grid w3lgrid1">
				<div class="stats-img">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<h5>Area Of Practise</h5>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000' data-delay='.5' data-increment="100"><?php echo $case; ?></div>
			</div>
			<div class="col-sm-3 col-xs-6 stats-grid w3lgrid2">
				<div class="stats-img w3-agileits">
					<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
				</div>
				<h5>City</h5>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8' data-increment="1"><?php echo $city; ?></div>
			</div>
			<div class="col-sm-3 col-xs-6 stats-grid w3lgrid3">
				<div class="stats-img w3-agileits">
					<i class="fa fa-briefcase" aria-hidden="true"></i>
				</div>	
				<h5>Experience</h5> 
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='80000' data-delay='.5' data-increment="100"><?php echo $exp; ?></div>
			</div>
			<div class="col-sm-3 col-xs-6 stats-grid w3lgrid4">
				<div class="stats-img w3-agileits">
					<i class="fa fa-trophy" aria-hidden="true"></i>
				</div>
				<h5>Fees</h5>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='269' data-delay='8' data-increment="1">₹<?php echo $fees; ?></div>
			</div>
			<div class="clearfix"></div>
		</div>  
	</div>
	<!-- //Stats -->   
	<!-- services --> 
	<div id="services" class="services"> 
		<div class="container">   
			<div class="agileits-title">
				<h3>Slots</h3>
				<p>Availability Schedule</p>
			</div>
			<div class="services-agileinfo"> 
				<div class="col-sm-3 col-xs-6 services-w3grids"> 
					<h5>1</h5>
					<h6>10.00 - 11.00AM</h6>
				</div> 
				<div class="col-sm-3 col-xs-6 services-w3grids"> 
					<h5>2</h5>
					<h6>01.00 - 02.00PM</h6>
				</div>
				<div class="col-sm-3 col-xs-6 services-w3grids"> 
					<h5>3</h5>
					<h6>03.00 - 04:00PM</h6>
				</div>
				<div class="col-sm-3 col-xs-6 services-w3grids"> 
					<h5>4</h5>
					<h6>05:00 - 06.00PM</h6>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div> 
	<!-- //services -->  





	<!-- address -->
	<div class="address">
		<div class="container">  
			<div class="address-grids">
				<div class="col-md-6 address-left">
					<!-- HTML !-->

					<h5 style="color:blue;"><a href="book_now.php?id=<?php echo $id; ?>"><button class="button-24" role="button">Ready to hire me?</button>
</a></h5>
					<p>At the core of my practice is a commitment to you, the client. I believe in open communication, transparency, and collaboration. Your goals and concerns are my top priority. I am here to listen, understand, and work tirelessly to achieve the best possible outcome for you.</p>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-w3grids">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p><?php echo $cn; ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-w3grids">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p><?php echo $zipcode; ?> <?php echo $city; ?>,<?php echo $full_address; ?>.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-w3grids">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p><a href="mailto:example@mail.com"><?php echo $email; ?></a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //address -->

	<!-- jarallax -->  
	<script src="alawyer/js/SmoothScroll.min.js"></script> 
	<script src="alawyer/js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="alawyer/js/move-top.js"></script>
	<script type="text/javascript" src="alawyer/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="alawyer/js/bootstrap.js"></script>
</body>
</html>