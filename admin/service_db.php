<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");
// include("session.php");

extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `service`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<div class="col">
                            <div class="card teacher-card">
                                <div class="card-body d-flex">
                                        <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                            <img src="images/'.$row['image'].'" alt=""
                                                class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                                
                                                <div class="star me-2">
                                                    <i class="icofont-star text-warning fs-4"></i>
                                                    <span class="h5"> <kbd>ID:</kbd> '.$number.'</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                            <h6 class="mb-0 mt-2  fw-bold d-block fs-6">'.$row['title'].'</h6>
                                            
                                            <div class="video-setting-icon mt-3 pt-3 border-top">
                                                <p>'.$row['description'].'</p>
                                            </div>

                                            <div class=" d-flex justify-content-end" role="group"
                                            aria-label="Basic outlined example">
                                            <button onclick="editUser('.$row['id'].')" class="btn btn-outline-secondary"><i
                                            class="icofont-edit text-success"></i></button>

                                            <button onclick="deleteUser('.$row['id'].')" class="btn btn-outline-secondary deleterow"><i
                                            class="icofont-ui-delete text-danger"></i></button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>';
                            $number++;
                            }

                        
     $data .= '</div>';
                       
     
     echo $data;
                        }
}

// insert code
if(isset($_POST['title']) && isset($_POST['submit']) ){

    
    $image = $_FILES["image"]["name"];
    $tempimgname = $_FILES["image"]["tmp_name"];
    $last = explode('.',$image);
    $ext = strtolower(end($last));

    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
    //     
    //     
    //     
           move_uploaded_file($tempimgname,"images/$image" );
    //  

            $sql = "INSERT INTO `service`( `title`,`image` , `description`) VALUES ('$title','$image','$des')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'success';
                        }else{
                            echo mysqli_error($connect);
                        }


    }else{
        echo 'images with extension (jpeg, jpg, png) are allowed';
    }

}
//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `service` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $serviceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `service` where `id` = '$serviceid'";
    $fire = mysqli_query($connect,$sql);

      if(!$fire){
        exit(mysqli_query());
      }

        $response = array(); // no need for this but still storing it

        if(mysqli_num_rows($fire)>0){  
            while($row = mysqli_fetch_assoc($fire)){
                $response = $row;
            }
        }
      else{
        $response['status'] = 200; 
        $response['message'] = "data not found";
       }

       echo json_encode($response);  //converting array to json     
}else{
       $response['status'] = 200;
       $response['message'] = "invalid request";
     }


//update codes
if(isset($_POST['add_hidden_id'])){
    $add_id= $_POST['add_hidden_id'];

    $add_title = $_POST['add_title'];
    
    $add_des = $_POST['add_des'];
    

    $sql = "UPDATE `service` SET `title`='$add_title',`description`='$add_des' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>