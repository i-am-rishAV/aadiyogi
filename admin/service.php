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

    <title>service section</title>
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
              <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Service</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <!-- <button type="button" class="btn btn-dark btn-set-task w-sm-100"
                                        data-bs-toggle="modal" data-bs-target="#addprice"><i
                                            class="icofont-plus-circle me-2 fs-6"></i>Add prices</button> -->

                                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addservice">
                                               <i class="icofont-plus-circle me-2 fs-6"></i> Add Service
                                                   </button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                  <!-- <div id="records"></div> -->

                     
                                            <!-- card start  -->
                                            <div id="records"></div>
                                            <!-- card end  -->

                       
                        
        
                      
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>



            <!-- Add service-->
            <div class="modal fade" id="addservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="exampleModalLabel">Add service <span style="color:red; padding-left:40px; font-size:20px;">*(required sections)</span> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body ">
                            <form id = "myform" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="title">Title <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                                </div>

                                <div class="mb-3">
                                <label for="image" class="form-label">Image <span style="color:red; padding-left:10px;">*</span></label>
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                                
                                <div class="mb-3">
                                    <label for="description">Description1 <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="des" id="des" placeholder="Enter description">
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
          





            <!-- Edit service-->
            <div class="modal fade" id="updateservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="exampleModalLabel">update service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body ">
                                
                                <div class="mb-3">
                                    <label for="title">Title <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="title" id="update_title" placeholder="Enter title">
                                </div>

                                
                                <div class="mb-3">
                                    <label for="description">Description <span style="color:red; padding-left:10px;">*</span></label>
                                    <input type="text" class="form-control" name="des" id="update_des" placeholder="Enter description">
                                </div>
                                
                                
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="updateService()">Save</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="hidden" name="" id="hidden_id">
                                
                            </div>
                        
                        </div>
                    </div>
           </div>




    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="js/template.js"></script>

    <script src="service.js"></script>
</body>

</html>