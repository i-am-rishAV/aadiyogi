<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");
// include("session.php");

extract($_POST);


//display code
if(isset($_POST['readrecord'])){
    $data = '<table class="table table-hover align-middle mb-0" style="width:100%>
                
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Des1</th>
                    <th scope="col">Des2</th>
                    <th scope="col">Des3</th>
                    <th scope="col">Des4</th>
                    <th scope="col">Des5</th>
                    <th scope="col">Action</th>
                </tr>
                ';

                    $display = "SELECT * from `price`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                                <td>'.$number.'</td>
                                <td>'.$row['title'].'</td>
                                <td>'.$row['price'].'</td>
                                <td>'.$row['des1'].'</td>
                                <td>'.$row['des2'].'</td>
                                <td>'.$row['des3'].'</td>
                                <td>'.$row['des4'].'</td>
                                <td>'.$row['des5'].'</td>
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
                        }
     $data .='</table>';
     echo $data;
}

// insert code
if(isset($_POST['title']) && isset($_POST['price']) && isset($_POST['des1']) ){

    $sql = "INSERT INTO `price`( `title`, `price`, `des1`, `des2`, `des3`, `des4`, `des5`) VALUES ('$title','$price','$des1','$des2','$des3','$des4','$des5')";
    $result = $connect->query($sql);
}

//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `price` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box
if(isset($_POST['id']) && isset($_POST['id']) != ""){ // chechinh weather id is null or not if not then run th next codes
    $priceid = $_POST['id'];//id getting from edit button function
    $sql = "SELECT * from `price` where `id` = '$priceid'";
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



if(isset($_POST['add_hidden_id'])){
    $add_id= $_POST['add_hidden_id'];

    $add_title = $_POST['add_title'];
    $add_price = $_POST['add_price'];
    $add_des1 = $_POST['add_des1'];
    $add_des2 = $_POST['add_des2'];
    $add_des3 = $_POST['add_des3'];
    $add_des4 = $_POST['add_des4'];
    $add_des5 = $_POST['add_des5'];

    $sql = "UPDATE `price` SET `title`='$add_title',`price`='$add_price',`des1`='$add_des1',`des2`='$add_des2',`des3`='$add_des3',`des4`='$add_des4',`des5`='$add_des5' WHERE `id` = '$add_id'";
    $result = $connect->query($sql);
}

?>