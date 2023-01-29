<?php 
include("session.php");
include("connection.php");
?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>class section</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
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
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Class</h3>
                                <div class="col-auto d-flex w-sm-100">


                                    <button type="button" class="btn btn-dark btn-set-task w-sm-100"
                                        data-bs-toggle="modal" data-bs-target="#addclass">
                                        <i class="icofont-plus-circle me-2 fs-6"></i> Add class
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div id="records"></div>









                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>



            <!-- Add class-->
            <div class="modal fade" id="addclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Class <span
                                    style="color:red; padding-left:40px; font-size:20px;">*(required sections)</span>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>

                        <div class="modal-body ">
                            <form id="myform" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Name">Trainer name <span
                                            style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="Name">Yoga name <span
                                            style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="yoganame" id="yoganame"
                                        placeholder="Enter yoga name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Image <span
                                            style="color:red; padding-left:10px;">*</span></label>
                                    <input class="form-control" type="file" name="image" id="image" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">BG Image</label>
                                    <input class="form-control" type="file" name="bgimage" id="bgimage">
                                </div>

                                <div class="mb-3">
                                    <label for="Name">time <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="time" id="time"
                                        placeholder="Enter class time" required>
                                </div>

                                <div class="mb-3">
                                    <label for="Name">week <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="week" id="week"
                                        placeholder="Enter week days" required>
                                </div>


                            </form>



                        </div>
                        <div class="modal-footer">
                            <button type="button" name="submit" class="btn btn-primary"
                                onclick="addrecord()">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>






            <!-- Edit trainer-->
            <div class="modal fade" id="updatetrainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="exampleModalLabel">update class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>

                        <div class="modal-body ">
                            <form id="myform" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="yoganame">Name</label>
                                    <input type="text" class="form-control" name="name" id="update_name"
                                        placeholder="Enter name">
                                </div>

                                <div class="mb-3">
                                    <label for="yoganame">yoga Name</label>
                                    <input type="text" class="form-control" name="yoganame" id="update_yoganame"
                                        placeholder="Enter yoganame">
                                </div>


                                <div class="mb-3">
                                    <label for="Name">time</label>
                                    <input type="text" class="form-control" name="time" id="update_time"
                                        placeholder="Enter class time">
                                </div>

                                <div class="mb-3">
                                    <label for="Name">week</label>
                                    <input type="text" class="form-control" name="week" id="update_week"
                                        placeholder="Enter week days">
                                </div>
                            </form>






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="updatetrainer()">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="hidden" name="" id="hidden_id">

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js-->
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="js/template.js"></script>

    <script src="class.js"></script>

</body>

</html>