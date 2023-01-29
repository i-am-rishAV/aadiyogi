<?php
include 'dbconnect.php';

 $mfn = $_REQUEST['mfname'];
    $mln = $_REQUEST['mlname'];
    $ = $_REQUEST['mmemail'];
    $address = $_REQUEST['mphoneno'];
    $address = $_REQUEST['maddress']
     
    $query = "INSERT INTO `membershipform`(`mid`, `mfname`, `mlname`, `mgender`, `memail`, `mphoneno`, `maddress`, `mpostalcode`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
   if( mysqli_query($conn, $query))
   echo "Successfully Inserted";
   else 
   echo "error".mysqli_error($conn);
   mysqli_close($conn);
?>