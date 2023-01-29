<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");
// include("session.php");

extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `trainer`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table table-hover align-middle mb-0" style="width:100%>
                
                            <tr>
                                <th scope="col-1"></th>
                                <th scope="col-1">#id</th>
                                <th scope="col-4">Name</th>
                                <th scope="col-2">Profile Image</th>
                                <th scope="col-4">Action</th>
                            </tr>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                            <td>'.$number.'</td>
                            <td>'.$row['name'].'</td>
                            <td ><img src="images/'.$row['image'].'" style="width:100px; height:100px; border-radius:50%;"></td>
                            
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

                        
     $data .= '</table>';
     echo $data;
                        }
}

// insert code
if(isset($_POST['name']) && isset($_POST['submit']) ){

    
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

            $sql = "INSERT INTO `trainer`( `name`,`image` ) VALUES ('$name','$image')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'success';
                        }else{
                            echo mysqli_error($connect);
                        }


    }else{
        echo 'you have chossen wrong file please choose corect one';
    }

}
//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `trainer` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $serviceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `trainer` where `id` = '$serviceid'";
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

    $add_name = $_POST['add_name'];
    
 
    

    $sql = "UPDATE `trainer` SET `name`='$add_name' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>