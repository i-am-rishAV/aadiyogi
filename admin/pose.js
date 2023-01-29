

$(document).ready(function () {
    readRecords();
});

// to display on dom function..
function readRecords() {
    let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
    $.ajax({
        url: "pose_db.php",
        type: "post",
        data: { readrecord: readrecord }, // sending data from this page 
        success: function (data, status) {
            $('#records').html(data);  // receiving data from price_db page
        }
    });
}

//add record function..
function addrecord() {
    // storing all the inputs by user in variable 
    
    let name = $('#name').val();
    
    let image = $('#image')[0] .files;
    
    
    let formData = new FormData($('#myform')[0]);
    formData.append('submit','create');

    
        
         $.ajax({

            url:"pose_db.php",
            type: "post",
            data: formData,
            processData:false,
            contentType:false,
            success: function(response){
               if(response== 'success'){
                $('#myform').trigger('reset');
                $('#addclass').modal('hide');
                readRecords();
               }else{
                alert(response);
               }
            }
         });
 


}

//delect recode function..
function deleteUser(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
    let conf = confirm("Are yo sure want to delete this data from database");
    if (conf == true) {
        $.ajax({
            url: "pose_db.php",
            type: "post",
            data: { deleteid: deleteid }, //sending the id to write the delete query using this id
            success: function (data, status) {
                readRecords();// after deleting calling readRecord function to display remaining data
            }

        });
    }

}

//edit record function..



