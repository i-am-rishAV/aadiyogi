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
        <link href="css/membership.css" rel="stylesheet">
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



        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Membership Form</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <!-- <a href="">Join Now</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="member">
            <div class="wrapper">
                <div class="title">
                  Membership Form
                </div>
                <div class="form" action="memberform.php">
                   <div class="inputfield">
                      <label>First Name</label>
                      <input type="text" class="input" name="fname">
                   </div>  
                    <div class="inputfield">
                      <label>Last Name</label>
                      <input type="text" class="input" name="lname">
                   </div>  
                   <!-- <div class="inputfield">
                      <label>Password</label>
                      <input type="password" class="input">
                   </div>  
                  <div class="inputfield">
                      <label>Confirm Password</label>
                      <input type="password" class="input">
                   </div>  -->
                    <div class="inputfield">
                      <label name="gendername">Gender</label>
                      <div class="custom_select">
                        <select>
                          <option value="" disabled="disabled" selected="selected">Select</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                   </div> 
                   <div class="inputfield">
                    <label name="planname">Plan</label>
                    <div class="custom_select">
                      <select>
                        <option value="" disabled="disabled" selected="selected">Select</option>
                        <option value="BASIC-1999Rs">BASIC-1999Rs</option>
                        <option value="STANDARD-2999">STANDARD-2999</option>
                        <OPtion value="PREMIUM-4999">PREMIUM-4999</OPtion>
                      </select>
                    </div>
                 </div> 
                    <div class="inputfield">
                      <label>Email Address</label>
                      <input type="text" class="input" name="mail">
                   </div> 
                  <div class="inputfield">
                      <label>Phone Number</label>
                      <input type="text" class="input" name="phonenumber">
                   </div> 
                  <div class="inputfield">
                      <label>Address</label>
                      <textarea class="textarea"></textarea>
                   </div> 
                  <div class="inputfield">
                      <label>Postal Code</label>
                      <input type="text" class="input" name="postal">
                   </div> 
                  <div class="inputfield terms">
                      <label class="check">
                        <input type="checkbox" name="terms">
                        <span class="checkmark"></span>
                      </label>
                      <p>Agreed to terms and conditions</p>
                   </div> 
                  <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
                  </div>
                </div>
            </div>
        
        </div>


       

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
