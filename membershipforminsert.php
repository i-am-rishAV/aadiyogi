<?php
include 'dbconnect.php';

    $firstname = $_REQUEST['fname'];
    $lastname = $_REQUEST['lname'];
    $gender = $_REQUEST['gendername'];
    $plan = $_REQUEST['planname'];
    $maidid = $_REQUEST['mail'];
    $phoneno = $_REQUEST['phonenumber'];
    $addressdetail = $_REQUEST['address'];
    $postalcode = $_REQUEST['postal'];
    $condtion = $_REQUEST['terms'];
    //  echo "first_name = $firstname <br> Last_name =   $lastname <br> gender =   $gender <br> plan = $plan <br> email = $mailid  <br> phonenumber = $phoneno  <br> address = $addressdetail  <br> pincode = $postalcode ;
    // $query = "INSERT INTO `student`(`mfname`, `mlname`, `mgender`, `memail`, `mphoneno`, `maddress`, `mpostalcode`) VALUES (
    //     '$firstname','$lastname','$gender','$plan','$maidid','$phoneno','$addressdetail','$postalcode' ,'$condtion' )";
   if( mysqli_query($conn, $query))
   echo "Successfully Inserted";
   else 
   echo "error".mysqli_error($conn);
   mysqli_close($conn);
?>