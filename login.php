<?php 
include ("admin/connection.php");

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
      
         $sql = "SELECT * from `user` where `username` = '$username' AND `password` = '$password'";
         $fire = $connect->query($sql);


        if(mysqli_num_rows($fire)> 0){

            while( $row = mysqli_fetch_assoc($fire)){
                session_start();
                $_SESSION["username"] = $row["username"];
                header("location:admin/index.php");
            }
        }
         if(!mysqli_num_rows($fire)>0){
            header("location:404error.php");
         }
  }
?>



<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title> Signin</title>
    <link href="img/favicon.ico" rel="icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="admin2/assets/css/my-task.style.min.css">
</head>

<body>



<div id="mytask-layout" class="theme-indigo">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                 <svg  width="4rem" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">My-Task Let's Management Better</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="admin2/assets/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1>Sign in</h1>
                                    <span>to access Admin dashboard.</span>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="admin username" name="username">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Password
                                                
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg" placeholder="***************" name="password">
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center mt-4 bg-primary">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase"   name="login" >logIn</button>
                                </div>
                                
                            </form>
                            <div class="d-flex justify-content-center">
                            <a href="index.php"><button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase">back to homepage</button></a></div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="../assets/bundles/libscripts.bundle.js"></script>

</body>
</html>