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
    <title>pose section</title>
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
                                <h3 class="fw-bold mb-0">Pose</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    

                                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addclass">
                                               <i class="icofont-plus-circle me-2 fs-6"></i> Add Pose
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
                                <h5 class="modal-title fw-bold" id="exampleModalLabel">Add Pose</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body ">
                            <form id = "myform" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Name">Yoga name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter like this ('Name_Yoga') example -> Hatha_yoga">
                                </div>

    

                                <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image" id="image">
                                </div>
                                
                                
                            </form>
                                
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" name="submit" class="btn btn-primary" onclick="addrecord()">Save</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
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
    <script src="pose.js"></script>

</body>

</html>