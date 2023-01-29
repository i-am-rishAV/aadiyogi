<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");



extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `blog`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table table-hover align-middle mb-0" style="width:100%>
                
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                            <td>'.$number.'</td>
                            <td>'.$row['title'].'</td>
                            <td ><img src="images/'.$row['image'].'" style="width:200px; height:100px;"></td>
                            <td>
                            <div class="btn-group" role="group"
                            aria-label="Basic outlined example">
                                    <button onclick="editUser('.$row['id'].')" class="btn btn-outline-secondary"><i
                                    class="icofont-edit text-success"></i></button>

                                    <button onclick="deleteUser('.$row['id'].')" class="btn btn-outline-secondary deleterow"><i
                                    class="icofont-ui-delete text-danger"></i></button>
                            </div>
                            </td>
                                                    
                        </tr>';
                            $number++;
                            }

                        
     $data .= '</table';
                       
     
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

            $sql = "INSERT INTO `blog`( `title`,`image` , `content`) VALUES ('$title','$image','$content')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'success';
                        }else{
                            echo mysqli_error($connect);
                        }


    }else{
        echo 'you have choosen incorrect file ("please choose .jpg .jped .png files")';
    }

}
//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `blog` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $serviceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `blog` where `id` = '$serviceid'";
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
    
    $add_content = $_POST['add_content'];
    

    $sql = "UPDATE `blog` SET `title`='$add_title',`content`='$add_content' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>