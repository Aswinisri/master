<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>User Profile</title>

  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>
<style>
    /*********************************************************************/
/* Bootstrap 4 Multiple Item Carousel */
/*********************************************************************/
/* medium - display 2  */
@media (min-width: 768px) {

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
    transform: translateX(50%);
}

.carousel-inner .carousel-item-left.active,
.carousel-inner .carousel-item-prev {
    transform: translateX(-50%);
}
}

/* large - display 3 */
@media (min-width: 992px) {

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
    transform: translateX(33%);
}

.carousel-inner .carousel-item-left.active,
.carousel-inner .carousel-item-prev {
    transform: translateX(-33%);
}
}

@media (max-width: 768px) {
.carousel-inner .carousel-item>div {
    display: none;
}

.carousel-inner .carousel-item>div:first-child {
    display: block;
}
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
display: flex;
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
transform: translateX(0);
}
  .owl-prev {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938188/left-arrow_rlxamy.png') left center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  left: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
}

.owl-next {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938220/right-arrow_zwe9sf.png') right center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  right: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
}

.owl-prev:hover,
.owl-next:hover {
  opacity: 0.5;
}


/* Owl Carousel */


/* Popup Text */

.white-popup-block {
  background: #FFF;
  padding: 20px 30px;
  text-align: left;
  max-width: 650px;
  margin: 40px auto;
  position: relative;
}

.popuptext {
  display: table;
}
.popuptext p {
  margin-bottom: 10px;
}
.popuptext span {
  font-weight: bold;
  float: right;
}
/* Popup Text */

/* Icon CSS */
.item {
  position: relative;
}
.item i {
  display: none;
  font-size: 4rem;
  color: #FFF;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
}
.item a {
  display: block;
  width: 100%;
}
.item a:hover:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 1;
}
.item a:hover i {
  display: block;
  z-index: 2;
}
  </style>
<style>
  header {
    padding: 0px;
    transition: all 0.4s ease 0s;
    height: 86px;
    background-color: var(--bg-color);
    display: grid;
    align-items: center;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
}
  </style>
	<body style="      background-image: url(images/aa3.jpg);
    background-size: 100%;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center center;">
<!--header-->
<header id="site-header" class="fixed-top" style="background-color:#244065;">

  <div class="container">
      <nav class="navbar navbar-expand-lg stroke p-0">
      <div class="logo">
                        <img style="width:80px; " src="login.png"> <b style="    color: #f0f0f1;">Lawyer Up</b>
                        </div>
          
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="    margin-left: 408px;">
              <ul class="navbar-nav ml-lg-5 mr-lg-auto">
                  <li class="nav-item active">
                      <a class="nav-link"  style="color:white;" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item @@about__active">
                      <a class="nav-link"  style="color:white;" href="chat_app.php">Chat</a>
                  </li> -->
                  <li class="nav-item @@about__active">
                      <a class="nav-link"  style="color:white;" href="notification.php">Notification</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link"  style="color:white;" href="paymentindex.php">Payment</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link"  style="color:white;" href="userprofile.php">Profile</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link"  style="color:white;" href="home.php">Logout</a>
                  </li>
              </ul>

              <!--/search-right-->
              <div class="navbar-nav search-right nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span  style="color:white;" class="fa fa-search"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <div class="search_form">
                      <input type="text" id="searchInput" oninput="filterTable()" placeholder="Search">
                      </div>
                  </div>
              </div>
              <!--//search-right-->
          </div>

         
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<br><br><br><br>
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3" style="max-height: 386px; overflow-y: auto;">
        <!-- block -->
        <!-- <div class="most-recent">
            <div class="title-align mb-4">
                <h3 class="title-left">All Consultation</h3>
           
            </div> -->
            <style>
    .card {
        border-radius: 15px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Adjust shadow as needed */
    }

    .w3l-homeblock1 a.blog-desc {
    margin-left: 76px;
    display: block;
    line-height: 28px;
    font-weight: 700;
    color: var(--heading-color);
    margin-top: 25px;
    margin-bottom: 15px;
    transition: .3s ease;
    -webkit-transition: .3s ease;
    -ms-transition: .3s ease;
    -o-transition: .3s ease;
}

</style>
<div class="container text-center">
        <div class="row mx-auto my-auto">
            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="http://placehold.it/350x180?text=1">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="http://placehold.it/350x180?text=2">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="http://placehold.it/350x180?text=3">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="http://placehold.it/350x180?text=4">
                        </div>
                    </div>
                    
                </div>
                <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<div class="row">
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

    // Query to select all images from the table
    $sql = "SELECT * FROM lawyer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Retrieve the image data
            $image = $row['image'];
            $case = $row['case_handle'];
            $first_name = $row['first_Name'];
            $id = $row['id'];

            // Generate the HTML for each image with Bootstrap card styling
            echo '<div class="col-lg-3 col-md-6 item" style="margin-top: 20px;">';
                 echo '<div class="card" style="    box-shadow: 5px 5px #244065;">';
                       echo '<b class="post-date"   style="  margin-left: 34px;"> ' . ucfirst($first_name) . '</b>';

                         echo ' <div class="card-header p-0 position-relative">';
                                echo '<a href="Aboutlawyer.php?id=' . $id . '">';
                                   echo ' <img style="height:200px;" class="card-img-bottom d-block radius-image" src="data:image/jpeg;base64,' . base64_encode($image) . '"
                                           alt="Card image cap">';
                                 echo '</a>';
                          echo '</div>';
                                echo '   <div class="card-body p-0 blog-details">';
                                echo  '      <a href="#blog-single" class="blog-desc">' . ucwords($case) . ' </a>';
                           echo '  </div>';
            echo '</div>';
            echo '</div>';
            echo '<br>';
           
        }
    } else {
        echo 'No images found in the table.';
    }

    $conn->close();
    ?>
</div>

        </div>
        <!-- //block-->
    </div>
</div>

<!-- start search script -->
<script>
    // Function to filter the table data
    function filterTable() {
        const filterText = document.getElementById('searchInput').value.toLowerCase();
        const tableRows = document.querySelectorAll('.item');

        tableRows.forEach((row) => {
            const caseHandle = row.querySelector('.blog-desc').textContent.toLowerCase();
            const firstName = row.querySelector('.post-date').textContent.toLowerCase();

            if (caseHandle.includes(filterText) || firstName.includes(filterText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>
<!-- end search script -->

<!-- carosal -->
<script>
  $('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  loop: true,
  margin: 50,
  responsiveClass: true,
  nav: true,
  loop: true,
  stagePadding: 100,
  responsive: {
    0: {
      items: 1
    },
    568: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 3
    }
  }
})
$(document).ready(function() {
  $('.popup-youtube').magnificPopup({
    disableOn: 320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true
  });
});
$('.item').magnificPopup({
  delegate: 'a',
});
  </script>
  <!-- end carosal -->
<!-- grids -->
<section class="grids-1 py-5" id="trip" style="    background-color: #2a4974;">
    <div class="container">
        <div class="grids py-lg-5 py-md-4">
            <div class="text-center">
                <h3 class="title-left mb-3" style="    color: aliceblue;">Categories</h3>
            </div>
            <div class="row">
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

                // Query to get distinct values from the case_handle column
                $categoryQuery = "SELECT DISTINCT case_handle FROM lawyer";
                $categoryResult = $conn->query($categoryQuery);

                if ($categoryResult->num_rows > 0) {
                    while ($categoryRow = $categoryResult->fetch_assoc()) {
                        $categoryName = $categoryRow['case_handle'];
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="civillawyer.php?case_handle=<?= urlencode($categoryName) ?>"><?= ucwords($categoryName) ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col">
                            <p>No categories found.</p>
                          </div>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</section>

<!-- //grids -->

<!-- //grids -->




  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <script src="assets/js/jquery-3.3.1.min.js"></script><!-- default jQuery -->

  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner typing text -->
  <script>
    function autoType(elementClass, typingSpeed) {
      var thhis = $(elementClass);
      thhis.css({
        "position": "relative",
        "display": "inline-block"
      });
      thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
      thhis = thhis.find(".text-js");
      var text = thhis.text().trim().split('');
      var amntOfChars = text.length;
      var newString = "";
      thhis.text("|");
      setTimeout(function () {
        thhis.css("opacity", 1);
        thhis.prev().removeAttr("style");
        thhis.text("");
        for (var i = 0; i < amntOfChars; i++) {
          (function (i, char) {
            setTimeout(function () {
              newString += char;
              thhis.text(newString);
            }, i * typingSpeed);
          })(i + 1, text[i]);
        }
      }, 1500);
    }

    $(document).ready(function () {
      // Now to start autoTyping just call the autoType function with the 
      // class of outer div
      // The second paramter is the speed between each letter is typed.   
      autoType(".type-js", 200);
    });
  </script>
  <!-- //script for banner typing text -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- script for carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        margin: 30,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          767: {
            items: 2,
            nav: false
          },
          992: {
            items: 4,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for carousel slider -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.min.js"></script>
<script>
    $('#myCarousel').carousel({
    interval: 2000
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});

    </script>
  </body>

  </html>