<?php 
$connect = mysqli_connect("localhost","root","","aadiyogi");
// include("session.php");


extract($_POST);


//display code
if(isset($_POST['readrecord'])){
  

                    $display = "SELECT * from `pose`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                            $data = '<table class="table table-hover align-middle mb-0" style="width:100%>
                
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#id</th>
                                
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
            
                                <th scope="col">Delete</th>
                            </tr>
                            ';


                          while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                            <td>'.$number.'</td>
                            
                            <td ><img src="images/'.$row['image'].'" style="width:200px; height:100px;"></td>
                            <td>'.$row['name'].'</td>
                            
                            
                            <td>

                                    <button onclick="deleteUser('.$row['id'].')" class="btn btn-outline-secondary deleterow"><i
                                    class="icofont-ui-delete text-danger"></i></button>
                            
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



    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg'){
    //     
    //     
    //     
           move_uploaded_file($tempimgname,"images/$image" );
           
           
    //  

            $sql = "INSERT INTO `pose`( `name`,`image` ) VALUES ('$name','$image')";
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

    $delete = "DELETE from `pose` where `id` = '$userid'";
    $result = $connect->query($delete);
}


?>