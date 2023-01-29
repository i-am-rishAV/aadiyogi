<?php 
include("admin/connection.php");

    $sql = "SELECT * from `class`";
    $fire = $connect->query($sql);

    $sql1 = "SELECT * from `price`";
    $fire1 = $connect->query($sql1);

    $sql2 = "SELECT * from `service`";
    $fire2 = $connect->query($sql2);

    $sql3 = "SELECT * from `blog`";
    $fire3 = $connect->query($sql3);

    $sql4 = "SELECT * from `trainer`";
    $fire4 = $connect->query($sql4);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AadiYogi</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>6:00 AM - 9:00 PM</h2>
                                <p>Mon - Sat</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+91 9340023823</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com/AadiYog41777363"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/AadiYogi-104551748941322/"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                                <a href="https://www.youtube.com/channel/UChGvk8Yi5iZ36KLmnRzz9bA/featured"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/aadiyogi002/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">A<span>adi</span>Y<span>ogi</span> </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="price.php" class="nav-item nav-link">Price</a>
                        <a href="class.php" class="nav-item nav-link">Class</a>
                        <a href="team.php" class="nav-item nav-link">Trainer</a>
                        <a href="portfolio.php" class="nav-item nav-link">Pose</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <!-- <a href="single.php" class="dropdown-item">Blog Detail</a> -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Yoga Practice For Good Health</h1>
                            <p style="font-size:x-large">
                                <b>
                                “Yoga does not just change the way we see things, it transforms the person who sees.” 
                                </b>
                            </p>
                            <div class="hero-btn">
                                <a class="btn" href="membershipform.php">Join Now</a>
                                <a class="btn" href="contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/hero.jpg" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Welcome to AadiYogi</h2>
                        </div>
                        <div class="about-text">
                            <p style="font-size:larger">
                                
                       <b>The AadiYogi Institute</b>, Raipur,Chhattishgarh was founded in 2018 by <b>Shri Anupamji</b>.
                            </p>
                            <p style="font-size:larger">
                                 <b>The AadiYogi Institute</b>, where one learnt to live with its simplicity, sincerity, and non-commercial outlook, reaches out to householders and attempts to help them lead happy, healthy, and balanced lives in a world that is constantly throwing up challenges.</p>
                            <p style="font-size:larger">
                              
                            Spearheading the “Yoga for the Householder” movement in the world, the Institute interacts with over a thousand people everyday for training, health benefits and consultations. 
                            </p>
                            <a class="btn" href="about.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
                <div class="container">
                            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                                <p>What we do</p>
                                <h2>Yoga For Health</h2>
                            </div>
                    <div class="row">

                            <?php while($service = mysqli_fetch_assoc($fire2)){?>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="flaticon-workout"></i>
                                </div>
                                <h3><?= $service['title']?></h3>
                                <p style="height: 192px; ; width: 288px;">
                                <?= $service['description']?>
                                </p>
                            </div>
                        </div>

                        <?php } ?>
                </div>
                </div>
        </div>
        <!-- Service End -->


        <!-- Class Start -->
        <div class="class">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Our Classes</p>
                    <h2>Yoga Class Shedule</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="class-filter">
                            <li data-filter="*" class="filter-active">All Classes</li>
                            <li data-filter=".filter-1">Pilates Yoga</li>
                            <li data-filter=".filter-2">Hatha Yoga</li>
                            <li data-filter=".filter-3">Vinyasa yoga</li>
                        </ul>
                    </div>
                </div>
                <div class="row class-container">

                 <?php while($class = mysqli_fetch_assoc($fire)){ ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="class-wrap">
                            <div class="class-img">
                                <img src="admin/images/<?= $class['BGimage']?>" alt="Image">
                            </div>
                            <div class="class-text">
                                <div class="class-teacher">
                                    <img src="admin/images/<?= $class['image']?>" alt="Image">
                                    <h3><?= $class['name']?></h3>
                                    <a href="">+</a>
                                </div>
                                <h2><?= $class['yoganame']?></h2>
                                <div class="class-meta">
                                    <p><i class="far fa-calendar-alt"></i><?= $class['week']?></p>
                                    <p><i class="far fa-clock"></i><?= $class['time']?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>


                </div>
            </div>
        </div>
        <!-- Class End -->
        
        
        <!-- Discount Start -->
        <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount for all Classes</h2>
                </div>
                <div class="container discount-text">
                    <p>
                     <p style="font-size:x-large ;">  If you are Joining Now You will get the <b>30% discount</b>.</p>
                       <p style="font-size:x-large ;" >And We also provide some <b> Free Goodies</b>.  </p>
                    </p>
                    <a class="btn" href="membershipform.php">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Discount End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Package</p>
                    <h2>Yoga Pricing Plan</h2>
                </div>
                <div class="row">

                <?php while($price = mysqli_fetch_assoc($fire1)){ ?>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2><?= $price['title']?></h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>Rs &nbsp; &nbsp;</small>&nbsp;<?= $price['price']?><span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        
                                        <li><?= $price['des1']?></li>
                                        <li><?= $price['des2']?></li>
                                        <li><?= $price['des3']?></li>
                                        <li><?= $price['des4']?></li>
                                        <li><?= $price['des5']?></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="membershipform.php">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>


                
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>Our Client Say!</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p style="height: 144px; width: 298px;" >
                                AadiYogi is a warm, welcoming environment with knowledgeable teachers within a friendly community.


                            </p>
                            <h3>Sakshi Verma</h3>
                            <h4>Founder of Royal buildicon</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p style="height: 144px; width: 298px;">
                               AadiYogi is The Best institude in Raipur . If you're looking for a great traditional neighbourhood  with well trained instructors, AadiYogi the place.
                            </p>
                            <h3>Ramashankar Thakur</h3>
                            <h4>Yoga Teacher At PRSU Raipur</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p style="height: 144px; width: 298px;" >
                                AadiYogi is like a second home to me. The community is so welcoming and the teachers are all fantastic. I enjoy the variety of classes, I can always find a class that suits my mood perfectly.
                            </p>
                            <h3>Rahul Sahu</h3>
                            <h4>Yoga Student At PRSU</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p style="height: 144px; width: 298px;">
                                Walking into AadiYogi institude after a day of work is like coming home, a good place to be. Safe, protective, professional , non-judgemental. Very knowledgeable yogi teachers!! Thank you.


                            </p>
                            <h3>Riya Gaikwad</h3>
                            <h4>Bank Manager At SBI</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Trainer</p>
                    <h2>Expert Yoga Trainer</h2>
                </div>
                <div class="row">

                <?php   while($trainer = mysqli_fetch_assoc($fire4)){ ?>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="admin/images/<?= $trainer['image']?>" alt="Image">
                                <!-- <div class="team-social">
                                     <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                     </div> -->
                            </div>
                            <div class="team-text">
                                <h2><?= $trainer['name']?></h2>
                                <p>Yoga Teacher</p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                  
                    
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Yoga Articles</h2>
                </div>
                <div class="row blog-page">


                <?php while($blog = mysqli_fetch_assoc($fire3)){ ?>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="admin/images/<?= $blog['image']?>" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2> <?= $blog['title']?></h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                    <p><i class="far fa-calendar-alt"></i><?= $blog['created_at']?></p>
                                    
                                </div>
                                <div class= "blog-content">
                                   
                                  <?= $blog['content']?>  
                                   
                                </div>
                                <style>
                                  .blog-content {
                                --max-lines:4;
                                        display: -webkit-box;
                                        overflow:hidden;
                                        -webkit-box-orient: vertical;
                                        -webkit-line-clamp: var(--max-lines);
                            }
                            </style>
                                <a class="btn" href="single-Blog.php?id= <?= $blog['id']?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>



                   
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="index.php" class="footer-logo">A<span>adi</span>Y<span>ogi</span></a>
                        <h3>432 Om Complex , Near P.S. City, Raipur , Chhattishgarh</h3>
                        <div class="footer-menu">
                            <p>+91 9340023823</p>
                            <p>aadiyogi002@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <!-- <a href=""><i class="fab fa-twitter"></i></a> -->
                            <!-- <a href=""><i class="fab fa-facebook-f"></i></a> -->
                            <a href="https://www.youtube.com/channel/UChGvk8Yi5iZ36KLmnRzz9bA/featured"><i class="fab fa-youtube"></i></a>
                            <!-- <a href=""><i class="fab fa-instagram"></i></a> -->
                            <a href="https://twitter.com/AadiYog41777363"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/AadiYogi-104551748941322/"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                            <a href="https://www.instagram.com/aadiyogi002/"><i class="fab fa-instagram"></i></a>
                            <!-- <a href=""><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">AadiYogi</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By Bluechip solution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
