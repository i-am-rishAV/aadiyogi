<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");



extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `class`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table table-hover align-middle mb-0" style="width:100%>
                
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Yoga Name</th>
                                <th scope="col">Teacher Image</th>
                                <th scope="col">class Image</th>
                                <th scope="col">time</th>
                                <th scope="col">week</th>
                                <th scope="col">Action</th>
                            </tr>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                            <td>'.$number.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['yoganame'].'</td>
                            <td ><img src="images/'.$row['image'].'" style="width:80px; height:80px; border-radius:50%;"></td>
                            <td ><img src="images/'.$row['BGimage'].'" style="width:200px; height:100px;"></td>
                            <td>'.$row['time'].'</td>
                            <td>'.$row['week'].'</td>
                            
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
if(isset($_POST['submit']) && isset($_POST['name'])){

    
    $image = $_FILES["image"]["name"];
    $tempimgname = $_FILES["image"]["tmp_name"];
    $last = explode('.',$image);
    $ext = strtolower(end($last));

    $image2 = $_FILES["bgimage"]["name"];
    $tempimgname2 = $_FILES["bgimage"]["tmp_name"];
    $last2 = explode('.',$image2);
    $ext2 = strtolower(end($last2));

    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
    //     
    //     
    //     
           move_uploaded_file($tempimgname,"images/$image" );
           move_uploaded_file($tempimgname2,"images/$image2" );
           
    //  

            $sql = "INSERT INTO `class`( `name`,`yoganame`,`image`,`BGimage`,`time`,`week` ) VALUES ('$name','$yoganame','$image','$image2','$time','$week')";
            $result = $connect->query($sql);

                        if($result){
                            echo 'success';
                        }else{
                            echo mysqli_error($connect);
                        }


    }else{
        echo 'you have chossen file please choose corect';
    }

}
//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `class` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $serviceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `class` where `id` = '$serviceid'";
    $fire = mysqli_query($connect,$sql);

      if(!$fire){
        exit(mysqli_query());
        // $response['status'] = 200;
        // $response['message'] = "oppppps";
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
    $add_yoganame = $_POST['add_yoganame'];
    $add_time = $_POST['add_time'];
    $add_week = $_POST['add_week'];
    
 
    

    $sql = "UPDATE `class` SET `name`='$add_name', `yoganame`='$add_yoganame', `time`= '$add_time', `week`= '$add_week' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>