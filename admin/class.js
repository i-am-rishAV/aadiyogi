

$(document).ready(function () {
    readRecords();
});

// to display on dom function..
function readRecords() {
    let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
    $.ajax({
        url: "class_db.php",
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
    let yoganame = $('#yoganame').val();
    let time = $('#time').val();
    let week = $('#week').val();
    let image = $('#image')[0] .files;
    let bgimage = $('#bgimage')[0] .files;
    
    let formData = new FormData($('#myform')[0]);
    formData.append('submit','create');

    if(name !='' && yoganame !='' && image.length > 0 &&  time !='' && week !=''
                                                                            ){

    
        
         $.ajax({

            url:"class_db.php",
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

        }else{
            alert ('fill everything correctly');
        }

 


}

//delect recode function..
function deleteUser(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
    let conf = confirm("Are yo sure want to delete this data from database");
    if (conf == true) {
        $.ajax({
            url: "class_db.php",
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

    $.post("class_db.php", { id: id }, function (data, status) {

        let service = JSON.parse(data); // converting json data to javascript object
        $('#update_name').val(service.name); // accessing the data that we just converted into javascript object
        $('#update_yoganame').val(service.yoganame); // accessing the data that we just converted into javascript object
        $('#update_time').val(service.time); // accessing the data that we just converted into javascript object
        $('#update_week').val(service.week); // accessing the data that we just converted into javascript object
       
        
       

    }
    );

    $('#updatetrainer').modal("show"); // now showing the modal with all the data

}


function updatetrainer() {
    let add_name = $('#update_name').val();
    let add_yoganame = $('#update_yoganame').val();
    
    let add_time = $('#update_time').val();
    let add_week = $('#update_week').val();
   

    let add_hidden_id = $('#hidden_id').val();

    $.post("class_db.php", {

        add_name: add_name,
        add_yoganame: add_yoganame,
        add_time: add_time,
        add_week: add_week,
        add_hidden_id: add_hidden_id,
        

    },
        function (data, status) {
            $('#updatetrainer').modal("hide");
            readRecords();
        }

    );
}