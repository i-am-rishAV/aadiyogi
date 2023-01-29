<?php 
include("session.php");
include("connection.php");

$sql = "SELECT `id` from `trainer`";
$result = $connect->query($sql);
$trainer = mysqli_num_rows($result);


$sql2 = "SELECT `id` from `pose`";
$result2 = $connect->query($sql2);
$pose = mysqli_num_rows($result2);

$sql3 = "SELECT `id` from `blog`";
$result3 = $connect->query($sql3);
$blog = mysqli_num_rows($result3);
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> aadiyogi </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
</head>

<body>

    <div id="mytask-layout" class="theme-indigo">

       <!-- sidebar -->
       <?php include("sidebar.php"); ?>

<!-- main body area -->
<div class="main px-lg-4 px-md-4">

    <!-- Body: Header -->
   <?php include("header.php"); ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                    <a href="trainer.php"
                                            class="d-flex text-decoration-none  ">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i
                                                class="icofont-muscle fs-1"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Total Trainer</div>
                                            <h5 class="mb-0 "><?= $trainer ?></h5>
                                        </div>
                                        <a href="trainer.php" title="view-service"
                                            class="btn btn-link text-decoration-none   rounded-1"><i
                                                class="icofont-hand-drawn-right fs-2 "></i></a>
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                    <a href="pose.php"
                                            class="d-flex text-decoration-none  ">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i
                                                class="icofont-aim fs-1"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Total Pose</div>
                                            <h5 class="mb-0 "><?= $pose ?></h5>
                                        </div>
                                        <a href="pose.php" title="space-used"
                                            class="btn btn-link text-decoration-none  rounded-1"><i
                                                class="icofont-hand-drawn-right fs-2 "></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                    <a href="blog.php"
                                            class="d-flex text-decoration-none  ">
                                        <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i
                                                class="icofont-file-document fs-1"></i></div>
                                        <div class="flex-fill ms-4">
                                            <div class="">Total Blog</div>
                                            <h5 class="mb-0 "><?= $blog ?></h5>
                                        </div>
                                        <a href="blog.php" title="renewal-date"
                                            class="btn btn-link text-decoration-none  rounded-1"><i
                                                class="icofont-hand-drawn-right fs-2 "></i></a>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                    <div class="row g-3 mb-3 row-deck">
                        <div class="col-md-12 col-lg-8 col-xl-7 col-xxl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        
                                        
                                            <h3 class="fw-bold ">Aadiyogi</h3>
                                            <p class="line-height-custom">The AadiYogi Institute, Raipur,Chhattishgarh was founded in 2018 by Shri Anupamji ji. Shri Anupamji ji believed that yoga was not meant exclusively for bearded men living in the mountains, and he wanted to bring it to householders—the men and women who have to work, toil, commute, earn a living, raise children, and fight the battle of life everyday. He wanted to bring it to people living in the town and the city, because he believed that the householder could benefit immensely from this knowledge.</p>

                                               <p> The AadiYogi Institute, where one learnt to live with its simplicity, sincerity, and non-commercial outlook, reaches out to householders and attempts to help them lead happy, healthy, and balanced lives in a world that is constantly throwing up challenges.</p>
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                            <div class="alert alert-primary p-3 mb-0 w-100">
                            <img src="assets/images/task-view.svg" alt="..." class="img-fluid">
                            </div>
                        </div>
                    </div><!-- Row End -->


                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="js/template.js"></script>
</body>

</html>