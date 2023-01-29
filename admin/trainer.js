

$(document).ready(function () {
    readRecords();
});

// to display on dom function..
function readRecords() {
    let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
    $.ajax({
        url: "trainer_db.php",
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

    if(name !=''  && image.length > 0){
        
         $.ajax({

            url:"trainer_db.php",
            type: "post",
            data: formData,
            processData:false,
            contentType:false,
            success: function(response){
               if(response== 'success'){
                $('#myform').trigger('reset');
                $('#addtrainer').modal('hide');
                readRecords();
               }else{
                alert(response);
               }
            }
         });
     

    }else{
        
        alert("please fill all the information");
    };
    


}

//delect recode function..
function deleteUser(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
    let conf = confirm("Are yo sure want to delete this data from database");
    if (conf == true) {
        $.ajax({
            url: "trainer_db.php",
            type: "post",
            data: { deleteid: deleteid }, //sending the id to write the delete query using this id
            success: function (data, status) {
                readRecords();// after deleting calling readRecord function to display remaining data
            }

        });
    }

}

//edit record function..
function editUser(id) {
    $('#hidden_id').val(id); //giving id to the hidden input

    $.post("trainer_db.php", { id: id }, function (data, status) {

        let service = JSON.parse(data); // converting json data to javascript object
        $('#update_name').val(service.name); // accessing the data that we just converted into javascript object
        
       

    }
    );

    $('#updatetrainer').modal("show"); // now showing the modal with all the data

}


function updatetrainer() {
    let add_name = $('#update_name').val();
   

    let add_hidden_id = $('#hidden_id').val();

    if(add_name !='' ){

    $.post("trainer_db.php", {

        add_name: add_name,
        add_hidden_id: add_hidden_id,
        

    },
        function (data, status) {
            $('#updatetrainer').modal("hide");
            readRecords();
        }

    );

    }else{
          alert("please fill all the information");
    }
}