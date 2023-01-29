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
                    <th scope="col">name</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                    
                    <th scope="col">Action</th>
                </tr>
                ';

                    $display = "SELECT * from `contact`";
                    $result = $connect->query($display);

                    if(mysqli_num_rows($result)> 0){
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $data .= '<tr>
                            
                                <td>'.$number.'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['subject'].'</td>
                                <td>'.$row['message'].'</td>
                                
                                <td>
                                <div class="btn-group" role="group"
                                        
                                        <div></div>
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



//delete code

if(isset($_POST['deleteid'])){

    $userid = $_POST['deleteid'];

    $delete = "DELETE from `contact` where `id` = '$userid'";
    $result = $connect->query($delete);
}

// displaying in edit box






?>